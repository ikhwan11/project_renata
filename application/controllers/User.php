<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $hal['tittle'] = 'Data user';
        $data['user'] = $this->db->query("SELECT * FROM user WHERE role = '1' ")->result();
        $this->load->view('admin_template/header', $hal);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('admin_template/footer');
    }
    public function tambah_user()
    {
        $hal['tittle'] = 'User';
        $this->load->view('admin_template/header', $hal);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/form_tambah_user');
        $this->load->view('admin_template/footer');
    }

    public function tambah_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_user();
        } else {
            $nama                       = $this->input->post('nama');
            $username                   = $this->input->post('username');
            $password                   = $this->input->post('password');

            $data = array(
                'nama'              => $nama,
                'username'          => $username,
                'password'          => $password,
                'role'              => 1,


            );


            $this->renata_model->insert_data($data, 'user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">akun berhasil dibuat</div>');
            redirect('user/');
        }
    }

    public function edit_user($id)
    {
        $hal['tittle'] = 'User';
        $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user = $id")->result();
        $this->load->view('admin_template/header', $hal);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/form_edit_user', $data);
        $this->load->view('admin_template/footer');
    }

    public function edit_user_aksi()
    {
        $id                         = $this->input->post('id_user');
        $nama                       = $this->input->post('nama');
        $username                   = $this->input->post('username');
        $password                   = $this->input->post('password');

        $data = array(
            'nama'              => $nama,
            'username'          => $username,
            'password'          => $password,
            'role'              => 1,
        );

        $where = array(
            'id_user' => $id
        );


        $this->renata_model->update_data('user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">akun berhasil diedit</div>');
        redirect('user/');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('username', 'username', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('password', 'password', 'required', array('required' => '{field} tidak boleh kosong!'));
    }

    public function hapus_user($id)
    {
        $where = array('id_user' => $id);

        $this->renata_model->delete_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">User berhasil dihapus </div>');

        redirect('user/');
    }
}
