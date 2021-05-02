<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function change_password()
    {
        $email = $this->session->email;

        if ($_POST['new_password'] !== $_POST['confirm_password']) {
            $this->session->set_flashdata('failed', 'Password dan Password konfirmasi tidak cocok');
            redirect(base_url('admin/profile'));
        } else {
            $data = $this->User_model->login($email);
            // print_r($data);
            if (!password_verify($_POST['old_password'], $data->password)) {
                $this->session->set_flashdata('failed', 'Password lama salah');
                redirect(base_url('admin/profile'));
            } else {
                $this->User_model->change_password($email, $_POST['new_password']);
                // $this->session->set_userdata($userdata);
                $this->session->set_flashdata('success', 'Password telah berhasil diganti');
                redirect(base_url('admin/profile'));
            }
        }
    }

    public function change_profile()
    {
        $data = [
            'email' => $_POST['email'],
            'nama' => $_POST['nama']
        ];

        $email = $this->session->email;

        $this->User_model->change_profile($email, $data);
        $userdata = [
            'nama' => $data['nama'],
            'email' => $data['email'],
            'logged_in' => TRUE
        ];
        $this->session->set_userdata($userdata);
        $this->session->set_flashdata('success', 'Profile telah berhasil diganti');
        redirect(base_url('admin/profile'));
    }
}
        
    /* End of file  Auth.php */
