<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    public function barang_masuk() {
    	return $this->belongsTo('App\Models\BarangMasuk');
    }
}
