<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\TipeSurat;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            'kategori' => Kategori::withCount('tipe')->get(),
        ];
        return view('settings.kategori.kategori-view', $data);
    }

    public function store(Request $request)
    {
        $nama_kategori = $request->nama_kategori;

        $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'nama_kategori' => "Nama kategori $nama_kategori sudah di gunakan"
        ]);

        $token = uniqid();
        $kode_kategori = Kategori::kodeKategori($nama_kategori);

        Kategori::create([
            'token_kategori' => $token,
            'nama_kategori' => $nama_kategori,
            'kode_kategori' => $kode_kategori,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/settings/kategori')->with(['success' => "Berhasil menambahkan Data $nama_kategori"]);
    }

    public function update(Request $request, $q)
    {
        $nama_kategori = $request->nama_kategori;

        $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'nama_kategori' => "Nama kategori $nama_kategori sudah di gunakan"
        ]);

        $token = uniqid();
        $kode_kategori = Kategori::kodeKategori($nama_kategori);

        Kategori::where('token_kategori', $q)->update([
            'token_kategori' => $token,
            'nama_kategori' => $nama_kategori,
            'kode_kategori' => $kode_kategori,
            'updated_at' => now()
        ]);

        return redirect('/settings/kategori')->with(['success' => "Berhasil mengedit Data $nama_kategori"]);
    }

    public function destroy($q)
    {
        $raw = Kategori::where('token_kategori', $q);
        $data = TipeSurat::where('kategori_id', $raw->first()->id)->first();

        if($data){
            return redirect('/settings/kategori')->with(['error' => "Tidak dapat menghapus data "]);
        } else {
            $raw->delete();
        }

        return redirect()->with();
    }
}
