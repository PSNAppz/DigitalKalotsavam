@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-0 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><center>Upload File</center></h3></div>
                <div class="panel-body">
                  <form enctype="multipart/form-data" method="POST" action="upload">
                    <label>File Name:</label>
                    <input type="text" name="subject">
                    <br>
                    <input type="file" name="files" id="file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                    <input type="submit" class="btn btn-primary btn-lg" value="Upload">
                  </form>
                  <br>
                  @if($success==1)
                      <div class="alert alert-success" role="alert">File Uploaded Succesfully</div>
                  @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h3><center>Your Uploads</center></h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>File Name</th>
                          <th>Uploaded At</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          <!-- Foreach -->
                          @foreach($uploads as $up)
                              <tr>
                              <th>{{$up->name}}</th>
                              <th>{{$up->created_at}}</th>
                              <th><form method="POST" action="/delfile/{{$up->id}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="submit" value="DELETE" class="btn btn-danger btn-sm">
                              </form></th>
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
@endsection
<script src="{{ asset('js/app.js') }}"></script>
