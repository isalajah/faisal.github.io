<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "buku";
    protected $fillable = ['judul_buku','jenis_buku', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_buku'];

    protected $primarykey = 'id';

    public function transaksi(): HasMany
    {
    	return $this->HasMany('App\transaksi');
    }
}
