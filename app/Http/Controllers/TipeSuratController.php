<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\TipeSurat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TipeSuratController extends Controller
{
    public function index()
    {
        $kategori = TipeSurat::join('kategori', 'tipe_surat.kategori_id', '=', 'kategori.id_kategori')->get();
        $getKategori = Kategori::all();
        return view('settings.tipe_surat.tipe-view', compact('kategori', 'getKategori'));
    }

    public function store(Request $request)
    {
        $data = [
            "token_tipe_surat" => Str::random(6),
            "kategori_id" => $request->kategori_id,
            "nama_tipe_surat" => $request->nama_tipe_surat,
            "nama_file" => $request->nama_file
        ];

        TipeSurat::create($data);
        return response()->json('success');
    }




    public function update(Request $request, $id)
    {

        $data = [
            "kategori_id" => $request->kategori_id,
            "nama_tipe_surat" => $request->nama_tipe_surat,
            "nama_file" => $request->nama_file
        ];

        TipeSurat::where('id_tipe_surat', $id)->update($data);
        return redirect('/settings');
    }

    public function destroy($id)
    {
        $tipeSurat = TipeSurat::find($id);
        if ($tipeSurat) {
            $tipeSurat->delete();
            return response()->json('success');
        } else {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }
}
