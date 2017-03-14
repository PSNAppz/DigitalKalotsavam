<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicScore as PS;
use ConsoleTVs\Charts\Facades\Charts;
use App\Announcement as Ann;


class ScoreController extends Controller
{
    /**
     * Show the Public Score Board
     *
     * @return \Illuminate\Http\Response
     */
    public function show(){
      $amritamayi = PS::where('house','Amritamayi')->get();
      $jyothirmayi= PS::where('house','Jyothirmayi')->get();
      $anandamayi= PS::where('house','Anandamayi')->get();
      $chinmayi= PS::where('house','Chinmayi')->get();
      $ann= Ann::get();
      $pie =Charts::create('bar', 'fusioncharts')
      ->title('Score Analytics')
      ->labels(['Amritamayi', 'Jyothirmayi', 'Anandamayi','Chinmayi'])
      ->values([$amritamayi[0]->total,$jyothirmayi[0]->total,$anandamayi[0]->total,$chinmayi[0]->total])
      ->dimensions(600,500)
      ->colors(['#00B0FF', '#F9A825','#EC407A','#8BC34A'])
      ->responsive(false);

      return view('scoreboard.score')->withAmritamayi($amritamayi)
      ->withJyothirmayi($jyothirmayi)->withAnandamayi($anandamayi)
      ->withChinmayi($chinmayi)->withPie($pie)->withAnn($ann);
    }
     /**
     * Show the Public Score Board
     *
     * @return \Illuminate\Http\Response
     */
    public function mob(){
      $amritamayi = PS::where('house','Amritamayi')->get();
      $jyothirmayi= PS::where('house','Jyothirmayi')->get();
      $anandamayi= PS::where('house','Anandamayi')->get();
      $chinmayi= PS::where('house','Chinmayi')->get();
            $ann= Ann::get();
      return view('scoreboard.mob')->withAnn($ann)->withAmritamayi($amritamayi)
      ->withJyothirmayi($jyothirmayi)->withAnandamayi($anandamayi)
      ->withChinmayi($chinmayi);
    }

}
