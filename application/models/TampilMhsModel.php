<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TampilMhsModel extends CI_Model {

	public function view(){
		 return $this->db->get('mahasiswa');
	}

	// Fungsi untuk menampilkan data dpa berdasarkan NIM nya
	  public function view_by($nim){
	    $this->db->where('nim', $nim);
	    return $this->db->get('mahasiswa')->row();
	  }

	public function getData($key){
		$this->db->where('nim',$key);
		$hasil = $this->db->get('mahasiswa');
		return $hasil;
	}

	// Fungsi untuk melakukan simpan data ke tabel dpa
  	public function save(){
  		$key = $this->input->post('nim'); //untuk menyimpan data yg dijadikan sbg primary key
    	$data = array(
    				'nik' => $this->input->post('nik'),
					'nim' => $this->input->post('nim'),
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
					'jenis_kelamin' => $this->input->post('jKel'),
					'tempat_lahir' => $this->input->post('tmpLahir'),
					'tanggal_lahir' => $this->input->post('tglLahir'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('noHP'),
					'email' => $this->input->post('email'),
					'nama_ayah' => $this->input->post('namaayah'),
					'alamat_ayah' => $this->input->post('alamatayah'),
					'noHP_ayah' => $this->input->post('nohpayah'),
					'nama_ibu' => $this->input->post('namaibu'),
					'alamat_ibu' => $this->input->post('alamatibu'),
					'noHP_ibu' => $this->input->post('nohpibu')
    	);

    	$query = $this->TampilMhsModel->getData($key); //belum bisa muncul alert
		if ($query->num_rows()>1) {
			echo " <script>alert('NIM sudah digunakan');history.go(-1);</script>";
		}else{
    		$this->db->insert('mahasiswa',$data); // Untuk mengeksekusi perintah insert data
    	}
  	}

  public function edit($nim){
    $data = array(
      				'nik' => $this->input->post('nik'),
					'nim' => $this->input->post('nim'),
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
					'jenis_kelamin' => $this->input->post('jKel'),
					'tempat_lahir' => $this->input->post('tmpLahir'),
					'tanggal_lahir' => $this->input->post('tglLahir'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('noHP'),
					'email' => $this->input->post('email'),
					'nama_ayah' => $this->input->post('namaayah'),
					'alamat_ayah' => $this->input->post('alamatayah'),
					'noHP_ayah' => $this->input->post('nohpayah'),
					'nama_ibu' => $this->input->post('namaibu'),
					'alamat_ibu' => $this->input->post('alamatibu'),
					'noHP_ibu' => $this->input->post('nohpibu')
    );
    
    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data); // Untuk mengeksekusi perintah update data
  }

  public function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete data
  }

  public function jumlahMhs(){
    $query = $this->db->query("SELECT * FROM mahasiswa");
	$total = $query->num_rows();
	return $total;
  }

 
}