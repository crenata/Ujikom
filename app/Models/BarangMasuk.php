<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    public function supplier() {
    	return $this->belongsTo('App\Models\Supplier');
    }

    public function barang_keluar() {
    	return $this->belongsTo('App\Models\BarangKeluar');
    }
}
