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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pengabsahan $pengabsahan)
    {
        //
    }

    public function edit(Pengabsahan $pengabsahan)
    {
        //
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
