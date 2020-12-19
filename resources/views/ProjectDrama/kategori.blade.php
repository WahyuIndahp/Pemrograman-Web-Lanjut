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
        <div class="card-header">Data Kategori Kdrama</div>
        <p><a href="{{route('kategori.create')}}" class="btn btn-tambah">Tambah Kategori</a></p>
        <div class="data">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
                    @php $no=0; @endphp 
                    @foreach($list_kategori as $item)
                    @php $no++; @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item['namakategori']}}</td>
                            <td><a href="{{route('kategori.edit',$item['id_kategori'])}}" class="btn btn_edit">Edit</a><a href="{{route('kategori.delete',$item['id_kategori'])}}" onclick="return confirm('Yakin Menghapus Kategori {{$item['namakategori']}} ?')" class="btn btn_del">Delete</a></td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection