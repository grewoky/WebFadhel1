<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function insertsql() 
    {
        $result = DB::insert(query: "insert into anggotas (noanggota, nama, alamat, jurusan, tgl_masuk, notelp, created_at, updated_at) 
        values ('4137253', 'Yudha', 'Plaju', 'Informatika', '2024-10-09', '0812002023', now(), now())"); 
        dump($result);
    }

    public function tampilan()
    {
        $result = DB::select('select * from anggotas');
        return view('tampil-anggota', ['anggotas' => $result]);
    }
}
