<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\MenuModel;

class Kategori extends BaseController
{
    protected $db, $builder, $model;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('menu');
        $this->model = new MenuModel();
    }
    public function index()
    {
        $data['title'] = 'Menu Kategori';

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $this->builder->join('kategori', 'kategori.kategori_id = menu.id');
        $query = $this->builder->get();

        // result object
        $data['menu'] = $query->getResultArray();
        return view('/kategori/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail ',
            'menu' => $this->model->getBySlug($slug)
        ];

        return view('/kategori/detail', $data);
    }
}
