<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['kode_transaksi', 'tgl_pinjam', 'tgl_kembali', 'status', 'buku_id'];

    protected $primarykey = 'id';

    public function buku()
    {
    	return $this->belongsTo('App\buku');
    }
}
