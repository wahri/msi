<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            if ($this->session->userdata('role') != 1) {
                redirect('home');
            }
        }
    }
    public function index()
    {
        $data['judul'] = "Dashboard";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function
    default()
    {
        $this->load->view('admin/default');
    }

    public function katalog($level = 'kosong')
    {
        $config['upload_path'] = './assets/images/barang/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Gambar - ' . $this->input->post('nama');

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga Barang', 'required|trim|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambar->display_errors();
            $data['silver'] = $this->db->get_where('barang', ['paket' => 'silver'])->result_array();
            $data['gold'] = $this->db->get_where('barang', ['paket' => 'gold'])->result_array();
            $data['platinum'] = $this->db->get_where('barang', ['paket' => 'platinum'])->result_array();
            $data['level'] = $level;
            $data['judul'] = "Katalog";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/katalog', $data);
            $this->load->view('admin/template/footer');
        } else {
            if ($this->gambar->do_upload('gambar')) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $this->gambar->data('file_name'),
                    'paket' => $this->input->post('paket')
                ];
                $this->db->insert('barang', $data);
                redirect('admin/katalog');
            } else {
                $data['error'] = $this->gambar->display_errors();
                $data['silver'] = $this->db->get_where('barang', ['paket' => 'silver'])->result_array();
                $data['gold'] = $this->db->get_where('barang', ['paket' => 'gold'])->result_array();
                $data['platinum'] = $this->db->get_where('barang', ['paket' => 'platinum'])->result_array();
                $data['judul'] = "Katalog";
                $data['level'] = $level;
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/topbar');
                $this->load->view('admin/template/sidebar');
                $this->load->view('admin/katalog', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function slider()
    {
        $data['slider'] = $this->db->get('slider')->result_array();
        $data['judul'] = "Fitur Slider";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/slider', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambahSlider()
    {
        $config['upload_path'] = './assets/images/slider/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Slider - ' . $this->input->post('header1');

        $this->load->library('upload', $config, 'gambarSlider');
        $this->gambarSlider->initialize($config);

        $this->form_validation->set_rules('header1', 'Judul', 'required|trim');
        $this->form_validation->set_rules('header2', 'Subjudul', 'required|trim');
        $this->form_validation->set_rules('nama_button', 'Nama Tombol', 'required|trim');
        $this->form_validation->set_rules('link', 'link', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambarSlider->display_errors();
            $data['judul'] = "Tambah Slider";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/tambahslider', $data);
            $this->load->view('admin/template/footer');
        } else {
            if ($this->gambarSlider->do_upload('gambar')) {
                $data = [
                    'gambar' => $this->gambarSlider->data('file_name'),
                    'header1' => $this->input->post('header1'),
                    'header2' => $this->input->post('header2'),
                    'nama_button' => $this->input->post('nama_button'),
                    'link' => $this->input->post('link')
                ];
                $this->db->insert('slider', $data);
                redirect('admin/slider');
            } else {
                $data['error'] = $this->gambarSlider->display_errors();
                $data['judul'] = "Tambah Slider";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/topbar');
                $this->load->view('admin/template/sidebar');
                $this->load->view('admin/tambahslider', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function infoBarang($id)
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['barang'] = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
            $data['judul'] = "Tambah Informasi Barang";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/infobarang', $data);
            $this->load->view('admin/template/footer');
        }else{
            $ids = $this->input->post('id_barang');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'bahan' => $this->input->post('bahan'),
                'cara_penggunaan' => $this->input->post('cara_penggunaan'),
                'info' => $this->input->post('info')
            ];
            $this->db->update('barang', $data, ['id_barang' => $ids]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengubah info!</div>');
            redirect('admin/infobarang/'.$ids);
        }
    }
}
