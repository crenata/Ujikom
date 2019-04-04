<?php
namespace App\Helpers;

use App\Models\BarangKeluar;

class Helper {
	public static function keluar($id) {
		$keluar = BarangKeluar::where('barang_masuk_id', $id)->first();
		return $keluar;
	}

	public static function stok($masuk, $keluar) {
		return $masuk - $keluar;
	}
}
?>