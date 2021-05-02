<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function login($email)
    {
        $hasil = $this->db->where('email', $email)->limit(1)->get('tb_akun');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }


    public function change_password($email, $pass)
    {
        $this->db->where('email', $email);
        $this->db->update('tb_akun', [
            'password' => $pass
        ]);
    }

    public function change_profile($email, $data)
    {
        $this->db->where('email', $email);
        $this->db->update('tb_akun', $data);
    }
}
                        
/* End of file Users.php */
