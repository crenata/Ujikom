<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function barangmasuks() {
    	return $this->hasMany('App\Models\BarangMasuk');
    }
}
