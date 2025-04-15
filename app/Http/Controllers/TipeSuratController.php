<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\TipeSurat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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
        // Validasi input
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id_kategori',
            'nama_tipe_surat' => 'required|string|max:255',
            'nama_file' => 'required|file|mimes:doc,docx|max:2048', // maksimal 2MB dan hanya doc/docx
        ]);

        // Proses file upload
        $file = $request->file('nama_file');
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $timestamp = Carbon::now()->format('Ymd_His'); // format: 20250415_142302
        $newFileName = $originalName . '_' . $timestamp . '.' . $extension;

        // Simpan file ke folder storage/app/public/tipe_surat
        $file->storeAs('private/tipe_surat', $newFileName);

        // Simpan ke database
        $data = [
            'token_tipe_surat' => Str::random(6),
            'kategori_id' => $request->kategori_id,
            'nama_tipe_surat' => $request->nama_tipe_surat,
            'nama_file' => $newFileName, // simpan nama file baru
        ];

        TipeSurat::create($data);

        return redirect('/settings/' . auth()->user()->role . '/tipe')->with('success', 'Tipe surat berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $data = [
            'kategori_id' => $request->kategori_id,
            'nama_tipe_surat' => $request->nama_tipe_surat,
            'nama_file' => $request->nama_file,
        ];

        TipeSurat::where('id_tipe_surat', $id)->update($data);
        return redirect('/settings/' . auth()->user()->role . '/tipe');
    }

    public function destroy($id)
    {
        $tipeSurat = TipeSurat::where('id_tipe_surat', $id);
        if ($tipeSurat) {
            $tipeSurat->delete();
            return redirect('/settings/' . auth()->user()->role . '/tipe');
        } else {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }
}
