<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        // Seeder fakultas
        for ($i = 1; $i <= 5; $i++) {
            $fakultasId = DB::table('fakultas')->insertGetId([
                'token_fakultas' => Str::random(10),
                'nama_fakultas' => 'Fakultas ' . $i,
                'kode_fakultas' => 'F' . sprintf('%02d', $i),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Seeder prodi untuk setiap fakultas
            for ($j = 1; $j <= 5; $j++) {
                $prodiId = DB::table('prodi')->insertGetId([
                    'token_prodi' => Str::random(10),
                    'fakultas_id' => $fakultasId,
                    'nama_prodi' => 'Prodi ' . $j . ' Fakultas ' . $i,
                    'kode_prodi' => 'P' . sprintf('%02d', $j) . '-F' . sprintf('%02d', $i),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Seeder mahasiswa untuk setiap prodi
                for ($k = 1; $k <= 10; $k++) {
                    DB::table('mahasiswa')->insert([
                        'token_mhs' => Str::random(10),
                        'prodi_id' => $prodiId,
                        'nama_mhs' => 'Mahasiswa ' . $k . ' Prodi ' . $j . ' Fakultas ' . $i,
                        'nim_mhs' => 'NIM' . sprintf('%04d', $k) . '-P' . sprintf('%02d', $j) . '-F' . sprintf('%02d', $i),
                        'email_mhs' => 'mhs' . $k . '_p' . $j . '_f' . $i . '@example.com',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
