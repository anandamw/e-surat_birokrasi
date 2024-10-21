<?php

namespace App\Http\Controllers;

use App\Models\Pengabsahan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function update(Request $request, $q)
    {
        $ttd = $request->file('ttd');
        $pengabsahan = Pengabsahan::where('token_pengabsahan', $q)->first();
        $token = uniqid();
        $user_name = User::where('id', $pengabsahan->user_id)->first()->name;

        if($request->hasFile('ttd')) {
            $request->validate([
                'ttd' => 'required|mimes:png|max:2048',
            ], [
                'ttd' => 'Tanda tangan harus berupa .png dan latar transparan max 2mb',
            ]);

            $file_name = 'ttd-'.$user_name.'.'.$ttd->getClientOriginalExtension();

            $ttd->move('ttd', $file_name);
            File::delete("ttd/$pengabsahan->ttd");
        } else{
            $file_name = $pengabsahan->ttd;
        }

        Pengabsahan::where('id_pengabsahan', $pengabsahan->id_pengabsahan)->update([
            'token_pengabsahan' => $token,
            'ttd' => $file_name,
            'updated_at' => now(),
        ]);

        return redirect('/settings/pengabsahan')->with(['edit' => "TTD $user_name berhasil  ditambahkan"]);
    }

    public function destroy($q)
    {
        $raw = Pengabsahan::where('token_pengabsahan', $q);

        File::delete('ttd/'.$raw->first()->ttd);

        $raw->delete();

        return redirect('/settings/pengabsahan')->with(['delete' => "Data berhasil di hapus"]);
    }
}
