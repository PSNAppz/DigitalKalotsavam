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

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Uploads</div>
                <div class="panel-body">
                    <div style="overflow-x:auto;">
                        <table id="registration" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Owner</th>
                                <th>File Name</th>
                                <th>Uploaded At</th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                                @foreach($uploads as $up)
                                    <tr>
                                    <th>{{$up->id}}</th>
                                    <th>{{$up->name}}</th>
                                    <th>{{$up->owner}}</th>
                                    <th>{{$up->created_at}}</th>
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
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
