<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ssb_model extends CI_Model
{
    public function select()
    {
        $this->db->order_by('nama_ssb');
        $query = $this->db->get('tb_ssb')->result();
        return $query;
    }

    public function selectById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_ssb')->result();

        return $query;
    }

    public function selectByNama($nama)
    {
        $this->db->where('nama_ssb', $nama);
        $query = $this->db->get('tb_ssb')->result();

        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('tb_ssb', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_ssb', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ssb');
    }
}
                        
/* End of file Ssb_model.php */
