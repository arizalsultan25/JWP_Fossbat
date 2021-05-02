<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->is_login();
    }

    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'dashboard',
            'tree' => '',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Dashboard',
            'sub' => '',
            'breadcrumb' => 'Dashboard'
        ]);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function pemain()
    {

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'pemain',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Pemain',
            'sub' => 'true',
            'breadcrumb' => 'Pemain Sepak Bola'
        ]);
        $this->load->view('admin/pemain', [
            'ssb' => $this->Ssb_model->select(),
            'pemain' => $this->Pemain_model->select()
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function pemain_ssb($ssb)
    {

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'pemain',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Pemain',
            'sub' => 'true',
            'breadcrumb' => 'Pemain Sepak Bola'
        ]);
        
        $club = $this->Ssb_model->selectById($ssb);
        
        $this->load->view('admin/pemain', [
            'ssb' => $this->Ssb_model->select(),
            'pemain' => $this->Pemain_model->selectBySSB($club[0]->nama_ssb)
        ]);
        // print_r($club[0]->nama_ssb);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function ssb()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'ssb',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data SSB',
            'sub' => 'true',
            'breadcrumb' => 'Sekolah Sepak Bola'
        ]);
        $this->load->view('admin/ssb', [
            'ssb' => $this->Ssb_model->select()
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function stadion()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'stadion',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Stadion',
            'sub' => 'true',
            'breadcrumb' => 'Stadion Sepak Bola'
        ]);
        $this->load->view('admin/stadion', [
            'stadion' => $this->Stadion_model->select(),
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function gallery()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'gallery',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Gallery',
            'sub' => 'true',
            'breadcrumb' => 'Gallery'
        ]);
        $this->load->view('admin/gallery', [
            'gallery' => $this->Gallery_model->select(),
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function profile()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'profile',
            'tree' => '',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Profile',
            'sub' => '',
            'breadcrumb' => 'Profile'
        ]);
        $this->load->view('admin/profile');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function jadwal()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'jadwal',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Jadwal Pertandingan',
            'sub' => 'true',
            'breadcrumb' => 'Jadwal'
        ]);
        $this->load->view('admin/jadwal', [
            'jadwal' => $this->Jadwal_model->select(),
            'tim' => $this->Ssb_model->select(),
            'lokasi' => $this->Stadion_model->select(),
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function berita()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', [
            'active' => 'berita',
            'tree' => 'data',
        ]);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/template/breadcrumb', [
            'header' => 'Kelola Data Berita',
            'sub' => 'true',
            'breadcrumb' => 'Berita'
        ]);
        $this->load->view('admin/berita', [
            'berita' => $this->Berita_model->select(),
        ]);
        $this->load->view('admin/template/footer');
        $this->load->view('admin/template/script');
    }

    public function is_login()
    {
        if (!isset($this->session->logged_in)) {
            redirect(base_url());
        }
    }
}
        
    /* End of file  Admin.php */
