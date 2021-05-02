<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Berita_model extends CI_Model 
{
    public function select()
    {
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get('tb_berita')->result();
        return $query;
    }

    public function select_latest()
    {
        $this->db->order_by('created_at', 'desc');
        $this->db->limit(3);
        $query = $this->db->get('tb_berita')->result();
        return $query;
    }

    public function selectBySlug($name)
    {
        $this->db->where('slug', $name);
        $query = $this->db->get('tb_berita')->result();

        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('tb_berita', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_berita', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_berita');
    }                    
                        
}
                        
/* End of file Berita_model.php */
    
                        