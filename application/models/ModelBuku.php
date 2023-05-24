<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    public function getBuku()
    {
        return $this->get('buku');
    }

    public function bukuWhere($where)
    {
        return $this->db->get_where('buku',$where);
    }

    public function simpanBuku($data=null)
    {
        $this->db->insert('buku',$data);
    }

    public function updateBuku($data=null,$where=null)
    {
        $this->db->update('buku',$data,$where);
    }
}