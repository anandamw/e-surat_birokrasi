<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = [];

    public static function kodeKategori($nama_kategori)
    {
        // Ambil huruf pertama dari string
        $huruf_pertama = strtoupper(substr($nama_kategori, 0, 1));
        // Pisahkan string berdasarkan spasi
        $kata = explode(' ', $nama_kategori);
        // Ambil 3 huruf pertama dari kata kedua setelah spasi
        $huruf_setelah_spasi = substr($kata[1], 0, 3);
        // Gabungkan hasil
        $hasil = $huruf_pertama . '-' . ucfirst($huruf_setelah_spasi);

        return $hasil;
    }

    public function tipe()
    {
        return $this->hasMany(TipeSurat::class, 'kategori_id', 'id_kategori');
    }

}
