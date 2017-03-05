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
            $('#reg').dataTable();
         }
        )
    </script>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <i class="fa fa-tachometer" aria-hidden="true"></i></div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#cd201f;"><i class="fa fa-history" aria-hidden="true"></i><br>Manage Logs</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <a href="/rule" class="thumbnail" style="text-decoration:none; ">
                        <center><h1 style="color:#cd201f;"><i class="fa fa-refresh" aria-hidden="true"></i></span><br>Execute</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#cd201f;"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>View Registration</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#cd201f;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><br>Publish Score</h1></center>
                      </a>
                    </div>

                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Warning List<span class="badge"></span></div>
                <div class="panel-body">
                    <div>
                        <table id="reg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>House</th>
                                <th>Type</th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                                <tr>
                                    <th>{$s->name}}</th>
                                    <th>{$s->rollno}}</th>
                                    <th>{$s->email}}</th>
                                    <th>Type</th>

                                </tr>
                                    <!-- End -->
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Score Board<span class="badge"></span></div>
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Support <i class="fa fa-comments-o" aria-hidden="true"></i></div>
                <div class="panel-body">
                    @foreach($sup as $s)
                            <ul class="media-list">
                              <li class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="/logo.jpeg" style="width:64px; height:64px;" alt="digitalkalotsavam">
                                  </a>
                                </div>
                                <div class="media-body">
                                   <a href="deleteSup/{{$s->id}}" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></a>
                                  <h4 class="media-heading">#{{$s->id}} {{$s->subject}}</h4>
                                  <h6>{{$s->message}}</h6>
                                  <form method="POST" action="supportReply/{{$s->id}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <label>Reply:</label><br>
                                    <textarea name="reply" style="width:100%; height:60px;"></textarea>
                                    <br><br>
                                    <input type="submit" class="btn btn-success" value="Reply">
                                  </form>
                                </div>
                              </li>
                            </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
