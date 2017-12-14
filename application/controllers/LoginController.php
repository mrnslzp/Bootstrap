<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}
	public function cek_login(){
		$data1 = array('username' => $this->input->post('username') , 
					  'password' => $this->input->post('password')
					  );
		$hasil1 = $this->LoginModel->cekLoginAdmin($data1);

		$data2 = array('username' => $this->input->post('username') , 
					  'password' => $this->input->post('password')
					  );
		$hasil2 = $this->LoginModel->cekLoginDpa($data2);

        if($hasil1->num_rows() == 1){
		    foreach($hasil1->result() as $sess1)
            {
              $sess1_data['logged_in'] = 'Sudah Login';
              $sess1_data['username'] = $sess1->username; //session untuk username
              $this->session->set_userdata($sess1_data);
              redirect('HomeAdmin_Controller');
            }
		}
		else if ($hasil2->num_rows() == 1){
		    foreach($hasil2->result() as $sess2)
            	{
	              $sess2_data['logged_in'] = 'Sudah Login';
	              $sess2_data['username'] = $sess2->username; //session untuk username
	              $this->session->set_userdata($sess2_data);
              	  redirect('HomeDpaController');
            	}
		}
		else{
		    echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('LoginController');
	}
}