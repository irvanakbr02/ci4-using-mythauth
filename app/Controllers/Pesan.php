<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pesan extends BaseController
{
    protected $model;
    public function __construct()
    {

        $this->model = new PesanModel();
    }
    public function index()
    {
        return view('user/pesan');
    }
    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/pariwisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/pariwisata/create')->withInput();
        }

        $this->model->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan'),
        ]);
        session()->setFlashdata('pesan', 'Pesan Berhasil Terkirim.');

        return redirect()->to('/pesan');
    }
}
