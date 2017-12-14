<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeAdmin_Controller extends CI_Controller {
	public function __construct(){
	    parent::__construct();
	    
	    $this->load->model('TampilMhsModel'); // Load TampildpaModel ke controller ini
	    $this->load->model('TampildpaModel');
  	}
	public function index()
	{
		$data['header'] = 'Beranda';
		$data['optHeader'] = 'Admin';
		$data['content'] = 'admin/beranda';
		$data['jumlahMhs'] = $this->TampilMhsModel->jumlahMhs();
		$data['jumlahDpa'] = $this->TampildpaModel->jumlahDpa();
		$this->load->view('admin_view',$data);
	}
}