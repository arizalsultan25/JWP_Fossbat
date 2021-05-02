<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index', [
			'berita' => $this->Berita_model->select_latest(),
			'jadwal' => $this->Jadwal_model->selectSelesai()
		]);
	}

	public function berita($slug)
	{
		$this->load->view('berita', [
			'berita' => $this->Berita_model->selectBySlug($slug)
		]);
	}

	public function all_news()
	{
		$this->load->view('all-news', [
			'berita' => $this->Berita_model->select()
		]);
	}

	public function jadwal()
	{
		$this->load->view('jadwal', [
			'jadwal' => $this->Jadwal_model->selectBelumMain()
		]);
	}

	public function pemain()
	{
		$nama = $_GET['nama'];

		$this->load->view('pemain', [
			'hasil' => $this->Pemain_model->selectByNama($nama)
		]);
	}

	public function lokasi()
	{
		$this->load->view('lokasi', [
			'lokasi' => $this->Stadion_model->select()
		]);
	}

	public function gallery()
	{	
		$this->load->view('gallery', [
			'gallery' => $this->Gallery_model->select(),
		]);
	}

	public function login()
	{
		if(isset($this->session->logged_in)){
			redirect(base_url('admin'));
		}else{
			$this->load->view('login');
		}
	}

    public function prosesLogin()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $pass = htmlspecialchars($this->input->post('password'));

        $login = $this->User_model->login($email);

        if ($login == false) {
            $this->session->set_flashdata('error', 'Email or password doesn`t match');
            redirect(base_url('base/login'));
        } else {
            if (password_verify($this->input->post('password'), $login->password)) {
				$userdata = [
					'nama' => $login->nama,
					'email' => $login->email,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($userdata);
                redirect(base_url('admin'));
            } else {
                $this->session->set_flashdata('error', 'Password is incorrect');
                redirect(base_url('base/login'));
            }
        }
    }

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();

		redirect(base_url());
	}

	
}
