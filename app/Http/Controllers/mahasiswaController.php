<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function dataMahasiswa()
    {
        $m1 = ' Budi Santoso';
        $am1 = 'Bandoeng';
        $m2 = ' Siti Aminaah';
        $am2 = 'Djokdjakarta';

        return view(
            'daftar_mahasiswa',
            compact('m1', 'am1', 'm2', 'am2')
        );
    }

    public function nilaiMahasiswa()
    {
        $data = ['Fahmi M'];
        //array scalar

        $s1 = ['nama' => 'Ucup', 'nilai' => 85];
        $s2 = ['nama' => 'Otong', 'nilai' => 58];
        $s3 = ['nama' => 'Dadang', 'nilai' => 95];
        $s4 = ['nama' => 'Usman', 'nilai' => 77];
        //array assocative
        $mhs = [$s1, $s2, $s3, $s4];

        return view(
            'nilai_mhs',
            ['data' => $mhs]

        );
    }
}
