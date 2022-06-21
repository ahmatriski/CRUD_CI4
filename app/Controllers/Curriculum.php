<?php

namespace App\Controllers;

use App\Models\DataDiri;

class Curriculum extends BaseController
{
    public function __construct()
    {
        $this->data = new DataDiri();
    }
    public function index()
    {
        echo view('Cv/Cv_Riski', [
            'data' => $this->data->first()
        ]);
    }
    public function add()
    {
        echo view('Cv/add');
    }
    public function tambah()
    {
        $this->data->save(
            [
                'nama' => $this->request->getVar('nama'),
                'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'agama' => $this->request->getVar('agama'),
                'status' => $this->request->getVar('status'),
                'alamat' => $this->request->getVar('alamat'),
                'email' => $this->request->getVar('email'),
                'nama_sd' => $this->request->getVar('nama_sd'),
                'nama_smp' => $this->request->getVar('nama_smp'),
                'nama_sma' => $this->request->getVar('nama_sma'),
                'nama_univ' => $this->request->getVar('nama_univ'),
                'thn_lulus_sd' => $this->request->getVar('thn_lulus_sd'),
                'thn_lulus_smp' => $this->request->getVar('thn_lulus_smp'),
                'thn_lulus_sma' => $this->request->getVar('thn_lulus_sma'),
                'thn_lulus_univ' => $this->request->getVar('thn_lulus_univ')
            ]
        );
        return redirect()->to('/Curriculum');
    }

    public function get_edit($id)
    {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'id' => $i['id'],
                'nama' => $i['nama'],
                'nama_panggilan' => $i['nama_panggilan'],
                'tempat_lahir' => $i['tempat_lahir'],
                'tanggal_lahir' => $i['tanggal_lahir'],
                'jenis_kelamin' => $i['jenis_kelamin'],
                'agama' => $i['agama'],
                'status' => $i['status'],
                'alamat' => $i['alamat'],
                'email' => $i['email'],
                'nama_sd' => $i['nama_sd'],
                'nama_smp' => $i['nama_smp'],
                'nama_sma' => $i['nama_sma'],
                'nama_univ' => $i['nama_univ'],
                'thn_lulus_sd' => $i['thn_lulus_sd'],
                'thn_lulus_smp' => $i['thn_lulus_smp'],
                'thn_lulus_sma' => $i['thn_lulus_sma'],
                'thn_lulus_univ' => $i['thn_lulus_univ']
            ];
            return view('Cv/edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update()
    {
        $this->data->save([
            'id' =>$this->request->getVar('id'),
            'nama' =>$this->request->getVar('nama'),
            'nama_panggilan' =>$this->request->getVar('nama_panggilan'),
            'tempat_lahir' =>$this->request->getVar('tempat_lahir'),
            'tanggal_lahir' =>$this->request->getVar('tanggal_alamat'),
            'jenis_kelamin' =>$this->request->getVar('jenis_kelamin'),
            'agama' =>$this->request->getVar('agama'),
            'status' =>$this->request->getVar('status'),
            'alamat' =>$this->request->getVar('alamat'),
            'email' =>$this->request->getVar('email'),
            'nama_sd' =>$this->request->getVar('nama_sd'),
            'nama_smp' =>$this->request->getVar('nama_smp'),
            'nama_sma' =>$this->request->getVar('nama_sma'),
            'nama_univ' =>$this->request->getVar('nama_univ'),
            'thn_lulus_sd' =>$this->request->getVar('thn_lulus_sd'),
            'thn_lulus_smp' =>$this->request->getVar('thn_lulus_smp'),
            'thn_lulus_sma' =>$this->request->getVar('thn_lulus_sma'),
            'thn_lulus_univ' =>$this->request->getVar('thn_lulus_univ')
        ]);
        return redirect()->to('Cv_Riski');
    }

  function delete($id)
    {
        $this->data->delete($id);
        return redirect()->to('Cv_Riski');
    }

    public function logout()
    {
        echo view('login/index');
    }
}
