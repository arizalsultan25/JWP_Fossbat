<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Stadion_model extends CI_Model 
{
    public function select()
    {
        $this->db->order_by('nama_stadion');
        $query = $this->db->get('tb_stadion')->result();
        return $query;
    }

    public function selectById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_stadion');

        return $query->result();
    }

    public function selectByNama($nama)
    {
        $this->db->where('nama_stadion', $nama);
        $query = $this->db->get('tb_stadion');

        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_stadion', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_stadion', $data);
    }

    public function delete($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_stadion', ['id' => $id]);
    }                   
                        
}
                        
/* End of file Stadion_model.php */
    
                        