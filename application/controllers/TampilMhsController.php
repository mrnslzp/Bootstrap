<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TampilMhsController extends CI_Controller {
  public function __construct(){
	    parent::__construct();

	    $this->load->model('TampilMhsModel'); // Load TampildpaModel ke controller ini
  }

  public function index(){
  		$data['header'] = 'Mahasiswa';
      $data['optHeader'] = 'Tampil Data Mahasiswa';
      $data['content'] = 'admin/TampildataMhs';
	    $data['mhs'] = $this->TampilMhsModel->view();
	    $this->load->view('admin_view', $data);
  }

  public function tambah(){
    $data['header'] = 'Mahasiswa';
    $data['optHeader'] = 'Tambah Data Mahasiswa';
    $data['content'] = 'admin/form_tambahMhs';
    $this->load->view('admin_view',$data);
  }
  public function simpan(){
    $this->TampilMhsModel->save(); // Panggil fungsi save() yang ada di TampilMhsModel.php
    redirect('TampilMhsController');
  }

  // public function tampil($nim){
  //   $data['header'] = 'Mahasiswa';
  //   $data['optHeader'] = 'Biodata Mahasiswa DPA';
  //   $data['content'] = 'admin/TampilBiodataMhs';
  //   $data['mhs'] = $this->TampilMhsModel->view_by($nim);
  //   $this->load->view('admin_view', $data);
  // }

  public function ubah($nim){
    $data['header'] = 'Mahasiswa';
    $data['optHeader'] = 'Ubah Data Mahasiswa';
    $data['content'] = 'admin/form_ubahdataMhs';
    $data['mhs'] = $this->TampilMhsModel->view_by($nim);
    // $data =$this->TampildpaModel->edit($nik); // Panggil fungsi edit() yang ada di TampilMhsModel.php
    $this->load->view('admin_view', $data);
  }

  public function simpanUbah($nim){
    $data =$this->TampilMhsModel->edit($nim); 
    redirect('TampilMhsController');
  }

  public function hapus($nim){
    $this->TampilMhsModel->delete($nim); // Panggil fungsi delete() yang ada di TampilMhsModel.php
    redirect('TampilMhsController');
  }


  //untuk tampil dihalaman dpa_view
  public function tampilMhs(){
      $data['header'] = 'Mahasiswa';
      $data['optHeader'] = 'Tampil Data Mahasiswa';
      $data['content'] = 'dpa/TampildataMhs';
      $data['mhs'] = $this->TampilMhsModel->view();
      $this->load->view('dpa_view', $data);
  }

  public function detailMhs($nim){
    $data['header'] = 'Mahasiswa';
    $data['optHeader'] = 'Tampil Data Mahasiswa Detail';
    $data['content'] = 'dpa/dataMhsDetail';
    $data['mhs'] = $this->TampilMhsModel->view_by($nim);
    $this->load->view('dpa_view', $data);
  }

}