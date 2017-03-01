@extends('layouts.app')

@section('content')
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
                      <a href="#" class="thumbnail" style="text-decoration:none; ">
                        <center><h1 style="color:#cd201f;"><i class="fa fa-users" aria-hidden="true"></i></span><br>Manage Team </h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#cd201f;"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>View Results</h1></center>
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
<script src="{{ asset('js/app.js') }}"></script>
