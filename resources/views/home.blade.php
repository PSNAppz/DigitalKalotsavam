@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - {TEAM NAME}</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6" >
                      <a href="/manage" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#09b83e;"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span><br>View Team Registration</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 style="color:#09b83e;"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><br>View Events</h1></center>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Score Board - {TEAM NAME}<span class="badge"></span></div>
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Announcements<span class="badge"></span></div>
                <div class="panel-body">

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
