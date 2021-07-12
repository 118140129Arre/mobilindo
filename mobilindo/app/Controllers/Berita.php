<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BDL News'
        ];
        return view('berita/index', $data);
    }

    public function layanansim()
    {
        $data = [
            'title' => 'Layanan SIM'
        ];
        return view('news/layanansim', $data);
    }

}
