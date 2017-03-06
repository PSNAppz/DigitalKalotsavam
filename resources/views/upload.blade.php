@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-5 col-md-0 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><center>Upload File</center></h3></div>
                <div class="panel-body">
                  <form enctype="multipart/form-data" method="POST" action="upload">
                    <label>File Name:</label>
                    <input type="text" name="subject">
                    <br>
                    <input type="file" name="files" id="file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Upload">
                  </form>
                  <br>
                  @if($success==1)
                      <div class="alert alert-success" role="alert">File Uploaded Succesfully</div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
