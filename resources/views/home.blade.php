@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - {{Auth::User()->name}}</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6" >
                      <a href="/manage" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#09b83e;"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span><br>View Team Registration</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <a href="/upload" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#09b83e;"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><br>Upload File</h1></center>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Support<span class="badge"></span></div>
                <div class="panel-body">
                    <h3>Support</h3>
                    <p>Need Assistance? Submit the form below and you will get a reply from our support team.</p>
                    <form method="POST" action="support">
                      <label for="subject">Subject:</label>
                      <input type="text" name="subject" style=" width:100%;"><br>
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <label for="message">Query:</label>
                      <textarea name="message" style="width:100%; height: 128px;"></textarea>
                      <br><br>
                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                    <hr>
                    @foreach($sup as $s)
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="/logo.jpeg" style="width:64px; height:64px;" alt="digitalkalotsavam">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="delSup/{{$s->id}}" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></a>
                          <h4 class="media-heading"><span style="color:red;">Subject:</span> <b>{{$s->subject}}</b></h4>
                          <p> <b style="color:green;">Reply:</b> {{$s->reply}}</p>
                        </div>
                      </li>
                    </ul>
                @endforeach

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
<script src="{{ asset('js/app.js') }}"></script>
