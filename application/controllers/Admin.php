<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_notif');
		$this->load->model('M_user');

		
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='1' || $this->session->userdata('profil')=='2');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{

		
		$this->load->view('V_dashboard_admin_login');
		

	}

	public function dashboard ()
	{

		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
		$data['jmluser'] = $this->M_notif->jmluser();
		$data['jmlalbum'] = $this->M_notif->jmlalbum();
		// print_r($data);
		$this->load->view('V_dashboard_admin',$data);
		$this->load->view('V_footer_dashboard');

	}
	public function photos()
	{

		
		$this->load->view('V_dashboard_photos_admin');
		$this->load->view('V_footer_dashboard');

	}

	public function album()
	{

		
		$this->load->view('V_dashboard_album_admin');
		$this->load->view('V_footer_dashboard');

	}
	public function users()
	{

		
		$this->load->view('V_dashboard_user_admin');
		$this->load->view('V_footer_dashboard');

	}
	public function login(){

	}

}

?>