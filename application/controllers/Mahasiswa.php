<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('Tbl_mahasiswa_model');
    }
    public function tampilkan_data(){
        $data['mahasiswa']=$this->Tbl_mahasiswa_model->ambil_data()->result();
        $this->load->view('data_mhs',$data);
    }
    function form_input(){
        $this->load->view('form_input');
    }
    function aksi_simpan(){
        $data = array(
            'nama'  => $this->input->post('namamhs'),
            'nim'  => $this->input->post('nim'),
            'prodi'  => $this->input->post('prodi'),
            'alamat'  => $this->input->post('alamat'),
            'username'  => $this->input->post('namauser'),
            'password'  => md5($this->input->post('password'))
        );
        $this->Tbl_mahasiswa_model->insert($data);
        redirect('mahasiswa/tampilkan_data');
    }
    function form_edit($nim){
        $row = $this->Tbl_mahasiswa_model->get_by_id($nim);
        if ($row) {
            $data = array(
                'nim' => set_value('nim', $row->nim),
                'nama' => set_value('namamhs', $row->nama),
                'prodi' => set_value('prodi', $row->prodi),
                'alamat' => set_value('alamat', $row->alamat),
                'username' => set_value('username', $row->username),
                'password' => set_value('password', $row->password)
            );
            $this->load->view('form_edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Tidak Ditemukan');
        }
    }
    function aksi_edit(){
        $nim = $this->input->post('nim');
        $data = array(
            'nama'  => $this->input->post('namamhs'),
            'prodi'  => $this->input->post('prodi'),
            'alamat'  => $this->input->post('alamat'),
            'username'  => $this->input->post('username')
        );
        $this->Tbl_mahasiswa_model->update($nim, $data);
        redirect('mahasiswa/tampilkan_data');
    }
    function hapus($nim){
        $row = $this->Tbl_mahasiswa_model->get_by_id($nim);
        if ($row) {
            $this->Tbl_mahasiswa_model->delete($nim);
        } else {
            redirect('mahasiswa/tampilkan_data');
        }
    }
}
