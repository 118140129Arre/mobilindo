<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarmobilModel extends Model
{
    protected $table      = 'daftarmobil';
    protected $allowedFields = ['nama', 'merek', 'slug', 'tahun', 'transmisi', 'berlaku', 'kepemilikan', 'kilometer', 'harga', 'bahan-bakar', 'kapasitas_mesin', 'platnomor', 'deskripsi', 'gambar', 'slide-1', 'slide-2', 'slide-3', 'slide-4', 'slide-5', 'slide-6'];

    public function search($keyword)
    {
        return $this->table('daftarmobil')->like('merek', $keyword)->orLike('nama', $keyword)->orLike('tahun', $keyword)->orLike('transmisi', $keyword)->orLike('platnomor', $keyword);
    }

    public function getMobil($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->table('daftarmobil')
            ->get()
                ->getResultArray();
        } else {
            return $this->table('daftarmobil')
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

    public function getDesc(){
        // $this->db->order_by('harga_product', 'desc');
        // return $this->db->get('product')->result();

        $builder = $this->db->table('daftarmobil');
        $builder->orderBy('nama', 'ASC');
        $query = $builder->get();
        return $query;

        // $this->db->orderBy('nama', 'ASC');
        // $query = $this->db->get('karyawan');
        // return $query->result();
    }
}
