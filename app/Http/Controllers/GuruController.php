<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function cek_koneksi()
    {
        $guru = new Guru();
        dump($guru);
    }

    public function all_guru()
    {
        $guru = Guru::all();
        dump($guru);
    }

    public function simpan_guru($nik, $nama, $tgl, $alamat)
    {
        $guru = new Guru();
        $guru->nik = $nik;
        $guru->nama = $nama;
        $guru->tgl_lahir = $tgl;
        $guru->alamat = $alamat;
        $guru->save();
        dump($guru);
    }

    public function find_guru($find)
    {
        $guru = Guru::find($find);
        dump($guru);
    }

    public function hapus_guru($find)
    {
        $guru = Guru::find($find);
        $guru->delete();
        dump($guru);
    }

    public function edit_guru($find, $nik, $nama, $tgl, $alamat)
    {
        $guru = Guru::find($find);
        $guru->nik = $nik;
        $guru->nama = $nama;
        $guru->tgl_lahir = $tgl;
        $guru->alamat = $alamat;
        $guru->save();
        dump($guru);
    }
}
