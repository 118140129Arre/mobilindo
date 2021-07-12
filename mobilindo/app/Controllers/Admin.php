<?php

namespace App\Controllers;

use App\Models\DaftarmobilModel;
use App\Models\NewsModel;
use App\Models\TipsModel;
use App\Models\PediaModel;
use CodeIgniter\Session\Session;
use PhpParser\Node\Expr\FuncCall;

class Admin extends BaseController
{
    protected $DaftarmobilModel;
    public function __construct()
    {
        $this->DaftarmobilModel = new DaftarmobilModel();
        $this->NewsModel = new NewsModel();
        $this->TipsModel = new TipsModel();
        $this->PediaModel = new PediaModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }


    public function index()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        
        $data = [
            'title' => 'Admin',
        ];
        return view('admin/index', $data);
    }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login',
    //     ];
    //     return view('admin/login', $data);
    // }

    public function adminmobil()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Admin Mobil',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/adminmobil', $data);
    }

    public function adminnews()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Admin News',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/adminnews', $data);
    }

    public function admintips()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Admin Tips',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/admintips', $data);
    }

    public function adminpedia()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Admin Pedia',
            'validation' => \Config\Services::validation()
        ];
        return view('/admin/adminpedia', $data);
    }

    public function daftarmobiladmin()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $mobil = $this->DaftarmobilModel->search($keyword);
        } else {
            $mobil = $this->DaftarmobilModel;
        }

        $data = [
            'title' => 'Daftar Mobil',
            'mobil' => $mobil->paginate(9, 'daftarmobil'),
            'pager' => $this->DaftarmobilModel->pager
        ];
        return view('/admin/daftarmobiladmin', $data);
    }

    public function detailmobiladmin($slug)
    {
        $data = [
            'title' => 'Detail Mobil Admin',
            'mobil' => $this->DaftarmobilModel->getMobil($slug)

        ];

        // if(empty($data['mobil'])){
        // throw new \codeigniter\Exceptions\PageNotFoundException('Mobil' . $slug . 'Tidak ditemukan.');
        // }
        return view('admin/detailmobiladmin', $data);
    }

    public function newsadmin()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $news = $this->NewsModel->search($keyword);
        } else {
            $news = $this->NewsModel;
        }

        $data = [
            'title' => 'News Admin',
            'news' => $news->paginate(5, 'news'),
            'pager' => $this->NewsModel->pager
        ];
        return view('/admin/news/index', $data);
    }

    public function detailnewsadmin($slug)
    {

        $data = [
            'title' => 'News',
            'news' => $this->NewsModel->getNews($slug)
        ];
        return view('admin/news/detail', $data);
    }

    public function pediaadmin()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $news = $this->PediaModel->search($keyword);
        } else {
            $news = $this->PediaModel;
        }

        $data = [
            'title' => 'Pedia Admin',
            'pedia' => $news->paginate(5, 'pedia'),
            'pager' => $this->PediaModel->pager
        ];
        return view('/admin/pedia/index', $data);
    }

    public function detailpediaadmin($slug)
    {

        $data = [
            'title' => 'Pedia Admin',
            'pedia' => $this->PediaModel->getPedia($slug)
        ];
        return view('admin/pedia/detail', $data);
    }

    public function tipsadmin()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $news = $this->TipsModel->search($keyword);
        } else {
            $news = $this->TipsModel;
        }

        $data = [
            'title' => 'Pedia Admin',
            'tips' => $news->paginate(5, 'tips'),
            'pager' => $this->TipsModel->pager
        ];
        return view('/admin/tips/index', $data);
    }

    public function detailtipsadmin($slug)
    {

        $data = [
            'title' => 'Tips Admin',
            'tips' => $this->TipsModel->getTips($slug)
        ];
        return view('admin/tips/detail', $data);
    }
    













    public function save()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

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
                'rules' => 'required|is_unique[daftarmobil.slug]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} harus beda'
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
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|max_dims[gambar,750,550]|is_image[gambar]|mime_in[gambar,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran gambar terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-1' => [
                'rules' => 'uploaded[slide-1]|max_size[slide-1,1024]|max_dims[slide-1,750,550]|is_image[slide-1]|mime_in[slide-1,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-1 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-1 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-2' => [
                'rules' => 'uploaded[slide-2]|max_size[slide-2,1024]|max_dims[slide-2,750,550]|is_image[slide-2]|mime_in[slide-2,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-2 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-2 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-3' => [
                'rules' => 'uploaded[slide-3]|max_size[slide-3,1024]|max_dims[slide-3,750,550]|is_image[slide-3]|mime_in[slide-3,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-3 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-3 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-4' => [
                'rules' => 'uploaded[slide-4]|max_size[slide-4,1024]|max_dims[slide-4,750,550]|is_image[slide-4]|mime_in[slide-4,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-4 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-4 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-5' => [
                'rules' => 'uploaded[slide-5]|max_size[slide-5,1024]|max_dims[slide-5,750,550]|is_image[slide-5]|mime_in[slide-5,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih slide-5 terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar, maksimal 1MB',
                    'max_dims' => 'Ukuran slide-5 terlalu besar, maksimal 750x550',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in'  => 'File yang anda pilih bukan gambar'
                ]
            ],
            'slide-6' => [
                'rules' => 'uploaded[slide-6]|max_size[slide-6,1024]|max_dims[slide-6,750,550]|is_image[slide-6]|mime_in[slide-6,image/jpg,image/png,image/jpeg]',
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

        $filegambar = $this->request->getFile('gambar');
        $filegambar->move('img/daftarmobil/upload/');
        $namagambar = $filegambar->getName();

        $fileslide1 = $this->request->getFile('slide-1');
        $fileslide1->move('img/daftarmobil/upload/');
        $namaslide1 = $fileslide1->getName();

        $fileslide2 = $this->request->getFile('slide-2');
        $fileslide2->move('img/daftarmobil/upload/');
        $namaslide2 = $fileslide2->getName();

        $fileslide3 = $this->request->getFile('slide-3');
        $fileslide3->move('img/daftarmobil/upload/');
        $namaslide3 = $fileslide3->getName();

        $fileslide4 = $this->request->getFile('slide-4');
        $fileslide4->move('img/daftarmobil/upload/');
        $namaslide4 = $fileslide4->getName();

        $fileslide5 = $this->request->getFile('slide-5');
        $fileslide5->move('img/daftarmobil/upload/');
        $namaslide5 = $fileslide5->getName();

        $fileslide6 = $this->request->getFile('slide-6');
        $fileslide6->move('img/daftarmobil/upload/');
        $namaslide6 = $fileslide6->getName();



        $this->DaftarmobilModel->save([
            'merek' => $this->request->getVar('merek'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $this->request->getVar('slug'),
            'tahun' => $this->request->getVar('tahun'),
            'transmisi' => $this->request->getVar('transmisi'),
            'berlaku' => $this->request->getVar('berlaku'),
            'kepemilikan' => $this->request->getVar('kepemilikan'),
            'kilometer' => $this->request->getVar('kilometer'),
            'harga' => $this->request->getVar('harga'),
            'bahan_bakar' => $this->request->getVar('bahan-bakar'),
            'kapasitas_mesin' => $this->request->getVar('kapasitas_mesin'),
            'platnomor' => $this->request->getVar('platnomor'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namagambar,
            'slide-1' => $namaslide1,
            'slide-2' => $namaslide2,
            'slide-3' => $namaslide3,
            'slide-4' => $namaslide4,
            'slide-5' => $namaslide5,
            'slide-6' => $namaslide6
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/adminmobil');
    }


    public function saven()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        if (!$this->validate([
            'gambarindex' => [
                'rules' => 'uploaded[gambarindex]|max_size[gambarindex,1024]|max_dims[gambarindex,1000,1000]|is_image[gambarindex]|mime_in[gambarindex,image/jpg,image/png,image/jpeg]',
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
                'rules' => 'required|is_unique[news.slug]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} harus beda'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        $filegambar = $this->request->getFile('gambarindex');
        $filegambar->move('img/berita/news');
        $namagambar = $filegambar->getName();

        $this->NewsModel->save([
            'gambarindex' => $namagambar,
            'deskripsiindex' => $this->request->getVar('deskripsiindex'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/adminnews');
    }

    public function savet()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        if (!$this->validate([
            'gambarindex' => [
                'rules' => 'uploaded[gambarindex]|max_size[gambarindex,1024]|max_dims[gambarindex,1000,1000]|is_image[gambarindex]|mime_in[gambarindex,image/jpg,image/png,image/jpeg]',
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
                'rules' => 'required|is_unique[tips.slug]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} harus beda'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        $filegambar = $this->request->getFile('gambarindex');
        $filegambar->move('img/berita/tips');
        $namagambar = $filegambar->getName();

        $this->TipsModel->save([
            'gambarindex' => $namagambar,
            'deskripsiindex' => $this->request->getVar('deskripsiindex'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/admintips');
    }

    public function savep()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        if (!$this->validate([
            'gambarindex' => [
                'rules' => 'uploaded[gambarindex]|max_size[gambarindex,1024]|max_dims[gambarindex,1000,1000]|is_image[gambarindex]|mime_in[gambarindex,image/jpg,image/png,image/jpeg]',
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
                'rules' => 'required|is_unique[pedia.slug]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} harus beda'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        $filegambar = $this->request->getFile('gambarindex');
        $filegambar->move('img/berita/pedia');
        $namagambar = $filegambar->getName();

        $this->PediaModel->save([
            'gambarindex' => $namagambar,
            'deskripsiindex' => $this->request->getVar('deskripsiindex'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/adminpedia');
    }

}
