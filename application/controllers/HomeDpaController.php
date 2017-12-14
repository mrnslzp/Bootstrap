<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeDpaController extends CI_Controller {
	public function index()
	{
		$data['header'] = 'Beranda';
		$data['optHeader'] = 'DPA';
		$data['content'] = 'dpa/beranda';
		$this->load->view('dpa_view',$data);
	}

	 public function tampilProfile(){
      $data['header'] = 'DPA';
      $data['optHeader'] = 'Tampil Data DPA';
      $data['content'] = 'dpa/ProfileDPA';
      $this->load->view('dpa_view', $data);
  }

  	
}