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
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $mobil = $this->DaftarmobilModel->search($keyword);
        } else {
            $mobil = $this->DaftarmobilModel;
        }

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM daftarmobil ORDER BY id DESC";
        $result = $db->query($sql);
        $row = $result->getResult('array');

        $data = [
            'title' => 'Daftar Mobil',
            'mobil' => $mobil->paginate(9, 'daftarmobil'),
            'pager' => $this->DaftarmobilModel->pager,
            'order' => $row
        ];
        return view('/mobil/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Daftar Mobil',
            'mobil' => $this->DaftarmobilModel->getMobil($slug),
        ];

        return view('mobil/detail', $data);
    }

    public function delete($id)
    {

        $mobil = $this->DaftarmobilModel->find($id);
        unlink('img/daftarmobil/upload/' . $mobil['gambar']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-1']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-2']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-3']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-4']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-5']);
        unlink('img/daftarmobil/upload/' . $mobil['slide-6']);


        $hapus = $this->DaftarmobilModel->delete_product($id);
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('admin/daftarmobiladmin'));
        }
        // $this->DaftarmobilModel->delete($id);
        // return redirect()->to('/admin');
    }

    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data = [
            'title' => 'Daftar Mobil',
            'mobil' => $this->DaftarmobilModel->getProduct($id)

        ];
        // Mengirim data ke dalam view
        return view('admin/editmobiladmin', $data);
    }

    public function update($id)
    {

        // untuk validasi form
        if (!$this->validate([
            'merek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'slug' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'transmisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kepemilikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kilometer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'bahan-bakar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kepemilikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kapasitas_mesin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'platnomor' => [
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
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|max_dims[gambar,750,550]|is_image[gambar]|mime_in[gambar,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran gambar terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-1' => [
                'rules' => 'max_size[slide-1,1024]|max_dims[slide-1,750,550]|is_image[slide-1]|mime_in[slide-1,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-1 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-1 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-2' => [
                'rules' => 'max_size[slide-2,1024]|max_dims[slide-2,750,550]|is_image[slide-2]|mime_in[slide-2,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-2 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-2 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-3' => [
                'rules' => 'max_size[slide-3,1024]|max_dims[slide-3,750,550]|is_image[slide-3]|mime_in[slide-3,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-3 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-3 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-4' => [
                'rules' => 'max_size[slide-4,1024]|max_dims[slide-4,750,550]|is_image[slide-4]|mime_in[slide-4,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-4 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-4 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-5' => [
                'rules' => 'max_size[slide-5,1024]|max_dims[slide-5,750,550]|is_image[slide-5]|mime_in[slide-5,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-5 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-5 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-6' => [
                'rules' => 'max_size[slide-6,1024]|max_dims[slide-6,750,550]|is_image[slide-6]|mime_in[slide-6,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-6 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-6 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        // Mengambil value dari form dengan method POST
        $merek = $this->request->getPost('merek');
        $nama = $this->request->getPost('nama');
        $slug = $this->request->getPost('slug');
        $tahun = $this->request->getPost('tahun');
        $transmisi = $this->request->getPost('transmisi');
        $berlaku = $this->request->getPost('berlaku');
        $kepemilikan = $this->request->getPost('kepemilikan');
        $kilometer = $this->request->getPost('kilometer');
        $harga = $this->request->getPost('harga');
        $bahanbakar = $this->request->getPost('bahan-bakar');
        $kapasitas_mesin = $this->request->getPost('kapasitas_mesin');
        $platnomor = $this->request->getPost('platnomor');
        $deskripsi = $this->request->getPost('deskripsi');

        $filegambar = $this->request->getFile('gambar');
        if ($filegambar->getError() == 4) {
            $namagambar = $this->request->getVar('gambarLama');
        } else {
            $namagambar = $filegambar->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('img/daftarmobil/upload/' . $this->request->getVar('gambarLama'));
            
        }

        $fileslide1 = $this->request->getFile('slide-1');
        if ($fileslide1->getError() == 4) {
            $namaslide1 = $this->request->getVar('slide-1Lama');
        } else {
            $namaslide1 = $fileslide1->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-1Lama'));
        }

        $fileslide2 = $this->request->getFile('slide-2');
        if ($fileslide2->getError() == 4) {
            $namaslide2 = $this->request->getVar('slide-2Lama');
        } else {
            $namaslide2 = $fileslide2->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-2Lama'));
        }

        $fileslide3 = $this->request->getFile('slide-3');
        if ($fileslide3->getError() == 4) {
            $namaslide3 = $this->request->getVar('slide-3Lama');
        } else {
            $namaslide3 = $fileslide3->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-3Lama'));
        }

        $fileslide4 = $this->request->getFile('slide-4');
        if ($fileslide4->getError() == 4) {
            $namaslide4 = $this->request->getVar('slide-4Lama');
        } else {
            $namaslide4 = $fileslide4->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-4Lama'));
        }

        $fileslide5 = $this->request->getFile('slide-5');
        if ($fileslide5->getError() == 4) {
            $namaslide5 = $this->request->getVar('slide-5Lama');
        } else {
            $namaslide5 = $fileslide5->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-5Lama'));
        }

        $fileslide6 = $this->request->getFile('slide-6');
        if ($fileslide6->getError() == 4) {
            $namaslide6 = $this->request->getVar('slide-6Lama');
        } else {
            $namaslide6 = $fileslide6->getName();
            $filegambar->move('img/daftarmobil/upload/');
            unlink('/img/daftarmobil/upload/' . $this->request->getVar('slide-6Lama'));
        }

        // $fileslide2 = $this->request->getFile('slide-2');
        // $fileslide2->move('img/daftarmobil/upload/');
        // $namaslide2 = $fileslide2->getName();

        // $fileslide3 = $this->request->getFile('slide-3');
        // $fileslide3->move('img/daftarmobil/upload/');
        // $namaslide3 = $fileslide3->getName();

        // $fileslide4 = $this->request->getFile('slide-4');
        // $fileslide4->move('img/daftarmobil/upload/');
        // $namaslide4 = $fileslide4->getName();

        // $fileslide5 = $this->request->getFile('slide-5');
        // $fileslide5->move('img/daftarmobil/upload/');
        // $namaslide5 = $fileslide5->getName();

        // $fileslide6 = $this->request->getFile('slide-6');
        // $fileslide6->move('img/daftarmobil/upload/');
        // $namaslide6 = $fileslide6->getName();

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [

            'merek' => $merek,
            'nama' => $nama,
            'slug' => $slug,
            'tahun' => $tahun,
            'transmisi' => $transmisi,
            'berlaku' => $berlaku,
            'kepemilikan' => $kepemilikan,
            'kilometer' => $kilometer,
            'harga' => $harga,
            'bahan-bakar' => $bahanbakar,
            'kapasitas_mesin' => $kapasitas_mesin,
            'platnomor' => $platnomor,
            'deskripsi' => $deskripsi,
            'gambar' => $namagambar,
            'slide-1' => $namaslide1,
            'slide-2' => $namaslide2,
            'slide-3' => $namaslide3,
            'slide-4' => $namaslide4,
            'slide-5' => $namaslide5,
            'slide-6' => $namaslide6
        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
        $ubah = $this->DaftarmobilModel->update_product($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/admin/daftarmobiladmin'));
        }
    }
}
