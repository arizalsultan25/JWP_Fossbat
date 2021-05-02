<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $data = [
            'tanggal' => $_POST['tanggal'],
            'waktu' => $_POST['waktu'],
            'home' => $_POST['home'],
            'away' => $_POST['away'],
            'lokasi' => $_POST['lokasi'],
        ];

        $this->Jadwal_model->insert($data);
        $this->session->set_flashdata('success', 'Data jadwal telah berhasil ditambahkan');
        redirect(base_url('admin/jadwal'));
    }

    public function edit()
    {
        $id = $_POST['id'];
        $data = [
            'tanggal' => $_POST['tanggal'],
            'waktu' => $_POST['waktu'],
            'home' => $_POST['home'],
            'away' => $_POST['away'],
            'skor_home' => $_POST['skor_home'],
            'skor_away' =>$_POST['skor_away'],
            'lokasi' => $_POST['lokasi'],
            'status' =>$_POST['status'],
        ];

        $this->Jadwal_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data jadwal telah berhasil diubah');
        redirect(base_url('admin/jadwal'));
    }

    public function delete()
    {
        $id = $_POST['id'];
        
        $this->Jadwal_model->delete($id);
        $this->session->set_flashdata('success', 'Data jadwal telah berhasil dihapus');
        redirect(base_url('admin/jadwal'));
    }
}
        
    /* End of file  Jadwal.php */
