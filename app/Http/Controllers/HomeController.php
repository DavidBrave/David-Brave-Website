<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Control The Home or Main Default Page

    public function ShowMe()
    {
        return view("Me\Me");
    }


}