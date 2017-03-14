@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Kalotsavam ScoreBoard</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6" >
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 ><span style="color:#09b83e;" aria-hidden="true" >Amritamayi</span><br>{{$amritamayi[0]->total}}</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-6" >
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 ><span style="color:#09b83e;" aria-hidden="true" >Jyothirmayi</span><br>{{$jyothirmayi[0]->total}}</h1></center>
                      </a>
                    </div>
                    <div class="col-xs-12 col-md-6" >
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 "><span style="color:#09b83e; aria-hidden="true" >Anandamayi</span><br>{{$anandamayi[0]->total}}</h1></center>
                      </a>
                    </div>
                     <div class="col-xs-12 col-md-6" >
                      <a href="#" class="thumbnail" style="text-decoration:none;">
                        <center><h1 ><span style="color:#09b83e;" aria-hidden="true" >Chinmayi</span><br>{{$chinmayi[0]->total}}</h1></center>
                      </a>
                    </div>
                    <div class="row" >  
                      <div class="col-xs-12 col-md-6 col-md-offset-3" >
                            <div class="panel panel-default">
                              <div class="panel-heading">Updates</div>
                              <div class="panel-body">
                                 <b><marquee direction="up" style="height:100%; font-size:20px;">
                                   @foreach($ann as $a)
                                   @if($a->type==2)
                                   <div class="panel panel-default">
                                     <div class="panel-body">
                                       <i class="fa fa-trophy" aria-hidden="true"></i>
                                         {{$a->announcement}}</div>
                                    </div>
                                    @endif
                                   @endforeach
                                    </marquee></b>
                              </div>
                            </div>
                      </div>
                    </div>
                     <div class="row" >  
                      <div class="col-xs-12 col-md-6 col-md-offset-3" >
                            <div class="panel panel-default">
                              <div class="panel-heading">Information</div>
                              <div class="panel-body">
                                 <b><marquee direction="up" style="height:100%; font-size:20px;">
                                   @foreach($ann as $a)
                                   @if($a->type==1)
                                   <div class="panel panel-default">
                                     <div class="panel-body">
                                       <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                         {{$a->announcement}}</div>
                                    </div>
                                    @endif
                                   @endforeach
                                    </marquee></b>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
