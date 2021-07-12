<?php

namespace App\Controllers;



class Bantuan extends BaseController
{
    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];

        return view('bantuan/faq', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];

        return view('bantuan/profil', $data);
    }

    public function lokasishowroom()
    {
        $data = [
            'title' => 'Lokasi Showroom'
        ];

        return view('bantuan/lokasishowroom', $data);
    }
}
