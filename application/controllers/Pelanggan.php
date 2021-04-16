<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        $data = array(
            'pelanggan' => $this->renata_model->cari_anggota($data['keyword'])
        );

        $halaman['tittle'] = 'Data Pelanggan';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/data_pelanggan_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function pelanggan_edit($id)
    {

        $data['pelanggan'] = $this->db->query("SELECT * FROM anggota ag, user us WHERE ag.id_user = us.id_user AND ag.no_anggota = '$id'")->result();

        $halaman['tittle'] = 'Edit data Pelanggan ';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/data_pelanggan_edit', $data);
        $this->load->view('admin_template/footer');
    }

    public function pelanggan_edit_aksi()
    {

        $no_anggota              = $this->input->post('no_anggota');
        $id_user                 = $this->input->post('id_user');
        $nama                    = $this->input->post('nama');
        $no_hp                   = $this->input->post('no_hp');
        $email                   = $this->input->post('email');
        $username                = $this->input->post('username');
        $password                = $this->input->post('password');
        $jenis_kelamin           = $this->input->post('jenis_kelamin');
        $tanggal_lahir           = $this->input->post('tanggal_lahir');
        $alamat                  = $this->input->post('alamat');


        $data1 = array(
            'nama'              => $nama,
            'no_hp'             => $no_hp,
            'email'             => $email,
            'jenis_kelamin'     => $jenis_kelamin,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,

        );

        $where1 = array(
            'no_anggota' => $no_anggota,
        );

        $data2 = array(
            'nama'              => $nama,
            'username'          => $username,
            'password'          => $password,
        );

        $where2 = array(
            'id_user' => $id_user,
        );


        $this->renata_model->update_data('anggota', $data1, $where1);
        $this->renata_model->update_data('user', $data2, $where2);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">data pelanggan berhasil di update </div>');
        redirect('pelanggan/');
    }

    // public function _rules()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('no_hp', 'No Hp', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('email', 'E-mail', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '{field} harus di isi!'));
    //     $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '{field} harus di isi!'));
    // }
}
