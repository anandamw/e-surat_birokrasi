<?php

namespace App\Http\Controllers;

use App\Models\Pengabsahan;
use App\Models\User;
use Illuminate\Http\Request;

class PengabsahanController extends Controller
{
    public function index()
    {
        $data = [
            'pengabsahan' => Pengabsahan::with('user')->get(),
            'user' => User::where('role', 'verifier')->get(),
        ];

        return view('settings.pengabsahan.pengabsahan-view', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'verifikator' => 'required|unique:pengabsahan,user_id',
            'ttd' => 'required|mimes:png|max:2048',
        ], [
            'verifikator' => 'Verifikator sudah ada',
            'ttd' => 'Tanda tangan harus berupa .png dan latar transparan max 2mb',
        ]);

        $token = uniqid();
        $user_id = $request->verifikator;
        $ttd = $request->file('ttd');
        $user_name = User::where('id', $user_id)->first()->name;

        $file_name = 'ttd-'.$user_name.'.'.$ttd->getClientOriginalExtension();

        Pengabsahan::create([
            'token_pengabsahan' => $token,
            'ttd' => $file_name,
            'user_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ttd->move('ttd', $file_name);

        return redirect('/settings/pengabsahan')->with(['create' => "TTD $user_name berhasil  ditambahkan"]);
    }

    public function update(Request $request, Pengabsahan $pengabsahan)
    {
        //
    }

    public function destroy(Pengabsahan $pengabsahan)
    {
        //
    }
}
