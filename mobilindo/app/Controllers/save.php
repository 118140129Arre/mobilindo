<?php

namespace App\Controllers;

use App\Models\DaftarmobilModel;

class Daftarmobil extends BaseController
{
    protected $DaftarmobilModel;
    public function __construct()
    {
        $this->DaftarmobilModel = new DaftarmobilModel();
    }
    public function index()
    {
        $mobil = $this->DaftarmobilModel->findAll();

        $data = [
            'title' => 'Daftar Mobil',
            'mobil' => $mobil
        ];
        return view('/mobil/index', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['mobil'] = $this->DaftarmobilModel->get_keyword($keyword);
        return view('/mobil/index', $data);
    }
}
