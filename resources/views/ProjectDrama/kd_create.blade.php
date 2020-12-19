@extends('layouts.Masterkd')
@section('title', 'Edit Talk-Kdrama')
<link rel="stylesheet" type="text/css" href="{{asset('/css/edit.css')}}">

@section('content')
    <div class="edit">
        <div class="card-header">Tambah Data Kdrama</div>
        
        <div class="card-body">
            <form method="POST" action="{{route('editdrama.store')}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Judul :</label>
                    <div class="col-md-6">
                        <input type="text" name="judul" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Kategori :</label>
                    <div class="col-md-6">
                        <select class="kategori" name="id_kategori" id="id_kategori">
                            @foreach($ktg as $item)
                                <option value="{{$item->id_kategori}}">{{$item->namakategori}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Episode :</label>
                    <div class="col-md-6">
                        <input type="text" name="episode" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Durasi :</label>
                    <div class="col-md-6">
                        <input type="text" name="durasi" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Cast :</label>
                    <div class="col-md-6">
                        <input type="text" name="cast" class="form-cast">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 text-md-right">Sinopsis :</label>
                    <div class="col-md-6">
                        <input type="text" name="sinopsis" class="form-sinopsis">
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
@endsection