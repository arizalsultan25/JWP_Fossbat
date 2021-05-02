<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $slug = url_title($this->input->post('judul'), '_', TRUE);

        $data = [
            'judul' => $_POST['judul'],
            'berita' => $_POST['berita'],
            'slug' => $slug
        ];

        $this->Berita_model->insert($data);
        $this->session->set_flashdata('success', 'Data Berita telah berhasil ditambahkan');
        redirect(base_url('admin/berita'));

        // print_r($_POST['logo']);
    }

    public function edit()
    {
        $slug = url_title($this->input->post('judul'), '_', TRUE);


        $data = [
            'judul' => $_POST['judul'],
            'berita' => $_POST['berita'],
            'slug' => $slug
        ];

        $id = $_POST['id'];

        $this->Berita_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berita telah berhasil diubah');
        redirect(base_url('admin/berita'));
    }

    public function delete()
    {
        $id = $_POST['id'];


        $this->Berita_model->delete($id);
        $this->session->set_flashdata('success', 'Data Berita telah berhasil dihapus');
        redirect(base_url('admin/berita'));
    }
}
        
    /* End of file  Berita.php */
