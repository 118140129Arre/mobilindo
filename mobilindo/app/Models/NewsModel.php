<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $allowedFields = ['gambarindex', 'deskripsiindex', 'judul', 'deskripsi', 'slug'];

    public function search($keyword)
    {
        return $this->table('news')->like('merek', $keyword)->orLike('nama', $keyword)->orLike('tahun', $keyword)->orLike('transmisi', $keyword)->orLike('platnomor', $keyword);
    }

    public function getNews($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->table('news')
            ->get()
                ->getResultArray();
        } else {
            return $this->table('news')
            ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
}
