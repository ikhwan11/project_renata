<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // kelola e-tiket
    public function e_tiket()
    {
        $halaman['tittle'] = 'Dashboard';
        $data['tiket_masuk'] = $this->db->query("SELECT * FROM transaksi ORDER BY no_transaksi DESC")->result();
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/dashboard_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function konfirmasi_pembayaran($id)
    {
        $data['konfirmasi'] = $this->renata_model->ambil_id_transaksi($id);
        $halaman['tittle'] = 'konfirmasi Pembayaran';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/admin_konfirmasi_pembayaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function cek_pembayaran()
    {
        $id                   = $this->input->post('no_transaksi');
        $status_pembayaran     = $this->input->post('status_pembayaran');
        $bukti_pembayaran       = $_FILES['tiket']['name'];

        if ($bukti_pembayaran) {
            $config['upload_path']     = './assets/e_ticket/';
            $config['allowed_types']    = 'pdf';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tiket')) {
                echo "E-ticket Gagal di Upload!";
            } else {
                $bukti_pembayaran = $this->upload->data("file_name");
            }
        }

        $data = array(
            'status_pembayaran'    => $status_pembayaran,
            'e_tiket'    => $bukti_pembayaran,
        );

        $where  = array(
            'no_transaksi'        => $id
        );

        $this->renata_model->update_data('transaksi', $data, $where);
        redirect('admin/');
    }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->renata_model->downloadPembayaran($id);
        $file = 'assets/upload/' . $filePembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }


    // end kelola e-tiket
    // keloal tiket

    public function input_tiket()
    {
        $halaman['tittle'] = 'Input Tiket';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/form_input_tiket');
        $this->load->view('admin_template/footer');
    }

    public function input_tiket_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input_tiket();
        } else {
            $no_tiket                   = $this->input->post('no_tiket');
            $nama                       = $this->input->post('nama');
            $jumlah_anggota             = $this->input->post('jumlah_anggota');
            $tanggal                    = $this->input->post('tanggal');
            $total_pembayaran           = $this->input->post('total_pembayaran');

            $data = array(
                'no_tiket'          => $no_tiket,
                'nama'              => $nama,
                'jumlah_anggota'    => $jumlah_anggota,
                'tanggal'           => $tanggal,
                'total_pembayaran'  => $total_pembayaran,
                'status_pembayaran' => 'Selesai',
                'jenis_tiket'       => 'Biasa',

            );


            $this->renata_model->insert_data($data, 'transaksi');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tiket berhasil di input</div>');
            redirect('admin/data_tiket');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_tiket', 'No Tiket', 'required', array('required' => '{field} tidak boleh kosong'));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '{field} tidak boleh kosong'));
        $this->form_validation->set_rules('jumlah_anggota', 'Jumlah anggota', 'required', array('required' => '{field} tidak boleh kosong'));
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', array('required' => '{field} tidak boleh kosong'));
        $this->form_validation->set_rules('total_pembayaran', 'Total pembayaran', 'required', array('required' => '{field} tidak boleh kosong'));
    }

    // end kelola tiket
    // data tiket
    public function data_tiket()
    {

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        $data = array(
            'tiket' => $this->renata_model->cari_tiket($data['keyword'])
        );

        $halaman['tittle'] = 'Data tiket';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/data_tiket', $data);
        $this->load->view('admin_template/footer');
    }
    // end data tiket
}
