<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TampildpaModel extends CI_Model {

	public function view(){
		 return $this->db->get('dpa');
	}

	// Fungsi untuk menampilkan data dpa berdasarkan NIK nya
	 public function view_by($nik){
	    $this->db->where('nik', $nik);
	    return $this->db->get('dpa')->row();
	 }

	public function getData($key){
		$this->db->where('nik',$key);
		$hasil = $this->db->get('dpa');
		return $hasil;
	}

	// Fungsi untuk melakukan simpan data ke tabel dpa
  	public function save(){
  		$key = $this->input->post('nik'); //untuk menyimpan data yg dijadikan sbg primary key
    	$data = array(
      				'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
					'jenis_kelamin' => $this->input->post('jKel'),
					'tempat_lahir' => $this->input->post('tmpLahir'),
					'tanggal_lahir' => $this->input->post('tglLahir'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('noHP'),
					'email' => $this->input->post('email')
    	);

    	$query = $this->TampildpaModel->getData($key); //belum bisa muncul alert
		if ($query->num_rows()>0) {
			echo " <script>alert('NIK sudah digunakan');history.go(-1);</script>";
		}else{
    		$this->db->insert('dpa',$data); // Untuk mengeksekusi perintah insert data
    	}
  	}

  	// public function validation($mode){
	  //   $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
	    
	  //   // Tambahkan if apakah $mode save atau update
	  //   // Karena ketika update, NIS tidak harus divalidasi
	  //   // Jadi NIS di validasi hanya ketika menambah data siswa saja
	  //   if($mode == "save")
		 //    $this->form_validation->set_rules('username', 'username', 'required|max_length[20]');
		 //    $this->form_validation->set_rules('password', 'password', 'required|max_length[20]');
		    
		 //    $this->form_validation->set_rules('nik', 'nik', 'required|numeric|max_length[9]');
		 //    $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
		 //    $this->form_validation->set_rules('jurusan', 'jurusan', 'required');
		 //    $this->form_validation->set_rules('jKel', 'jKel', 'required');
		 //    $this->form_validation->set_rules('tmpLahir', 'tmpLahir', 'required|max_length[20]');
		 //    $this->form_validation->set_rules('tglLahir', 'tglLahir', 'required');
		 //    $this->form_validation->set_rules('alamat', 'alamat', 'required|max_length[100]');
		 //    $this->form_validation->set_rules('noHP', 'noHP', 'required|numeric|max_length[13]');
	      
	  //   if($this->form_validation->run()) // Jika validasi benar
	  //     return TRUE; // Maka kembalikan hasilnya dengan TRUE
	  //   else // Jika ada data yang tidak sesuai validasi
	  //     return FALSE; // Maka kembalikan hasilnya dengan FALSE
  	// }

  public function edit($nik){
    $data = array(
      				'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
					'jenis_kelamin' => $this->input->post('jKel'),
					'tempat_lahir' => $this->input->post('tmpLahir'),
					'tanggal_lahir' => $this->input->post('tglLahir'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('noHP'),
					'email' => $this->input->post('email')
    );
    
    $this->db->where('nik', $nik);
    $this->db->update('dpa', $data); // Untuk mengeksekusi perintah update data
  }

  public function delete($nik){
    $this->db->where('nik', $nik);
    $this->db->delete('dpa'); // Untuk mengeksekusi perintah delete data
  }

  public function jumlahDpa(){
    $query = $this->db->query("SELECT * FROM dpa");
	$total = $query->num_rows();
	return $total;
  }
}