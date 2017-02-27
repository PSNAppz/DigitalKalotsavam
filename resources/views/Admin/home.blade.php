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
                        <center><h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br>Manage/View Users</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none; ">
                        <center><h1><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><br>Manage Events</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>View ScoreBoard</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><br>Manage Registration</h1></center>
                      </a>
                    </div>

                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Notifications</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
