<?php
class M_siswa extends CI_Model{
 
    public function data_siswa()
    {
        $this->db->select('*');
   		$this->db->from('tb_siswa');
        $this->db->order_by('id_siswa', 'DESC');
        $hasil = $this->db->get();

        return $hasil->result();
    }
}
?>