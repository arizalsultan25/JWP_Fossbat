<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $config['upload_path']          = './uploads/gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data = [
                'nama_kegiatan' => $_POST['nama'],
                'deskripsi' => $_POST['deskripsi'],
                'tanggal' => $_POST['tanggal'],
                'foto' => $this->upload->data('file_name')
            ];

            $this->Gallery_model->insert($data);
            $this->session->set_flashdata('success', 'Data Gallery telah berhasil ditambahkan');
            redirect(base_url('admin/gallery'));
        } else {
            $this->session->set_flashdata('failed', 'Data Gallery gagal ditambahkan');
            redirect(base_url('admin/gallery'));
        }

        // print_r($_POST['logo']);
    }

    public function edit()
    {
        $config['upload_path']          = './uploads/gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        $data = [
            'nama_kegiatan' => $_POST['nama'],
            'deskripsi' => $_POST['deskripsi'],
            'tanggal' => $_POST['tanggal'],
        ];
        $id = $_POST['id'];


        if ($this->upload->do_upload('foto')) {
            $data['foto'] = $this->upload->data('file_name');
        }

        $this->Gallery_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Gallery telah berhasil diubah');
        redirect(base_url('admin/gallery'));
    }

    public function delete()
    {
        $id = $_POST['id'];

        $data = $this->Gallery_model->selectById($id);
        unlink('uploads/gallery/' . $data[0]->foto);

        $this->Gallery_model->delete($id);
        $this->session->set_flashdata('success', 'Data Gallery telah berhasil dihapus');
        redirect(base_url('admin/gallery'));
    }
}
        
    /* End of file  Gallery.php */
