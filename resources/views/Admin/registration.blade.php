@extends('layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />
   <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- DATA TABLES DONOT TOUCH-->

        <script>
        $(document).ready(
         function() {
            $('#registration').dataTable();
         }
        )
    </script>

<div class="container" style="width:95%;">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-list-alt" aria-hidden="true"></i> View Team Registration</div>
                <div class="panel-body">

                    <div style="overflow-x:auto;">
                        <table id="registration" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Email</th>
                                <th>Classical dance boys</th>
                                <th>Classical dance girls</th>
                                <th>Semi classical dance boys</th>
                                <th>Semi classical dance girls</th>

                                <th>Total Events</th>

                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                                @foreach($stud as $s)
                                    @php $total=0; @endphp
                                    <tr>
                                    <th>{{$s->name}}</th>
                                    <th>{{$s->rollno}}</th>
                                    <th>{{$s->email}}</th>
                                    <th>@if ($s->classical_dance_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->classical_dance_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->semi_classical_dance_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->semi_classical_dance_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@php echo $total; @endphp</th>
                                    </tr>
                                @endforeach
                                    <!-- End -->
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-sort" aria-hidden="true"></i> Sort Data<span class="badge"></span></div>
                <div class="panel-body">
                    <form class="dropdown" action="/registrations/" method="get">
                        <select name="sort" id="sort" onchange="this.form.submit()">
                            <option value="">Select an Item</option>
                            <option value="classical_dance_boys">Classical Dance Boys</option>
                            <option value="classical_dance_girls">Classical Dance Girls</option>
                            <option value="4">Four</option>
                        </select>
                    </form>
                    <br>
                    @if($count)<h4> Total Participants for {{$name}} : {{$count}}</h4>@endif
                    <br>
                    <div>
                        <table id="reg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Email</th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                            @if($sort)
                                @foreach($sort as $s)
                                <tr>
                                    <th>{{$s->name}}</th>
                                    <th>{{$s->rollno}}</th>
                                    <th>{{$s->email}}</th>
                                </tr>
                                @endforeach
                            @endif
                                    <!-- End -->
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
