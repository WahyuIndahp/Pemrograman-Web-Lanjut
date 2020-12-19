<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageKdController extends Controller
{
    public function Hpage()
    {
        return view('Kdrama.homekd');
    }
}
