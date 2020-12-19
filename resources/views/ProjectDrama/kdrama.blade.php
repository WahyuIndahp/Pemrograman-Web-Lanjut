@extends('layouts.Masterkd')
@section('title', 'Talk-Kdrama')
<link rel="stylesheet" type="text/css" href="{{asset('/css/kd.css')}}">

@section('greeting')
<div>
    <center> 
        <h1 class="display-4">Welcome To Talk-Kdrama</h1>
    </center>
</div>
@endsection

@section('content')
<div class="slidershow middle">
    <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <input type="radio" name="r" id="r6">
        <div class="slide s1">
            <img src="/img/1.jpg" alt="">
        </div>
        <div class="slide">
            <img src="/img/2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="/img/3.png" alt="">
        </div>
        <div class="slide">
            <img src="/img/4.jpg" alt="">
        </div>
        <div class="slide">
            <img src="/img/5.jpg" alt="">
        </div>
        <div class="slide">
            <img src="/img/6.jpg" alt="">
        </div>
    </div>
</div>

<div class="navigation">
    <label for="r1" class="bar"></label>
    <label for="r2" class="bar"></label>
    <label for="r3" class="bar"></label>
    <label for="r4" class="bar"></label>
    <label for="r5" class="bar"></label>
    <label for="r6" class="bar"></label>
</div>
@endsection