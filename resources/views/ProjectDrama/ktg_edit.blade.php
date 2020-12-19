@extends('layouts.Masterkd')
@section('title', 'Edit Data Kdrama')
<link rel="stylesheet" type="text/css" href="{{asset('/css/ktg.css')}}">

@section('greeting')
<div>
    <center> 
        <h1 class="display-4">Welcome To Kategori Kdrama</h1>
    </center>
</div>
@endsection

@section('content')
    <div class="edit">
        <div class="card-header">Edit Data Kategori Kdrama</div>
        <div class="card-body">
            <form method="POST" action="{{route('kategori.update',$data['id_kategori'])}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Nama Kategori :</label>
                    <div class="col-md-6">
                        <input type="text" name="namakategori" value="{{$data['namakategori']}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right"></label>
                    <div class="col-md-6">
                        <button class="btn btn-save" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection