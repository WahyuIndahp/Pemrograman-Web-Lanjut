<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editdrama extends Model
{
    protected $table='editdrama';
    protected $primaryKey = "id_drama";
    protected $guarded=[];
    protected $fillable = [
        'id_drama', 'judul', 'id_kategori', 'episode', 'durasi', 'cast', 'sinopsis' ];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function getRouteKeyName()
    {
        return 'id_kategori';
    }
}
