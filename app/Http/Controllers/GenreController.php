<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editdrama;
use App\Kategori;

class GenreController extends Controller
{
    public function romance(Kategori $id_kategori)
    {
        $editdrama = Editdrama::latest()->get();
        $kategori = $id_kategori;
        $kategori = 1;
        return view('ProjectDrama.Romance', compact('editdrama','kategori'));
    }
    public function show(Editdrama $editdrama)
    {
        $editdrama = Editdrama::latest()->get();
        $ktg = Kategori::all();
        return view('ProjectDrama.Romance', compact('editdrama','ktg'));
    }

    public function action(Kategori $id_kategori)
    {
        $editdrama = Editdrama::latest()->get();
        $kategori = $id_kategori;
        $kategori = 2;
        return view('ProjectDrama.Action', compact('editdrama','kategori'));
    }
    
    public function showAc(Editdrama $editdrama)
    {
        $editdrama = Editdrama::latest()->get();
        $ktg = Kategori::all();
        return view('ProjectDrama.Action', compact('editdrama','ktg'));
    }

    public function melo(Kategori $id_kategori)
    {
        $editdrama = Editdrama::latest()->get();
        $kategori = $id_kategori;
        $kategori = 3;
        return view('ProjectDrama.Melodrama', compact('editdrama','kategori'));
    }
    public function showmelo(Editdrama $editdrama)
    {
        $editdrama = Editdrama::latest()->get();
        $ktg = Kategori::all();
        return view('ProjectDrama.Melodrama', compact('editdrama','ktg'));
    }

    public function comedy(Kategori $id_kategori)
    {
        $editdrama = Editdrama::latest()->get();
        $kategori = $id_kategori;
        $kategori = 4;
        return view('ProjectDrama.Comedy', compact('editdrama','kategori'));
    }
    public function showcom(Editdrama $editdrama)
    {
        $editdrama = Editdrama::latest()->get();
        $ktg = Kategori::all();
        return view('ProjectDrama.Comedy', compact('editdrama','ktg'));
    }

    public function history(Kategori $id_kategori)
    {
        $editdrama = Editdrama::latest()->get();
        $kategori = $id_kategori;
        $kategori = 3;
        return view('ProjectDrama.History', compact('editdrama','kategori'));
    }
    public function showhis(Editdrama $editdrama)
    {
        $editdrama = Editdrama::latest()->get();
        $ktg = Kategori::all();
        return view('ProjectDrama.History', compact('editdrama','ktg'));
    }
}
