<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Jadwal_model extends CI_Model 
{
    public function select()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('tb_jadwal')->result();
        return $query;
    }

    public function selectSelesai()
    {
        $this->db->where('status', 'selesai');
        $query = $this->db->get('tb_jadwal');

        return $query->result();
    }

    public function selectBelumMain()
    {
        $this->db->where('status', 'belum main');
        $query = $this->db->get('tb_jadwal');

        return $query->result();
    }

    public function selectById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_jadwal');

        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_jadwal', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_jadwal', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_jadwal');
    }                   
                        
}
                        
/* End of file Jadwal_model.php */
    
                        