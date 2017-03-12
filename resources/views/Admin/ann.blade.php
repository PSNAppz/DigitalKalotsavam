@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Announce</div>
                <div class="panel-body">
                  <div class="row">
                     <form action="/addann" method="post">
                         {{csrf_field()}}
                         <h4>&nbsp;&nbsp;&nbsp;Announcement</h4><br>
                        <textarea style="margin-left:10px;width: 447px; height: 198px;" name="msg" required="true"></textarea>
                        <h4>&nbsp;&nbsp;&nbsp;Type</h4>
                        <select name="type" style="margin-left:10px;" required="true">
                            <option value=1>News</option>
                            <option value=2>Winner Announcement</option>
                       </select><br><br>
                       <input type="submit" style="margin-left:10px;" value="Announce" class="btn btn-lg btn-primary">
                  </form>
              </div>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
