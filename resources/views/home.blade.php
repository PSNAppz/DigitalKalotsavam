@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br>Edit Profile</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><br>View Events</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>My Events</h1></center>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Notifications <span class="badge">4</span></div>
                <div class="panel-body">

                </div>
            </div>
        </div>
      </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
      </div>
</div>
@endsection
