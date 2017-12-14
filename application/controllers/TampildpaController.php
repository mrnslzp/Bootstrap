<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TampildpaController extends CI_Controller {
	public function __construct(){
	    parent::__construct();
	    
	    $this->load->model('TampildpaModel'); // Load TampildpaModel ke controller ini
  }

	public function index(){
      $data['header'] = 'DPA';
      $data['optHeader'] = 'Tampil Data DPA';
      $data['content'] = 'admin/TampildataDpa';
	    $data['dpa'] = $this->TampildpaModel->view();
	    $this->load->view('admin_view', $data);
  }

  public function tambah(){
    $data['header'] = 'DPA';
    $data['optHeader'] = 'Tambah Data DPA';
    $data['content'] = 'admin/form_tambahdpa';
    $this->load->view('admin_view',$data);
  }

  public function simpan(){
    $this->TampildpaModel->save(); // Panggil fungsi save() yang ada di TampildpaModel.php
    redirect('TampildpaController');
  }

  public function tampil($nik){
    $data['header'] = 'DPA';
    $data['optHeader'] = 'Biodata Data DPA';
    $data['content'] = 'admin/TampilBiodataDPA';
    $data['dpa'] = $this->TampildpaModel->view_by($nik);
    $this->load->view('admin_view', $data);
  }

  public function ubah($nik){
    $data['header'] = 'DPA';
    $data['optHeader'] = 'Ubah Data DPA';
    $data['content'] = 'admin/form_ubahdata';
    $data['dpa'] = $this->TampildpaModel->view_by($nik);
    // $data =$this->TampildpaModel->edit($nik); // Panggil fungsi edit() yang ada di TampildpaModel.php
    $this->load->view('admin_view', $data);
  }

  public function simpanUbah($nik){
    $data =$this->TampildpaModel->edit($nik); 
    redirect('TampildpaController');
  }
  
  public function hapus($nik){
    $this->TampildpaModel->delete($nik); // Panggil fungsi delete() yang ada di TampildpaModel.php
    redirect('TampildpaController');
  }


}