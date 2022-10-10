<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('menu');
    }
    public function index()
    {
        $data['title'] = 'Menu Kategori';

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('menu.id as menuid, nama, deskripsi, foto,kategori.kategori_nama as kategori');
        $this->builder->join('kategori', 'kategori.kategori_id = menu.id');
        $query = $this->builder->get();

        // result object
        $data['menu'] = $query->getResult();
        return view('/kategori/index', $data);
    }
    public function detail($id = 0)
    {
        $data['title'] = 'User details';

        $this->builder->select('users.id as userid, username, email, name, fullname, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        // result object satu ssaj pake getRow
        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
}
