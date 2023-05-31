<?php
class Admin extends CI_controller
{
    public function __construct()
    {
        parent:: __construct();
        // cek_login();
        $this->load->model('ModelUser');
        $this->load->model('ModelBuku');
    }

    public function index()
    {
        $data['judul']='Dashboard';
        $data['user']=$this->ModelUser->cekData(['email' =>$this->session->userdata('email')])->row_array();
        $data['anggota']=$this->ModelUser->getUserLimit()->result_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();

        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
}