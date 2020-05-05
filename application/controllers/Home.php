<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['nav'] = 'home';
        $data['judul'] = 'HOME';
        $this->load->view('template/header', $data);
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }

    public function produk($id)
    {
        $data['barang'] = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $data['nav'] = 'store';
        $this->load->view('template/header', $data);
        $this->load->view('produk', $data);
        $this->load->view('template/footer');
    }

    public function store()
    {
        $jumlah_data =  $this->db->get('barang')->num_rows();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'home/store/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 12;
        $from = $this->uri->segment(3);

        //styling
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '';
        $config['first_tag_open'] = '';
        $config['first_tag_close'] = '';
        
        $config['last_link'] = '';
        $config['last_tag_open'] = '';
        $config['last_tag_close'] = '';
        
        $config['next_link'] = '<i class="ion-ios-arrow-forward"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="ion-ios-arrow-back"></i>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        

        $this->pagination->initialize($config);
        $data['barang'] = $this->db->get('barang', $config['per_page'], $from)->result_array();
        $data['nav'] = 'store';
        $this->load->view('template/header', $data);
        $this->load->view('store', $data);
        $this->load->view('template/footer');
    }
}
