<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutKdController extends Controller
{
    public function kdAbout()
    {
        return view ('ProjectDrama.aboutkd');
    }
}
