@extends('layouts.Masterkd')
@section('title', 'Edit Data Kdrama')
<link rel="stylesheet" type="text/css" href="{{asset('/css/edit.css')}}">

@section('greeting')
<div>
    <center> 
        <h1 class="display-4">Welcome To Edit Data Kdrama</h1>
    </center>
</div>
@endsection

@section('content')
    <div class="edit">
        <div class="card-header">Data Kdrama</div>
        <p><a href="{{route('editdrama.create')}}" class="btn btn-tambah">Tambah Data</a></p>
        <div class="data">
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Episode</th>
                    <th>Durasi</th>
                    <th>Cast</th>
                    <th>Sinopsis</th>
                    <th>Action</th>
                </tr>
                    @php $no=0; @endphp 
                    @foreach($edit_drama as $item)
                    @php $no++; @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item['judul']}}</td>
                            <td>{{$item->kategori-> namakategori}}</td>
                            <td>{{$item['episode']}}</td>
                            <td>{{$item['durasi']}}</td>
                            <td>{{$item['cast']}}</td>
                            <td>{{$item['sinopsis']}}</td>
                            <td><a href="{{route('editdrama.edit',$item['id_drama'])}}" class="btn btn_edit">Edit</a><a href="{{route('editdrama.delete',$item['id_drama'])}}" onclick="return confirm('Yakin Menghapus Data Drama {{$item['judul']}} ?')" class="btn btn_del">Delete</a></td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection