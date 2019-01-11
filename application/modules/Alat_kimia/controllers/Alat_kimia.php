<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Alat_kimia extends CI_Controller {

    function __construct() {
        parent::__construct();
   		// $this->load->model('Login/Usermodel');
   	    $this->load->library('session');
   		$this->load->model('M_alat_kimia',"mk");
   		// $this->load->controller('Login/Login');
   		$this->load->library('form_validation');

   		
   	    $this->_module = 'index.php/Alat_kimia/Alat_kimia';

    }
public function index(){
	
	// print_r($_SESSION);exit();
		if (!isset($this->session->userdata['nama_laboran'])) {
			redirect('login');
		}
        // $this->mk->loaddata()->result();
		$data['nama_laboran']=$this->session->userdata('nama_laboran');
		$data['addAlatKimia'] = $this->_module."/AddAlatKimia";
		$data['addBahankimia'] = $this->_module."/AddBahankimia";
		// $data['ubahAlat']		= $this->_module."/ubahAlat";
		$hasil = $this->mk->loaddata()->result();
		$hasil2 = $this->mk->alatrusak()->result();
		$hasil3=$this->mk->loadbahan()->result();
		$hasil4=$this->mk->loadpinjam()->result();
		$jmlhalat = $this->mk->totalalat()->result();
		$total_rusak=count($hasil2);
		$total_alat = count($hasil);
		$total_bahan = count($hasil3);
		$alat_pinjam = count($hasil4);
		//$hasil2 =$this->md->cat($id_kategori)->row();
		// $hasil2 =$this->md->loadkategori()->result();
		// print_r($hasil);
		
		$data['hasil']= $hasil;
		$data['total_alat']=$total_alat;
		$data['total_rusak']=$total_rusak;
		$data['total_bahan']=$total_bahan;
		$data['alat_pinjam']=$alat_pinjam;
		// $this->load->view('Tambah_alat_kimia',$data);
		// $this->load->view('Alat',$data);
		// $this->load->view('Login');
		// $n = 6;$p = 1;$vc =1 ;$fc =1;
		// $a=$n*($p - $vc) - $fc;
  //  			print_r($a);exit();
   		

		$this->load->view('Dashboard_utama',$data);
		//print_r($hasil);
		
	}
	public function Alat(){
		$data['addAlatKimia'] = "Alat_kimia/AddAlatKimia";
		$data['TambahPinjam'] = "Alat_kimia/TambahPinjam";
		$data['Tambahrusak']='Alat_kimia/Tambahrusak';
		// $data['ubahAlat'] = "Alat_kimia/ubahAlat";
		// $hasil = $this->mk->Loadalatbaik()->result();
		
		$hasil = $this->mk->loaddata()->result();
		$data['hasil'] = $hasil;
		$dosen = $this->mk->Loaddosen()->result();
		$praktikum = $this->mk->Loadpraktikum()->result();
		$data['dosen'] = $dosen;
		$data['praktikum'] = $praktikum;
		// print_r($praktikum);exit();
		$this->load->view("Alat",$data);
	}
	
	public function AddAlatKimia(){
		$id_alat_kimia	= $this->input->post("id_alat_kimia");
		$kode_alat		= $this->input->post("kode_alat");
		$nama_alat		= $this->input->post("nama_alat");
		$sinonim		= $this->input->post("sinonim");
		$merk			= $this->input->post("merk");
		$ukuran			= $this->input->post("ukuran");
		$jenis_bahan	= $this->input->post("jenis_bahan");
		$jumlah_alat	= $this->input->post("jumlah_alat");
		$tarif_sewa 	= $this->input->post("tarif_sewa");
		$id_status		= 1;
		$create_at		= date("Y/m/d");
		


		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		$data=array("id_alat_kimia"=>$id_alat_kimia, "kode_alat"=>$kode_alat, "nama_alat"=>$nama_alat, "sinonim"=>$sinonim,"merk"=>$merk, "ukuran"=>$ukuran, "jenis_bahan"=>$jenis_bahan,"id_status"=>$id_status,"create_at"=>$create_at,"jumlah_alat"=>$jumlah_alat,"tarif_sewa"=>$tarif_sewa);
		// print_r($data);exit();
		$this->mk->addAlatKimia($data);

		redirect ('Alat_kimia/Alat');
		// redirect(base_url()."/index.php/sample/sample");

	}
public function kembalikan(){
	$jumlah_kembali 	= $this->input->post('jumlah_kembali');
	$id_alat_kimia 		= $this->input->post('id_alat_kimia');
	$jumlah_alat 		= $this->input->post('jumlah_alat');
	$jumlah_pinjam 		= $this->input->post('jumlah_pinjam');
	$jumlah_alat_baru	= $jumlah_alat + $jumlah_kembali;
	$jumlah_pinjam_baru = $jumlah_pinjam - $jumlah_kembali;


		$tanggal_kembalikan = $this->input->post('tanggal_kembali');
		$tanggal_kembali	= date('Y-m-d',strtotime($tanggal_kembalikan));

	$id_status=array("jumlah_alat"=>$jumlah_alat_baru);
	$data = array('jumlah_pinjam'=>$jumlah_pinjam_baru,'tanggal_kembali'=>$tanggal_kembali);
	// print_r($data);exit();
	$this->mk->UpdateId_status($id_alat_kimia,$id_status);
	$this->mk->kembalikan($id_alat_kimia,$data);
	redirect("Alat_kimia/PinjamAlat",'refresh');

}    
public function ganti(){
	$id_alat_kimia 	= $this->input->post('id_alat_kimia');
	$jumlah_ganti	= $this->input->post('jumlah_ganti');
	$nama_dosen 	= $this->input->post('nama_dosen');
	$jumlah_alat 	= $this->input->post('jumlah_alat'); 
	$jumlah_rusak 	= $this->input->post('jumlah_rusak');
	$jumlah_alat_baru = $jumlah_alat + $jumlah_ganti;
	$jumlah_rusak_baru = $jumlah_rusak - $jumlah_ganti;

	$data = array('jumlah_rusak'=>$jumlah_rusak_baru);
	$id_status=array("jumlah_alat"=>$jumlah_alat_baru);

	// print_r($data);exit();
	$this->mk->gantiAlat($id_alat_kimia,$data);
	$this->mk->UpdateId_status($id_alat_kimia,$id_status);
	redirect("Alat_kimia/kerusakanAlat",'refresh');
}

public function UbahAlat(){
		$id_alat_kimia	= $this->input->post("id_alat_kimia");
		$kode_alat		= $this->input->post("kode_alat");
		$nama_alat		= $this->input->post("nama_alat");
		$sinonim		= $this->input->post("sinonim");
		$merk			= $this->input->post("merk");
		$ukuran			= $this->input->post("ukuran");
		$jumlah_alat	= $this->input->post("jumlah_alat");
		$jenis_bahan	= $this->input->post("jenis_bahan");
		$tarif_sewa     = $this->input->post("tarif_sewa");
		// $id_status		= 1;
		$update_at		= date("Y-m-d");
		


		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		$data=array("id_alat_kimia"=>$id_alat_kimia, "kode_alat"=>$kode_alat, "nama_alat"=>$nama_alat, "sinonim"=>$sinonim,"merk"=>$merk, "ukuran"=>$ukuran, "jenis_bahan"=>$jenis_bahan,"update_at"=>$update_at,"jumlah_alat"=>$jumlah_alat,"tarif_sewa"=>$tarif_sewa);

		$this->mk->ubahAlat($id_alat_kimia,$data);

		// print_r($data);
		 redirect ("Alat_kimia/Alat",'refresh');	
		
		}

	public function Pakaibahan(){
		
		$id_laboran 		= $this->session->userdata('id_laboran');
		$id_bahan_kimia		= $this->input->post('id_bahan_kimia');
		$tanggal_pakai		= $this->input->post('tanggal_pakai');
		$date				= date('Y-m-d',strtotime($tanggal_pakai));
		$jumlah_pakai 		= $this->input->post('jumlah_pakai');
		$jumlah_stok_bahan	= $this->input->post('jumlah_stok_bahan');
		$jumlah_baru 		= $jumlah_stok_bahan - $jumlah_pakai;
		$id_dosen			= $this->input->post('id_dosen');
		$id_praktikum		= $this->input->post('id_praktikum');
		$satuan 			= $this->input->post('satuan');
		$harga 				= $this->input->post('harga_bahan');

		$data = array('id_bahan_kimia'=>$id_bahan_kimia,
					  'id_laboran'=>$id_laboran,
					  'tanggal_pakai'=>$date,
					  'jumlah_pakai'=>$jumlah_pakai,
					  'id_praktikum'=>$id_praktikum,
					  'id_dosen'=>$id_dosen,
					  'satuan_pakai'=>$satuan,
					  'harga_bahan'=>$harga);
		$update = array('jumlah_stok_bahan'=>$jumlah_baru);
		if ($id_laboran =='') {
			redirect('Login');
		}
		// print_r($data);exit();
		$this->mk->pakaibahan($data);
		$this->mk->updatestok($id_bahan_kimia,$update);
		redirect('Alat_kimia/PemakaianBahan','refresh');

}
	
	public function Tambahrusak(){
		$id_alat_kimia	= $this->input->post("id_alat_kimia");
		$jumlah_alat	= $this->input->post("jumlah_alat");
		$tanggal_rusak	= $this->input->post("tanggal_rusak");
		$jumlah_rusak	= $this->input->post("jumlah_rusak");
		$id_laboran 	= $this->session->userdata('id_laboran');
		$deskripsi 	=$this->input->post('deskripsi');
		$date = date('Y-m-d',strtotime($tanggal_rusak));
		$id_status_rusak= 2;
		$jumlah_alat_baru = $jumlah_alat - $jumlah_rusak;
		$id_dosen			= $this->input->post('id_dosen');
		$id_praktikum		= $this->input->post('id_praktikum');


		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		$data=array("id_alat_kimia"=>$id_alat_kimia,"id_status"=>$id_status_rusak,"tanggal_rusak"=>$date,"id_status"=>$id_status_rusak,"jumlah_rusak"=>$jumlah_rusak,'id_dosen'=>$id_dosen,'deskripsi'=>$deskripsi,'id_praktikum'=>$id_praktikum,'id_laboran'=>$id_laboran);
		$id_status=array("jumlah_alat"=>$jumlah_alat_baru);
		// print_r($data);exit();
if($id_laboran==''){
			redirect('Login');
		}
	$this->mk->kerusakanAlat($data);
	$this->mk->UpdateId_status($id_alat_kimia,$id_status);
		redirect('Alat_kimia/Alat');
	}
	public function TambahPinjam(){
		$id_alat_kimia 		= $this->input->post('id_alat_kimia');
		$id_laboran 		= $this->session->userdata('id_laboran');
		$tanggal_pinjaman 	= $this->input->post('tanggal_pinjam');
		$tanggal_pinjam 	= date('Y-m-d',strtotime($tanggal_pinjaman));
		$keterangan 		= $this->input->post('keterangan');
		// $kode_alat			= $this->input->post('kode_alat');
		$tarif_sewa			= $this->input->post('tarif_sewa');
		$jumlah_alat 		= $this->input->post('jumlah_alat');
		$jumlah_pinjam		= $this->input->post('jumlah_pinjam');
		$jumlah_alat_baru	= $jumlah_alat-$jumlah_pinjam;
		$id_status_pinjam	= 4;
		$id_dosen			= $this->input->post('id_dosen');
		$id_praktikum		= $this->input->post('id_praktikum');

		$data=array('id_laboran'=>$id_laboran,'id_alat_kimia'=>$id_alat_kimia,'id_status'=>$id_status_pinjam,'tanggal_pinjam'=>$tanggal_pinjam,'keterangan'=>$keterangan,'jumlah_pinjam'=>$jumlah_pinjam,'id_dosen'=>$id_dosen,'id_praktikum'=>$id_praktikum,'tarif_sewa'=>$tarif_sewa);
		$id_status=array('id_status'=>$id_status_pinjam,'jumlah_alat'=>$jumlah_alat_baru);
		// print_r($data);exit();
		if($id_laboran==''){
			redirect('Login');
		}
		$this->mk->UpdateId_status($id_alat_kimia,$id_status);
		$this->mk->pinjamAlat($data);

		 redirect ("Alat_kimia/Alat",'refresh');

	}

	public function kerusakanAlat(){
		
		// $data['tambahrusak']="Alat_kimia/Tambahrusak";
		$hasil2 = $this->mk->alatrusak()->result();
		
		$data['gantiAlat'] = "Alat_kimia/ganti";
		$data['hasil2']=$hasil2;
		// print_r($hasil2);exit();
		
		$loadkode		= $this->mk->loaddata()->result();
		$data['loadkode'] = $loadkode;
		 
		$this->load->view("Kerusakan_alat",$data);
	}

	

	public function PinjamAlat(){
			
		$pinjaman=$this->mk->loadpinjam()->result();
		 // print_r($pinjaman);exit();
		$data['pinjaman']=$pinjaman;
		// $this->load->view('jancuk',$data);
		$this->load->view("Peminjaman_alat",$data);
		// $data=$this->mk->totalalat()->result();
		// print_r($data);exit();
	}
	

public function Bahan(){
		$data['addBahankimia']="Alat_kimia/addBahankimia";
		$bahan =$this->mk->loadbahan()->result();
		$dosen = $this->mk->Loaddosen()->result();
		$praktikum = $this->mk->Loadpraktikum()->result();
		$data['dosen'] = $dosen;
		$data['praktikum'] = $praktikum;
		$jenis_bahan = $this->mk->loadjenisbahan()->result();
		$data['bahan']=$bahan;
		$data['jenisbahan']=$jenis_bahan;
		// print_r($bahan);exit();
		$this->load->view("Bahan",$data);
	}

public function AddBahankimia(){
		$id_bahan_kimia = $this->input->post("id_bahan_kimia");
		$kode_bahan		= $this->input->post("kode_bahan");
		$nama_bahan		= $this->input->post("nama_bahan");
		$rumus_kimia	= $this->input->post("rumus_kimia");
		$bm 			= $this->input->post("bm");
		$bj 			= $this->input->post("bj");
		$persen 		= $this->input->post("persen");
		$satuan 		= $this->input->post("satuan");
		$harga_bahan 	= $this->input->post("harga_bahan");
		// $kepekatan 		= $this->input->post("persen");
		$id_jenis_bahan = $this->input->post("id_jenis_bahan");
		$jumlah_stok_bahan = $this->input->post("jumlah_stok_bahan");
		$create_at		= date("Y/m/d");

		$data = array("id_bahan_kimia"=>$id_bahan_kimia, "satuan"=>$satuan  ,"kode_bahan"=>$kode_bahan,"nama_bahan"=>$nama_bahan,"rumus_kimia"=>$rumus_kimia,"bm"=>$bm,"bj"=>$bj,"persen"=>$persen,"jumlah_stok_bahan"=>$jumlah_stok_bahan,"id_jenis_bahan"=>$id_jenis_bahan,"create_at"=>$create_at,"harga_bahan"=>$harga_bahan);
		// print_r($data);exit();
		$this->mk->addBahankimia($data);
		redirect('Alat_kimia/Bahan','refresh');

	} 
public function ubahBahan(){
		$id_bahan_kimia = $this->input->post("id_bahan_kimia");
		$kode_bahan		= $this->input->post("kode_bahan");
		$nama_bahan		= $this->input->post("nama_bahan");
		$rumus_kimia	= $this->input->post("rumus_kimia");
		$bm 			= $this->input->post("bm");
		$bj 			= $this->input->post("bj");
		$persen 		= $this->input->post("persen");
		$id_jenis_bahan = $this->input->post("id_jenis_bahan");
		$jumlah_stok_bahan = $this->input->post("jumlah_stok_bahan");
		$update_at		= date("Y/m/d");

		$data = array("id_bahan_kimia"=>$id_bahan_kimia,"kode_bahan"=>$kode_bahan,"nama_bahan"=>$nama_bahan,"rumus_kimia"=>$rumus_kimia,"bm"=>$bm,"bj"=>$bj,"persen"=>$persen,"jumlah_stok_bahan"=>$jumlah_stok_bahan,"id_jenis_bahan"=>$id_jenis_bahan,"update_at"=>$update_at);
		// print_r($data);exit();
		$this->mk->ubahBahan($id_bahan_kimia,$data);
		redirect('Alat_kimia/Bahan','refresh');
}

	public function Laboran(){
		$laboran=$this->mk->laboran()->result();
		$data['laboran']=$laboran;
		// print_r($laboran);exit();
		$this->load->view("Laboran",$data);
	}
	public function Ubahlaboran(){
	$id_laboran 	= $this->input->post("id_laboran");
	$nip			= $this->input->post("nip");
	$nama_laboran	= $this->input->post("nama_laboran");
	$email			= $this->input->post("email");
	$no_telp		= $this->input->post("no_telp");
	$update_at 		= date("Y/m/d");
	
	$data = array('id_laboran' =>$id_laboran ,'nip'=>$nip,'nama_laboran'=>$nama_laboran,'email'=>$email, 'no_telp'=>$no_telp,'update_at'=>$update_at);

	$this->mk->Editlaboran($id_laboran,$data);

	redirect("Alat_kimia/Laboran",'refresh');

}
	
	public function PemakaianBahan(){
		$pakaibahan = $this->mk->loadpakaibahan()->result();
		$data['pakaibahan']=$pakaibahan;
		// print_r($pakaibahan);exit();
		$this->load->view("Pemakaian_bahan",$data);
	}
	public function HapusAlat(){
    $id_alat_kimia = $this->input->post('id_alat_kimia');
    $key=array('id_alat_kimia'=> $id_alat_kimia);
    $this->db->delete('alat_kimia',$key);
    redirect ("Alat_kimia/Alat",'refresh');	
}
public function HapusBahan(){
	$id_bahan_kimia = $this->input->post('id_bahan_kimia');
	$key=array('id_bahan_kimia'=>$id_bahan_kimia);
	// print_r($key);exit();
	$this->db->delete('bahan_kimia',$key);
	redirect('Alat_kimia/Bahan','refresh');
}
public function Hapuslaboran(){
	$id_laboran = $this->input->post('id_laboran');
	$key = array('id_laboran' =>$id_laboran);
	$this->db->delete('laboran',$key);
	redirect("Alat_kimia/Laboran",'refresh');
}




}

?>