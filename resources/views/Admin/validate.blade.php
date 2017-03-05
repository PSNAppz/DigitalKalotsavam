@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Validate User</div>
                <div class="panel-body">

                  <div class="row">
                     <form action="/validate" method="get">
                         {{csrf_field()}}
                          <div class="col-lg-11">
                              <div class="input-group">
                                  <span class="input-group-btn">
                                      <input type="submit" value="Validate" class="btn btn-default" type="button">
                                  </span>
                                  <input type="text" name="id" class="form-control" placeholder="Search for...">
                              </div>
                          </div>
                  </form>
              </div><br><br>
                      @if($true==1)
                      <div class="col-sm-7 col-md-11">
                        <div class="thumbnail">
                          <div class="caption">
                            <h2>{{$results[0]->name}}</h2>
                            <h4 style="color:red">Events Participating</h4>
                            @php $c=0 @endphp
                            @foreach($events as $e)
                                @php$c++@endphp
                            <h6>{{$c}} {{$e->name}}</h6>
                        @endforeach
                          </div>
                        </div>
                      </div>
                  @elseif($true==3)
                      <div class="alert alert-danger" role="alert">User Not Found!</div>
                  @else
                  @endif

                </div>
            </div>
        </div>
      </div>
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
