
@extends('layouts.app1')

</head>
@section('content')
<style>
 @media only screen and (max-width: 500px) {
    #score {
        margin-top: 0px;
    }
    .panel-default {
      height: 50px;
    }
}

body {
  background-color: #f2f1ed;
}

.wrap {
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
  height: 310px;
}

a {
  text-decoration: none;
  color: #1a1a1a;
}

h1 {
  margin-bottom: 60px;
  text-align: center;
  font: 300 2.25em "Raleway";
  text-transform: uppercase;
}
h1 strong {
  font-weight: 400;
  color: #ea4c4c;
}

h2 {
  margin-bottom: 80px;
  text-align: center;
  font: 300 0.7em "Raleway";
  text-transform: uppercase;
}
h2 strong {
  font-weight: 400;
}

.countdown {
  width: 1000px;
  margin: 0 auto;
}
.countdown .bloc-time {
  float: left;
  margin-right: 200px;
  text-align: center;
  margin-left: 115px;
}
.countdown .bloc-time {
  margin-right: 0;
  margin-top: 20px;
}
.countdown .count-title {
  display: block;
  margin-bottom: 15px;
  font: normal 0.94em "Raleway";
  color: #1a1a1a;
  font-size: x-large;
  text-transform: uppercase;
}
.countdown .figure {
  position: relative;
  float: left;
  height: 110px;
  width: 100px;
  margin-right: 10px;
  background-color: #fff;
  border-radius: 8px;
  -moz-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2), inset 2px 4px 0 0 rgba(255, 255, 255, 0.08);
  -webkit-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2), inset 2px 4px 0 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2), inset 2px 4px 0 0 rgba(255, 255, 255, 0.08);
}
.countdown .figure:last-child {
  margin-right: 0;
}
.countdown .figure > span {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  font: normal 5.94em/107px "Raleway";
  font-weight: 700;
  color: #de4848;
}
.countdown .figure .top:after, .countdown .figure .bottom-back:after {
  content: "";
  position: absolute;
  z-index: -1;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.countdown .figure .top {
  z-index: 4;
  background-color: #f7f7f7;
  transform-origin: 50% 100%;
  -webkit-transform-origin: 50% 100%;
  -moz-border-radius-topleft: 10px;
  -webkit-border-top-left-radius: 10px;
  border-top-left-radius: 10px;
  -moz-border-radius-topright: 10px;
  -webkit-border-top-right-radius: 10px;
  border-top-right-radius: 10px;
  -moz-transform: perspective(200px);
  -ms-transform: perspective(200px);
  -webkit-transform: perspective(200px);
  transform: perspective(200px);
}
.countdown .figure .bottom {
  z-index: 1;
}
.countdown .figure .bottom:before {
  content: "";
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  width: 100%;
  height: 50%;
  background-color: rgba(0, 0, 0, 0.02);
}
.countdown .figure .bottom-back {
  z-index: 2;
  top: 0;
  height: 50%;
  overflow: hidden;
  background-color: #f7f7f7;
  -moz-border-radius-topleft: 10px;
  -webkit-border-top-left-radius: 10px;
  border-top-left-radius: 10px;
  -moz-border-radius-topright: 10px;
  -webkit-border-top-right-radius: 10px;
  border-top-right-radius: 10px;
}
.countdown .figure .bottom-back span {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.countdown .figure .top, .countdown .figure .top-back {
  height: 50%;
  overflow: hidden;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.countdown .figure .top-back {
  z-index: 4;
  bottom: 0;
  background-color: #fff;
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -moz-transform: perspective(200px) rotateX(180deg);
  -ms-transform: perspective(200px) rotateX(180deg);
  -webkit-transform: perspective(200px) rotateX(180deg);
  transform: perspective(200px) rotateX(180deg);
  -moz-border-radius-bottomleft: 10px;
  -webkit-border-bottom-left-radius: 10px;
  border-bottom-left-radius: 10px;
  -moz-border-radius-bottomright: 10px;
  -webkit-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
.countdown .figure .top-back span {
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  margin: auto;
}

</style>

{!! Charts::assets() !!}


<div class="row">
  <!--<h1>SCORE <strong>Board</strong></h1>-->
  <div class="col-md-6 col-xs-12">

    {!! $pie->render() !!}
  </div>
  <div class="col-md-6 col-xs-12" style="margin-top:0px" id="score">
  <div class="countdown"  style="margin-left: 90px;">
    <div class="bloc-time hours" data-init-value="24">
      <span class="count-title">Amritamayi</span>

      <div class="figure hours hours-1">
        <span class="top">{{$amritamayi[0]->fscore}}</span>
        <span class="top-back">
          <span>{{$amritamayi[0]->fscore}}</span>
        </span>
        <span class="bottom">{{$amritamayi[0]->fscore}}</span>
        <span class="bottom-back">
          <span>{{$amritamayi[0]->fscore}}</span>
        </span>
      </div>

      <div class="figure hours hours-2">
        <span class="top">{{$amritamayi[0]->sscore}}</span>
        <span class="top-back">
          <span>{{$amritamayi[0]->sscore}}</span>
        </span>
        <span class="bottom">{{$amritamayi[0]->sscore}}</span>
        <span class="bottom-back">
          <span>{{$amritamayi[0]->sscore}}</span>
        </span>
      </div>

    <div class="figure hours hours-3">
      <span class="top">{{$amritamayi[0]->tscore}}</span>
      <span class="top-back">
        <span>{{$amritamayi[0]->tscore}}</span>
      </span>
      <span class="bottom">{{$amritamayi[0]->tscore}}</span>
      <span class="bottom-back">
        <span>{{$amritamayi[0]->tscore}}</span>
      </span>
    </div>
    <div class="figure hours hours-4">
      <span class="top">{{$amritamayi[0]->foscore}}</span>
      <span class="top-back">
        <span>{{$amritamayi[0]->foscore}}</span>
      </span>
      <span class="bottom">{{$amritamayi[0]->foscore}}</span>
      <span class="bottom-back">
        <span>{{$amritamayi[0]->foscore}}</span>
      </span>
    </div>
  </div>

    <div class="bloc-time hours" data-init-value="24">
      <span class="count-title">Jyothirmayi</span>

      <div class="figure hours hours-1">
        <span class="top">{{$jyothirmayi[0]->fscore}}</span>
        <span class="top-back">
          <span>1</span>
        </span>
        <span class="bottom">{{$jyothirmayi[0]->fscore}}</span>
        <span class="bottom-back">
          <span>{{$jyothirmayi[0]->fscore}}</span>
        </span>
      </div>

      <div class="figure hours hours-2">
        <span class="top">{{$jyothirmayi[0]->sscore}}</span>
        <span class="top-back">
          <span>{{$jyothirmayi[0]->sscore}}</span>
        </span>
        <span class="bottom">{{$jyothirmayi[0]->sscore}}</span>
        <span class="bottom-back">
          <span>{{$jyothirmayi[0]->sscore}}</span>
        </span>
      </div>

      <div class="figure hours hours-3">
        <span class="top">{{$jyothirmayi[0]->tscore}}</span>
        <span class="top-back">
          <span>{{$jyothirmayi[0]->tscore}}</span>
        </span>
        <span class="bottom">{{$jyothirmayi[0]->tscore}}</span>
        <span class="bottom-back">
          <span>{{$jyothirmayi[0]->tscore}}</span>
        </span>
      </div>
      <div class="figure hours hours-4">
        <span class="top">{{$jyothirmayi[0]->foscore}}</span>
        <span class="top-back">
          <span>{{$jyothirmayi[0]->foscore}}</span>
        </span>
        <span class="bottom">{{$jyothirmayi[0]->foscore}}</span>
        <span class="bottom-back">
          <span>{{$jyothirmayi[0]->foscore}}</span>
        </span>
      </div>
    </div>

    <div class="bloc-time min" data-init-value="0">
      <span class="count-title">Anandamayi</span>

      <div class="figure min min-1">
        <span class="top">{{$anandamayi[0]->fscore}}</span>
        <span class="top-back">
          <span>{{$anandamayi[0]->fscore}}</span>
        </span>
        <span class="bottom">{{$anandamayi[0]->fscore}}</span>
        <span class="bottom-back">
          <span>{{$anandamayi[0]->fscore}}</span>
        </span>
      </div>

      <div class="figure min min-2">
       <span class="top">{{$anandamayi[0]->sscore}}</span>
        <span class="top-back">
          <span>{{$anandamayi[0]->sscore}}</span>
        </span>
        <span class="bottom">{{$anandamayi[0]->sscore}}</span>
        <span class="bottom-back">
          <span>{{$anandamayi[0]->sscore}}</span>
        </span>
      </div>
      <div class="figure min min-3">
       <span class="top">{{$anandamayi[0]->tscore}}</span>
        <span class="top-back">
          <span>{{$anandamayi[0]->tscore}}</span>
        </span>
        <span class="bottom">{{$anandamayi[0]->tscore}}</span>
        <span class="bottom-back">
          <span>{{$anandamayi[0]->tscore}}</span>
        </span>
      </div>
      <div class="figure min min-4">
       <span class="top">{{$anandamayi[0]->foscore}}</span>
        <span class="top-back">
          <span>{{$anandamayi[0]->foscore}}</span>
        </span>
        <span class="bottom">{{$anandamayi[0]->foscore}}</span>
        <span class="bottom-back">
          <span>{{$anandamayi[0]->foscore}}</span>
        </span>
      </div>
    </div>



    <div class="bloc-time sec" data-init-value="0">
      <span class="count-title">Chinmayi</span>

        <div class="figure sec sec-1">
        <span class="top">{{$chinmayi[0]->fscore}}</span>
        <span class="top-back">
          <span>{{$chinmayi[0]->fscore}}</span>
        </span>
        <span class="bottom">{{$chinmayi[0]->fscore}}</span>
        <span class="bottom-back">
          <span>{{$chinmayi[0]->fscore}}</span>
        </span>
      </div>

      <div class="figure sec sec-2">
        <span class="top">{{$chinmayi[0]->sscore}}</span>
        <span class="top-back">
          <span>{{$chinmayi[0]->sscore}}</span>
        </span>
        <span class="bottom">{{$chinmayi[0]->sscore}}</span>
        <span class="bottom-back">
          <span>{{$chinmayi[0]->sscore}}</span>
        </span>
      </div>
      <div class="figure sec sec-3">
        <span class="top">{{$chinmayi[0]->tscore}}</span>
        <span class="top-back">
          <span>{{$chinmayi[0]->tscore}}</span>
        </span>
        <span class="bottom">{{$chinmayi[0]->tscore}}</span>
        <span class="bottom-back">
          <span>{{$chinmayi[0]->tscore}}</span>
        </span>
      </div>
      <div class="figure sec sec-4">
        <span class="top">{{$chinmayi[0]->foscore}}</span>
        <span class="top-back">
          <span>{{$chinmayi[0]->foscore}}</span>
        </span>
        <span class="bottom">{{$chinmayi[0]->foscore}}</span>
        <span class="bottom-back">
          <span>{{$chinmayi[0]->foscore}}</span>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="row" style="display:block">
  <div class="col-md-4 col-md-offset-4 col-xs-12" style="margin-top:10px">
        <div class="panel panel-default">
          <div class="panel-heading">Winners</div>
          <div class="panel-body" style="height:50%;">
             <b><marquee direction="up" style="height:100%; font-size:30px;">
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
</div>
<br>
<br>
<div class="alert alert-info" role="alert" style="padding-top: 0px;width:100%;padding-bottom:75px;font-size:45px;margin-bottom:0px;height:0px;bottom:0;">
  @foreach($ann as $a)
    @if($a->type!=2)
      <b><marquee direction="right"><span class="label label-success"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> Updates</span>
      {{$a->announcement}}

      </marquee></b>
    @endif
 @endforeach
</div>

@endsection
<script src="{{ asset('js/app.js') }}"></script>
