<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'pemasukan';
    protected $fillable = ['kategori_id','tanggal','jumlah','keterangan'];

    //function relasi ke tapel
    public function kategori()
      {
          return $this->belongsTo('Laravel\Kategori');
      }
}
