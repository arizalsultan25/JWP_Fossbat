<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pemain_model extends CI_Model 
{
    public function select()
    {
        $this->db->order_by('nama_lengkap');
        $query = $this->db->get('tb_pemain')->result();
        return $query;
    }

    public function selectById($id)
    {
        $this->db->where('id_pemain', $id);
        $query = $this->db->get('tb_pemain')->result();

        return $query;
    }

    public function selectByNama($nama)
    {
        // $this->db->where('id_pemain', $nama);
        $this->db->like('nama_lengkap', $nama);
        $query = $this->db->get('tb_pemain')->result();

        return $query;
    }

    public function selectBySSB($nama)
    {
        // $this->db->where('id_pemain', $nama);
        $this->db->where('ssb', $nama);
        $query = $this->db->get('tb_pemain')->result();

        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('tb_pemain', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pemain', $id);
        $this->db->update('tb_pemain', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pemain', $id);
        $this->db->delete('tb_pemain');
    }                     
                        
}
                        
/* End of file Pemain_model_model.php */
    
                        