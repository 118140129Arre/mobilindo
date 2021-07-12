<?php

namespace App\Controllers;

use App\Models\TipsModel;

class Tips extends BaseController
{
    protected $TipsModel;
    public function __construct()
    {
        $this->TipsModel = new TipsModel();
    }


    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $tips = $this->TipsModel->search($keyword);
        } else {
            $tips = $this->TipsModel;
        }

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM tips ORDER BY id DESC";
        $result = $db->query($sql);
        $row = $result->getResult('array');

        $data = [
            'title' => 'Tips',
            'tips' => $tips->paginate(5, 'daftarmobil'),
            'pager' => $this->TipsModel->pager,
            'order' => $row
        ];
        return view('/tips/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Tips',
            'tips' => $this->TipsModel->getTips($slug)
            
        ];
        return view('tips/detail', $data);
    }

    public function delete($id)
    {
        $hapus = $this->TipsModel->delete_product($id);
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('admin/tipsadmin/'));
        }
        // $this->DaftarmobilModel->delete($id);
        // return redirect()->to('/admin');
    }

    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data = [
            'title' => 'Edit News',
            'tips' => $this->TipsModel->getProduct($id)

        ];
        // Mengirim data ke dalam view
        return view('admin/tips/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate([
            'gambarindex' => [
                'rules' => 'max_size[gambarindex,1024]|max_dims[gambarindex,1000,1000]|is_image[gambarindex]|mime_in[gambarindex,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran gambar terlalu besar, maksimal 1000x1000',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'deskripsiindex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'slug' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        $filegambar = $this->request->getFile('gambarindex');
        if ($filegambar->getError() == 4) {
            $namagambar = $this->request->getVar('gambarLama');
        } else {
            $namagambar = $filegambar->getName();
            $filegambar->move('img/berita/tips/');
            unlink('img/berita/tips/' . $this->request->getVar('gambarLama'));
        }

        // Mengambil value dari form dengan method POST
        $deskripsiindex = $this->request->getPost('deskripsiindex');
        $judul = $this->request->getPost('judul');
        $slug = $this->request->getPost('slug');
        $deskripsi = $this->request->getPost('deskripsi');


        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [

            'gambarindex' => $namagambar,
            'deskripsiindex' => $deskripsiindex,
            'judul' => $judul,
            'slug' => $slug,
            'deskripsi' => $deskripsi,
        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
        $ubah = $this->TipsModel->update_product($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('admin/tipsadmin'));
        }
    }
}


