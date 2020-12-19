<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';
    protected $primaryKey = "id_kategori";
    protected $guarded=[];
    protected $fillable=[
        'id_kategori','namakategori'];

    public function editdrama()
    {
        return $this->hasMany(Editdrama::class, 'id_kategori');
    }
}
