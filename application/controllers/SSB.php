<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SSB extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function add()
    {
        $config['upload_path']          = './uploads/logo/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            $data = [
                'nama_ssb' => $_POST['nama'],
                'alamat' => $_POST['alamat'],
                'tanggal_berdiri' => $_POST['tanggal'],
                'logo' => $this->upload->data('file_name')
            ];

            $this->Ssb_model->insert($data);
            $this->session->set_flashdata('success', 'Data SSB telah berhasil ditambah');
            redirect(base_url('admin/ssb'));
        } else {
            echo "gagal upload";
            redirect(base_url('admin/ssb'));
        }
    }

    public function edit()
    {
        $config['upload_path']          = './uploads/logo/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nama'] . '_' . date('dmY');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        $data = [
            'nama_ssb' => $_POST['nama'],
            'alamat' => $_POST['alamat'],
            'tanggal_berdiri' => $_POST['tanggal'],
        ];

        if ($this->upload->do_upload('logo')) {
            $data['logo'] = $this->upload->data('file_name');
        }

        $id = $_POST['id'];
        $this->Ssb_model->update($id,$data);
        $this->session->set_flashdata('success', 'Data SSB telah berhasil diubah');
        redirect(base_url('admin/ssb'));
    }

    public function delete()
    {
        $id = $_POST['id'];

        $data = $this->Ssb_model->selectById($id);
        unlink('uploads/logo/' . $data[0]->logo);


        $this->Ssb_model->delete($id);
        $this->session->set_flashdata('success', 'Data SSB telah berhasil dihapus');
        redirect(base_url('admin/ssb'));
    }
}
        
    /* End of file  SSB.php */
