<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editdrama;
use App\Kategori;

class editdramaController extends Controller
{
    public function editDrama()
    {
    $edit_drama=Editdrama::with('kategori')->latest()->paginate();
    return view('ProjectDrama.editdrama', compact('edit_drama'));
    }

    public function create()
    {
        $ktg= Kategori::all();
        return view('ProjectDrama.kd_create', compact('ktg'));
    }

    public function store(Request $request)
    {
        Editdrama::create($request->all());
        return redirect()->route('editdrama');
    }

    public function edit($id)
    {
        $ktg= Kategori::all();
        $data=EditDrama::with('kategori')->findorfail($id);
        return view ('ProjectDrama.kd_edit', compact('data','ktg'));
    }

    public function update(Request $request, $id)
    {
        $data=EditDrama::findorfail($id);
        $data->update($request->all());
        return redirect(route('editdrama'))->with('toats_success','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $data=EditDrama::where('id_drama', $id)
            ->delete();
        return redirect()->route('editdrama');
    }
}
