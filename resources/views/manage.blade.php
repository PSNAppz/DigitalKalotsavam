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
                <div class="panel-heading">View Team Registration</div>
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
      </div>

        <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Contact Admin
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              Contact Admin
            </div>
          </div>
        </div>
    </div> -->

</div>
@endsection
