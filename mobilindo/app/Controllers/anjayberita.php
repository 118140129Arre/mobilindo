<?php

namespace App\Controllers;

use App\Models\DaftarmobilModel;

class Berita extends BaseController
{
    protected $DaftarmobilModel;
    public function __construct()
    {
        $this->DaftarmobilModel = new DaftarmobilModel();
    }


    public function berita()
    {
        $model = new DaftarmobilModel();
        $data = $model->order_by();
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $mobil = $this->DaftarmobilModel->search($keyword);
        } else {
            $mobil = $this->DaftarmobilModel;
        }


        $data = [
            'title' => 'Daftar Mobil',
            // 
            'mobil' => $mobil->paginate(5, 'daftarmobil'),
            'pager' => $this->DaftarmobilModel->pager,
        ];

        return view('pages/berita', $data);
        
    }


    public function byorder()
    {
        $model = new DaftarmobilModel();
        $mama = $model->order_by();
        $keyword = $this->request->getVar('keyword');

    //     $model = new DaftarmobilModel();
    //     $data = $model->order_by();
    //     foreach ($data->getResult() as $row) {
    //         ($row->merek);

    // }
}

}