<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stadion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $config['upload_path']          = './uploads/stadion/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data = [
                'nama_stadion' => $_POST['nama'],
                'alamat' => $_POST['alamat'],
                'tanggal_berdiri' => $_POST['tanggal'],
                'link_map' => $_POST['gmap'],
                'foto' => $this->upload->data('file_name')
            ];

            $this->Stadion_model->insert($data);
            $this->session->set_flashdata('success', 'Data Stadion telah berhasil ditambahkan');
            redirect(base_url('admin/stadion'));
        } else {
            $this->session->set_flashdata('failed', 'Data Stadion gagal ditambahkan');
            redirect(base_url('admin/stadion'));
        }

        // print_r($_POST['logo']);
    }

    public function edit()
    {
        $config['upload_path']          = './uploads/stadion/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data = [
                'nama_stadion' => $_POST['nama'],
                'alamat' => $_POST['alamat'],
                'tanggal_berdiri' => $_POST['tanggal'],
                'link_map' => $_POST['gmap'],
                'foto' => $this->upload->data('file_name')
            ];

            $id = $_POST['id'];

            // Get old data
            $old = $this->Stadion_model->selectById($id);
            unlink('./uploads/stadion/' . $old[0]->foto);

            $this->Stadion_model->update($id, $data);
            $this->session->set_flashdata('success', 'Data Stadion telah berhasil diubah');
            redirect(base_url('admin/stadion'));
        } else {
            $data = [
                'nama_stadion' => $_POST['nama'],
                'alamat' => $_POST['alamat'],
                'tanggal_berdiri' => $_POST['tanggal'],
                'link_map' => $_POST['gmap'],
            ];

            $id = $_POST['id'];

            $this->Stadion_model->update($id, $data);
            $this->session->set_flashdata('success', 'Data Stadion telah berhasil diubah');
            redirect(base_url('admin/stadion'));
        }

        // print_r($_POST['logo']);
    }

    public function delete()
    {
        $id = $_POST['id'];

        $data = $this->Stadion_model->selectById($id);
        unlink('uploads/stadion/' . $data[0]->foto);

        $this->Stadion_model->delete($id);
        $this->session->set_flashdata('success', 'Data Stadion telah berhasil dihapus');
        redirect(base_url('admin/stadion'));
    }
}
        
    /* End of file  Stadion.php */
