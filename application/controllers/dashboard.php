<?php

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();

		header('Cache-Control: no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache');

		$this->load->model(array('db_akun'));
		$this->load->helper(array('url', 'cookie'));
		$this->load->library(array('session', 'pagination'));
	}

	public function index()
	{
		$data['akun'] = $this->db_akun->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function pengaturan()
	{
		$data1['garden'] = $this->db_akun->tampil_suhu()->result();
		$data['garden_t'] = $this->db_akun->tampil_tanah()->result();
		$data['garden_u'] = $this->db_akun->tampil_udara()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengaturan',$data1);
		$this->load->view('templates/footer');
	
	}
	public function grafik()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('grafik');
		$this->load->view('templates/footer');
	}

	public function table()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('table');
		$this->load->view('templates/footer');
	}
	public function edit($id)
	{
	$where = array ('id' =>$id);
	$data['akun'] = $this->db_akun->edit_data($where,'tb_akun')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');

	}
	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'username'		=> $username,
			'email'			=> $email,
			'password'		=> $password,
		); 

		$where = array(
			'id'	=> $id
		);

		$this->db_akun->update_data($where,$data,'tb_akun');
		redirect(base_url());
	}
	 public function hapus($id){
		$where = array ('id' => $id);
		$this ->db_akun->hapus_data($where, 'tb_akun');
		redirect (base_url());
	}
	public function detail($id){

		$this->load->model('db_akun');
		$detail = $this->db_akun->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi(){
		$username =$this->input->post('username');
		$email =$this->input->post('email');
		$password =$this->input->post('password');
		$foto= $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}

		}

		$data = array(
			'username'=>$username,
			'email'=>$email,
			'password'=>$password,
			'foto'=>$foto
			

		);

		$this->db_akun->input_data($data, 'tb_akun');
		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Ditambahkan!</strong>Data anda sudah tersimpan.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect(base_url());

	}
	public function print(){
		$data['akun']=$this->db_akun->tampil_data("tb_akun")->result();
		$this->load->view('print_akun',$data);
	}

}
?>