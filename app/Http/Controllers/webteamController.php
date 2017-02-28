<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webteamController extends Controller
{
    public function index() {
        return view('webteam.index');
    }
}
