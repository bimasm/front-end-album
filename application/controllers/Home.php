<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_album');
		
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='1' || $this->session->userdata('profil')=='2');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{

		$this->load->view('V_header');
		$data['album'] = $this->M_album->show_album();
		$this->load->view('V_home',$data);
		$this->load->view('V_footer');
	}
	public function do_add_album()
	{
		$nama_album=$this->input->post('nama_album');
		$keterangan=$this->input->post('keterangan');
		$owner=$this->session->userdata('username');
		
		
		$this->M_album->add_album($nama_album,$keterangan,$owner);
		redirect(base_url());
		
	}

}

?>