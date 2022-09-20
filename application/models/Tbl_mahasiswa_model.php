<?php
class Tbl_mahasiswa_model extends CI_Model{
    public $tabel = 'tbl_mahasiswa';
    public $order = 'DESC';
    function ambil_data(){
        return $this->db->get('tbl_mahasiswa');
    }
    function get_all(){
        $this->db->where('nim', $this->order);
        return $this->db->get('tbl_mahasiswa');
    }
    function get_by_id($nim){
        $this->db->where('nim', $nim);
        return $this->db->get('tbl_mahasiswa')->row();
    }
    function insert($data){
        $this->db->insert('tbl_mahasiswa', $data);
    }
    function update($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('tbl_mahasiswa', $data);
    }
    function delete($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('tbl_mahasiswa');
    }
   
}