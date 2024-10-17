<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {

        return response()->json(auth()->user()->role);
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
        $kode_kategori = $nama_kategori;

        Kategori::create([
            'token_kategori' => $token,
            'nama_kategori' => $nama_kategori,
            'kode_kategori' => $kode_kategori,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->with();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
