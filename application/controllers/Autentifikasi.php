<?php
class Autentifikasi extends CI_controller

{
   
    public function __construct(){

        parent::__construct();
   
        $this->load->model('ModelUser');
        $this->load->model('ModelBuku');
    }

    public function index()
    {
        
        if($this->session->userdata('email')){
            redirect('user');
        }

        $this->form_validation->set_rules('email','Alamat_email','required|trim|valid_email',[
            'required'=>'Email harus di isi..!!',
            'valid_email'=>'Format Email Salah..!!'
        ]);

        $this->form_validation->set_rules('password','password','required|trim',[
            'required'=>'password harus di isi..!!'
        ]);

        if($this->form_validation->run()==false){
            $data['judul']='login';
            $data['user']='';

            $this->load->view('admin/header',$data);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/index');
            $this->load->view('admin/footer');
        }else{
            $this->_login();
        }

    }

    private function _login()
    {
        $email=htmlspecialchars($this->input->post('email',true));
        $password=$this->input->post('password',true);

        $user=$this->ModelUser->cekData(['email'=>$email])->row_array();

        if($user){
            if($user['is_active']==1){
                if(password_verify($password,$user['password'])){
                    $data=[
                        'email'=> $user['email'],
                        'role_id'=>$user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if($user['role_id']==1){
                        redirect('admin');
                    }else{
                        if($user['image']=='default.jpg'){
                            $this->session->set_flashdata('pesan','<div class="alert alert-info alert-message" role="alert"> Silahkan ubah profil dengan menambahkan photo profil</div>');
                        }
                        redirect('user');
                    }

                }else{
                    $this->session->set_flashdata('pesan',`<div class="alert alert-danger alert-message" role="alert"> Password Salah</div>`);

                    redirect('autentifikasi');
                }
            }else{

                $this->session->set_flashdata('pesan',`<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi</div>`);

                redirect('autentifikasi');
            }
        }else{

            $this->session->set_flashdata('pesan',`<div class="alert alert-danger alert-message" role="alert"> Email tidak terdaftar</div>`);

            redirect('autentifikasi');
        }
    }
}