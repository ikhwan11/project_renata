<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$halaman['tittle'] = 'Beranda';
		$this->load->view('beranda_template/header', $halaman);
		$this->load->view('beranda');
		$this->load->view('beranda_template/footer');
	}

	// auth

	public function login()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username  = $this->input->post('username');
			$password  = $this->input->post('password');

			$cek = $this->renata_model->cek_login($username, $password);


			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">username atau password salah!</div>');
				redirect('home/login');
			} else {

				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('role', $cek->role);
				$this->session->set_userdata('nama', $cek->nama);
				$this->session->set_userdata('id_user', $cek->id_user);

				switch ($cek->role) {
					case 1:
						redirect('admin/e_tiket/');
						break;
					case 2:
						redirect('home/');
						break;
					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/');
	}

	// end auth

	public function pendaftaran()
	{
		$halaman['tittle'] = 'Daftar akun';
		$this->load->view('beranda_template/header_pendaftaran', $halaman);
		$this->load->view('form_pendaftaran');
		$this->load->view('beranda_template/footer');
	}

	public function pendaftaran_aksi()
	{
		$this->__rules();

		if ($this->form_validation->run() == FALSE) {
			$this->pendaftaran();
		} else {
			$id_user                   	= $this->input->post('id_user');
			$nama                   	= $this->input->post('nama');
			$no_hp                   	= $this->input->post('no_hp');
			$email                   	= $this->input->post('email');
			$tanggal_lahir              = $this->input->post('tanggal_lahir');
			$jenis_kelamin              = $this->input->post('jenis_kelamin');
			$alamat                   	= $this->input->post('alamat');

			$data = array(
				'nama'  			=> $nama,
				'id_user'  			=> $id_user,
				'no_hp'  			=> $no_hp,
				'email'  			=> $email,
				'tanggal_lahir'  	=> $tanggal_lahir,
				'jenis_kelamin'  	=> $jenis_kelamin,
				'alamat'  			=> $alamat,

			);


			$this->renata_model->insert_data($data, 'anggota');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  berhasil jadi anggota!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('home/pendaftaran');
		}
	}

	public function __rules()
	{
		$this->form_validation->set_rules('id_user', 'id_user', 'is_unique[anggota.id_user]', array('is_unique' => 'ID anda sudah menjadi anggota'));
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('no_hp', 'no hp', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
	}

	public function pendaftaran_akun()
	{
		$halaman['tittle'] = 'Daftar akun';
		$this->load->view('beranda_template/header_pendaftaran', $halaman);
		$this->load->view('form_pendaftaran_akun');
		$this->load->view('beranda_template/footer');
	}

	public function pendaftaran_akun_aksi()
	{
		$this->__rules_akun();

		if ($this->form_validation->run() == FALSE) {
			$this->pendaftaran_akun();
		} else {
			$nama                   	= $this->input->post('nama');
			$username                   = $this->input->post('username');
			$password                   = $this->input->post('password');

			$data = array(
				'nama'  			=> $nama,
				'username'  		=> $username,
				'password'  		=> $password,
				'role'  			=> 2,


			);


			$this->renata_model->insert_data($data, 'user');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">akun berhasil dibuat, anda sudah bisa login.</div>');
			redirect('/home/login');
		}
	}
	public function __rules_akun()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	// tiket
	public function beli_tiket()
	{
		$halaman['tittle'] = 'Tiket';
		$this->load->view('beranda_template/header_pendaftaran', $halaman);
		$this->load->view('form_pembelian_tiket');
		$this->load->view('beranda_template/footer');
	}

	public function beli_tiket_aksi()
	{
		$id                   	= $this->input->post('id_user');
		$nama                   = $this->input->post('nama');
		$no_hp                   = $this->input->post('no_hp');
		$jumlah_anggota         = $this->input->post('jumlah_anggota');
		$tanggal        		= $this->input->post('tanggal');
		$total_pembayaran       = $this->input->post('total_pembayaran');

		$data = array(
			'id_user'  				=> $id,
			'nama'  				=> $nama,
			'no_hp'  				=> $no_hp,
			'jumlah_anggota'  		=> $jumlah_anggota,
			'tanggal'  				=> $tanggal,
			'total_pembayaran'  	=> $total_pembayaran,
			'status_pembayaran'  	=> 'Belum Selesai',
			'jenis_tiket'  			=> 'E-ticket',
		);


		$this->renata_model->insert_data($data, 'transaksi');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Transaksi berhasil, silakan melakukan pembayaran </div>');
		redirect('home/pembayaran');
	}

	public function pembayaran()
	{
		$customer = $this->session->userdata('id_user');

		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_user='$customer' ORDER BY no_transaksi DESC")->result();

		$halaman['tittle'] = 'Pembayaran';
		$this->load->view('beranda_template/header_pendaftaran', $halaman);
		$this->load->view('form_pembayaran', $data);
		$this->load->view('beranda_template/footer');
	}

	public function cek_pembayaran($id)
	{
		$data['transaksi'] = $this->renata_model->ambil_id_transaksi($id);
		$halaman['tittle'] = 'Pembayaran';
		$this->load->view('beranda_template/header_pendaftaran', $halaman);
		$this->load->view('status_pembayaran', $data);
		$this->load->view('beranda_template/footer');
	}

	public function batal_pembayaran($id)
	{
		$where = array('no_transaksi' => $id);

		$this->renata_model->delete_data($where, 'transaksi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">transaksi dibatalkan </div>');

		redirect('home/pembayaran');
	}

	public function pembayaran_upload()
	{
		$id      				= $this->input->post('no_transaksi');
		$bukti_pembayaran   	= $_FILES['bukti_pembayaran']['name'];

		if ($bukti_pembayaran) {
			$config['upload_path'] 	= './assets/upload/';
			$config['allowed_types']	= 'jpg|jpeg|png|pdf';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('bukti_pembayaran')) {
				echo "bukti pembayaran Gagal di Upload!";
			} else {
				$bukti_pembayaran = $this->upload->data("file_name");
			}
		}

		$data = array(
			'bukti_pembayaran'    => $bukti_pembayaran,
			'status_pembayaran'    => 'Sudah Upload',

		);

		$where = array(
			'no_transaksi'    => $id
		);

		$this->renata_model->update_data('transaksi', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Bukti Pembayaran Berhasil di Upload!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('home/pembayaran');
	}

	public function download_tiket($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->renata_model->downloadPembayaran($id);
		$file = 'assets/e_ticket/' . $filePembayaran['e_tiket'];
		force_download($file, NULL);
	}
}
