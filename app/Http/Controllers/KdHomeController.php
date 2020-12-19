<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KdHomeController extends Controller
{
    public function Homedrama()
    {
        return view('ProjectDrama.kdrama');
    }
}
