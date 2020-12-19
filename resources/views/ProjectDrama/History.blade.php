@extends('layouts.MasterKd')
@section('title', 'History')
<link rel="stylesheet" type="text/css" href="{{asset('/css/c.css')}}">

@section('greeting')
<div>
    <center> 
        <h1 class="display-4">Welcome To Genre History</h1>
    </center>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
        @foreach($editdrama as $all)
            <div class="col-md-8">
                <a href="{{route('history.artikel',$all->id_kategori)}}">
                    </a>
                    @if($all->id_kategori=='5')
                    <div class="Judul">
                        <h2>{{$all->judul}}</h2>
                            <img class="img-responsive" src="{{asset('/img/history.jpg')}}" alt="">
                            <h3>Info Drama :
                            <p>Episode : {{$all->episode}}</p> 
                        <p>Durasi : {{$all->durasi}}</p></h3>
                        <h3>Cast: 
                            <p>{{$all->cast}}</p></h3>
                            <h3>Sinopsis : 
                                <p>{{$all->sinopsis}}</p></h3>
                            </div>
                        </div>
                        @endif
                        @endforeach

                <!-- catagories -->
                <div class="ctg">
                    <div class="section-title">
                        <h2>Pilih Genre</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="/romance" class="cat-1">Romance<span>-></span></a></li>
                            <li><a href="/action" class="cat-2">Action<span>-></span></a></li>
                            <li><a href="/melo" class="cat-4">MeloDrama<span>-></span></a></li>
                            <li><a href="/Comedy" class="cat-3">Comedy<span>-></span></a></li>
                            <li><a href="/history" class="cat-5">History<span>-></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection