<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemain extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function add()
    {
        $this->load->helper('string');

        $random = random_string('alnum', 16);

        $data = [
            'nama_lengkap' => $_POST['full_name'],
            'nama_panggilan' => $_POST['nickname'],
            'tempat_lahir' => $_POST['tempat'],
            'tgl_lahir' => $_POST['tgl'],
            'alamat' => $_POST['alamat'],
            'ssb' => $_POST['ssb'],
            'nama_ayah' => $_POST['nama_ayah'],
            'nama_ibu' => $_POST['nama_ibu'],
            'gol_darah' => $_POST['darah'],
            'berat' => $_POST['berat'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'tinggi' => $_POST['tinggi'],
            'qr' => $random . '.png',
            'administrasi' => implode(', ', $_POST['administrasi']),
        
            // arr
            'riwayat_sd' => $_POST['sd'],
            'riwayat_smp' => $_POST['smp'],
            'riwayat_ssb' => implode(', ', $_POST['riwayat_ssb']),
            'riwayat_kabupaten' => implode(', ', $_POST['riwayat_kabupaten']),
            'riwayat_provinsi' => implode(', ', $_POST['riwayat_prov']),
            'riwayat_tahun' => implode(', ', $_POST['riwayat_tahun']),
            'riwayat_posisi' => implode(', ', $_POST['riwayat_posisi']),
            'prestasi_ssb' => implode(', ', $_POST['prestasi_ssb']),
            'prestasi_kompetisi' => implode(', ', $_POST['prestasi_kompetisi']),
            'prestasi' => implode(', ', $_POST['prestasi']),
            'prestasi_tahun' => implode(', ', $_POST['prestasi_tahun']),
            'prestasi_posisi' => implode(', ', $_POST['prestasi_posisi']),
        ];

        
        print_r($data);

        $config['upload_path']          = './uploads/profile/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nickname'] . '_' . date('dmY_HiS');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data['foto'] = $this->upload->data('file_name');
        }

        $this->Qr_model->qr($random);
        $this->Pemain_model->insert($data);
        $this->session->set_flashdata('success', 'Data Pemain telah berhasil ditambahkan');
        redirect(base_url('admin/pemain'));
    }

    public function kartu_pemain($id)
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('admin/player_card',[
            'pemain' => $this->Pemain_model->selectById($id),
        ], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function test($id)
    {
        $this->load->view('admin/player_card_html',[
            'pemain' => $this->Pemain_model->selectById($id),
        ]);
    }

    public function formulir($id)
    {
        $this->load->view('admin/formulir',[
            'pemain' => $this->Pemain_model->selectById($id),
        ]);
    }

    public function edit()
    {
        $data = [
            'nama_lengkap' => $_POST['full_name'],
            'nama_panggilan' => $_POST['nickname'],
            'tempat_lahir' => $_POST['tempat'],
            'tgl_lahir' => $_POST['tgl'],
            'alamat' => $_POST['alamat'],
            'ssb' => $_POST['ssb'],
            'nama_ayah' => $_POST['nama_ayah'],
            'nama_ibu' => $_POST['nama_ibu'],
            'gol_darah' => $_POST['darah'],
            'berat' => $_POST['berat'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'tinggi' => $_POST['tinggi'],
            'updated_at' => date('Y-m-d H:i:s'),
            // 'qr' => $random . '.png',
            // 'administrasi' => implode(', ', $_POST['administrasi']),
        
            // arr
            'riwayat_sd' => $_POST['sd'],
            'riwayat_smp' => $_POST['smp'],
            'riwayat_ssb' => implode(', ', $_POST['riwayat_ssb']),
            'riwayat_kabupaten' => implode(', ', $_POST['riwayat_kabupaten']),
            'riwayat_provinsi' => implode(', ', $_POST['riwayat_prov']),
            'riwayat_tahun' => implode(', ', $_POST['riwayat_tahun']),
            'riwayat_posisi' => implode(', ', $_POST['riwayat_posisi']),
            'prestasi_ssb' => implode(', ', $_POST['prestasi_ssb']),
            'prestasi_kompetisi' => implode(', ', $_POST['prestasi_kompetisi']),
            'prestasi' => implode(', ', $_POST['prestasi']),
            'prestasi_tahun' => implode(', ', $_POST['prestasi_tahun']),
            'prestasi_posisi' => implode(', ', $_POST['prestasi_posisi']),
        ];

        print_r($data);

        $config['upload_path']          = './uploads/profile/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $_POST['nickname'] . '_' . date('dmY_HiS');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data['foto'] = $this->upload->data('file_name');
        }

        // $this->Qr_model->qr($random);
        $id = $_POST['id'];
        $this->Pemain_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Pemain telah berhasil diubah');
        redirect(base_url('admin/pemain'));
    }

    public function delete()
    {
        $id = $_POST['id'];

        $data = $this->Pemain_model->selectById($id);
        if($data[0]->foto != 'default.jpg'){
            unlink('uploads/profile/' . $data[0]->foto);
        }

        $this->Pemain_model->delete($id);
        $this->session->set_flashdata('success', 'Data Pemain telah berhasil dihapus');
        redirect(base_url('admin/pemain'));
    }
}
        
    /* End of file  Pemain.php */
