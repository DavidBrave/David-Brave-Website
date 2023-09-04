<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //Control The Home or Main Default Page

    public function Chess()
    {
        return view("Game\Chess\Chess");
    }


}