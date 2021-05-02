<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Gallery_model extends CI_Model 
{
    public function select()
    {
        $this->db->order_by('nama_kegiatan');
        $query = $this->db->get('tb_gallery')->result();
        return $query;
    }

    public function selectById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_gallery')->result();

        return $query;
    }

    public function selectByName($name)
    {
        $this->db->where('nama_kegiatan', $name);
        $query = $this->db->get('tb_gallery')->result();

        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('tb_gallery', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_gallery', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_gallery');
    }                       
                        
}
                        
/* End of file Gallery_model.php */
    
                        