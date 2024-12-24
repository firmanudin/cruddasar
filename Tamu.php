<?php
namespace App\Controllers;
use App\Models\TamuModel;

class Tamu extends BaseController
{
    protected $Tamu;

    public function __construct()
    {
        $this->tamu = new TamuModel();
    }

    public function index()
    {
        $all_data = $this->tamu->findAll();
        return view('tamu', ['all_data' => $all_data]);
    }

    public function add()
    {
        return view('add');
    }

    public function edit($id = false)
    {
        $data_tamu = new TamuModel();
        $cari_data = $data_tamu->find($id);
        return view('edit', ['cari_data' => $cari_data]);
    }

    public function proses_add()
    {
        $tamu = new TamuModel();
        $this->tamu->insert(
            $this->request->getPost()
        );
        return redirect()->to('tamu');
    }

    public function proses_edit()
    {
        $tamu = new TamuModel();
        $tamu->update(
            $this->request->getPost('id'),
            $this->request->getPost()
        );

        return redirect()->to('tamu');
    }

    public function delete($id)
    {
        $tamu = new TamuModel();
        $this->tamu->delete($id);
        return redirect()->to('tamu');
    }


}