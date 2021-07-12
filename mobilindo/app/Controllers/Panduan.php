<?php

namespace App\Controllers;



class Panduan extends BaseController
{
    public function jual()
    {
        $data = [
            'title' => 'Jual Mobil'
        ];

        return view('panduan/jual', $data);
    }

    public function beli()
    {
        $data = [
            'title' => 'Beli Mobil'
        ];

        return view('panduan/beli', $data);
    }

    public function kredit()
    {
        $data = [
            'title' => 'Kredit Mobil'
        ];

        return view('panduan/kredit', $data);
    }

    public function tukartambah()
    {
        $data = [
            'title' => 'Tukar Tambah'
        ];

        return view('panduan/tukartambah', $data);
    }
}
