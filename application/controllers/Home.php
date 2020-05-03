<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
    public function produk($id)
    {
        $data['barang'] = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $this->load->view('produk',$data);
    }
}
