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
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Barang!</div>');
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
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil Menambah Slider!</div>');
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
        } else {
            $ids = $this->input->post('id_barang');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'bahan' => $this->input->post('bahan'),
                'cara_penggunaan' => $this->input->post('cara_penggunaan'),
                'info' => $this->input->post('info')
            ];
            $this->db->update('barang', $data, ['id_barang' => $ids]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengubah info!</div>');
            redirect('admin/infobarang/' . $ids);
        }
    }

    public function editProfil()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim');
        }
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('admin', ['id_admin' => $this->session->userdata('id_admin')])->row_array();
            $data['judul'] = "Edit Profil";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/editprofil', $data);
            $this->load->view('admin/template/footer');
        } else {
            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }
            $data['username'] = $this->input->post('username');
            $this->db->update('admin', $data, ['id_admin' => $this->session->userdata('id_admin')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Data!</div>');
        redirect('admin/editprofil');
        }
    }

    public function hapusBarang($id)
    {
        $barang = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $link = "./assets/images/barang/";
        $data['gambar'] = NULL;
        unlink($link . $barang['gambar']);
        $this->db->delete('barang', ['id_barang' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Barang!</div>');
        redirect('admin/katalog');
    }

    public function editBarang($id)
    {
        $data['barang'] = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $data['judul'] = "Edit Barang";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/editbarang', $data);
        $this->load->view('admin/template/footer');
    }

    public function ProsesEditBarang($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'paket' => $this->input->post('paket')
        ];
        $this->db->update('barang', $data, ['id_barang' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Barang!</div>');
        redirect('admin/katalog');
    }

    public function hapusGambarBarang($id)
    {
        $barang = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $link = "./assets/images/barang/";
        $data['gambar'] = NULL;
        unlink($link . $barang['gambar']);
        $this->db->update('barang', $data, ['id_barang' => $id]);
        redirect('admin/editbarang/' . $id);
    }

    public function tambahGambarBarang($id)
    {
        $config['upload_path'] = './assets/images/barang/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Gambar - ' . $this->input->post('nama');

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);
        if ($this->gambar->do_upload('gambar')) {
            $data['gambar'] = $this->gambar->data('file_name');
            $this->db->update('barang', $data, ['id_barang' => $id]);
            redirect('admin/editbarang/' . $id);
        }
    }

    public function hapusSlider($id)
    {
        $slider = $this->db->get_where('slider', ['id_slider' => $id])->row_array();
        $link = "./assets/images/slider/";
        $data['gambar'] = NULL;
        unlink($link . $slider['gambar']);
        $this->db->delete('slider', ['id_slider' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Slider!</div>');
        redirect('admin/slider');
    }

    public function editSlider($id)
    {
        $data['slider'] = $this->db->get_where('slider', ['id_slider' => $id])->row_array();
        $data['judul'] = "Edit Slider";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/editslider', $data);
        $this->load->view('admin/template/footer');
    }

    public function hapusGambarslider($id)
    {
        $slider = $this->db->get_where('slider', ['id_slider' => $id])->row_array();
        $link = "./assets/images/slider/";
        $data['gambar'] = NULL;
        unlink($link . $slider['gambar']);
        $this->db->update('slider', $data, ['id_slider' => $id]);
        redirect('admin/editslider/' . $id);
    }

    public function tambahGambarslider($id)
    {
        $config['upload_path'] = './assets/images/slider/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Gambar - ' . $this->input->post('nama');

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);
        if ($this->gambar->do_upload('gambar')) {
            $data['gambar'] = $this->gambar->data('file_name');
            $this->db->update('slider', $data, ['id_slider' => $id]);
            redirect('admin/editslider/' . $id);
        } else {
            redirect('admin/editslider/' . $id);
        }
    }

    public function prosesEditSlider($id)
    {
        $data = [
            'header1' => $this->input->post('header1'),
            'header2' => $this->input->post('header2'),
            'nama_button' => $this->input->post('nama_button'),
            'link' => $this->input->post('link')
        ];
        $this->db->update('slider', $data, ['id_slider' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Slider!</div>');
        redirect('admin/slider');
    }
}
