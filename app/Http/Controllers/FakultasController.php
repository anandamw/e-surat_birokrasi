<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FakultasController extends Controller
{

    public function index()
    {
        $fakultas = Fakultas::all();

        return view('settings.fakultas.fakultas-view', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token = Str::random(8);
        $fakultas = $request->nama_fakultas;
        $kode = $token . '_' . $fakultas . '_UNIBA_MADURA';

        $data = [
            'token_fakultas' => $token,
            'nama_fakultas' => $fakultas,
            'kode_fakultas' => $kode
        ];

        Fakultas::create($data);
        return redirect('/settings/fakultas');
    }


    public function update(Request $request, $q)
    {
        $token = Str::random(8);
        $fakultas = $request->nama_fakultas;
        $kode = $token . '_' . $fakultas . '_UNIBA_MADURA';

        $data = [
            'token_fakultas' => $token,
            'nama_fakultas' => $fakultas,
            'kode_fakultas' => $kode
        ];

        Fakultas::where('id_fakultas', $q)->update($data);
        return redirect('/settings/fakultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
