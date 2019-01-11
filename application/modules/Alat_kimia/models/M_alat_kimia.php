<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_alat_kimia extends CI_Model {    

    public function __construct() {
        parent::__construct();
    }

public function loaddata(){
    $this->db->join('status_alat','status_alat.id_status = alat_kimia.id_status');
        $this->db->select('*');
        $this->db->from('alat_kimia');
        // $this->db->where("id_alat_kimia",$id_alat_kimia);
        return $this->db->get();

    }
    public function totalalat(){
        $this->db->select_sum('jumlah_alat');
        
        $this->db->from('alat_kimia');
        // $this->db->where("id_alat_kimia",$id_alat_kimia);
        $quer = $this->db->get();
        return $quer;        
    }
public function Loadalatbaik(){
    $this->db->join('status_alat','status_alat.id_status = alat_kimia.id_status');
        $this->db->select('*');
        $this->db->from('alat_kimia');
        $this->db->where('alat_kimia.id_status=1');
        return $this->db->get();

    }
    public function loadbahan(){
        $this->db->join('jenis_bahan','jenis_bahan.id_jenis_bahan = bahan_kimia.id_jenis_bahan');
        $this->db->select('*');
        $this->db->from('bahan_kimia');
        return $this->db->get();
    }
    public function loadjenisbahan(){
        $this->db->select('*');
        $this->db->from('jenis_bahan');
        return $this->db->get();
    }
    public function loadpakaibahan(){
        $this->db->join('laboran','pemakaian_bahan.id_laboran = laboran.id_laboran');
        $this->db->join('dosen','pemakaian_bahan.id_dosen = dosen.id_dosen');
        $this->db->join('praktikum','pemakaian_bahan.id_praktikum = praktikum.id_praktikum');
// $this->db->join('jenis_bahan','jenis_bahan.id_jenis_bahan = bahan_kimia.id_jenis_bahan');
        $this->db->join('bahan_kimia','pemakaian_bahan.id_bahan_kimia = bahan_kimia.id_bahan_kimia');
        $this->db->from('pemakaian_bahan');
        return $this->db->get();
    }

public function addAlatKimia($data){
	$this->db->insert("alat_kimia",$data);
}
public function alatrusak(){
    // $this->db->join('alat_kimia','alat_kimia.kode_alat = alat_rusak.kode_alat');
    $this->db->join('status_alat','status_alat.id_status = alat_rusak.id_status');
    $this->db->join('laboran','laboran.id_laboran = alat_rusak.id_laboran');
    $this->db->join('dosen','dosen.id_dosen = alat_rusak.id_dosen');
    $this->db->join('praktikum','praktikum.id_praktikum = alat_rusak.id_praktikum');
    $this->db->join('alat_kimia','alat_kimia.id_alat_kimia = alat_rusak.id_alat_kimia');
    $this->db->select('*');
    $this->db->where('jumlah_rusak != 0');
    $this->db->from('alat_rusak');
    return $this->db->get();
}
public function alathilang(){
    $this->db->select('*');
    $this->db->from('alat_hilang');
    return $this->db->get();
}
public function addBahankimia($data){
	$this->db->insert("bahan_kimia",$data);
}

public function ubahAlat($id_alat_kimia,$data){
     $this->db->select('*');
     $this->db->where('id_alat_kimia',$id_alat_kimia);
     $this->db->update("alat_kimia",$data);
        
}
public function ubahBahan($id_bahan_kimia,$data)
{
    $this->db->select('*');
    $this->db->where('id_bahan_kimia',$id_bahan_kimia);
    $this->db->update('bahan_kimia',$data);
}
public function Editlaboran($id_laboran,$data)
{
     $this->db->select('*');
     $this->db->where('id_laboran',$id_laboran);
     $this->db->update("laboran",$data);
}
public function kerusakanAlat($data){
     
     // $this->db->select('*');
     // $this->db->from('alat_kimia');
     // $this->db->where('id_alat_kimia',$id_alat_kimia);
     // $this->db->update("alat_kimia",$data);
        $this->db->insert('alat_rusak',$data);
}
public function pinjamAlat($data){
    $this->db->insert("pinjaman",$data);
}
public function pakaibahan($data){
    $this->db->insert('pemakaian_bahan',$data);
}
public function loadpinjam(){
    $this->db->join('alat_kimia','alat_kimia.id_alat_kimia = pinjaman.id_alat_kimia');
    $this->db->join('laboran','laboran.id_laboran = pinjaman.id_laboran');
    $this->db->join('dosen','dosen.id_dosen = pinjaman.id_dosen');
    $this->db->join('praktikum','praktikum.id_praktikum = pinjaman.id_praktikum');
    $this->db->select('*');
    $this->db->where('jumlah_pinjam>0');
    $this->db->from('pinjaman');
    return $this->db->get();
}
public function Laboran(){
    $this->db->select('*');
    $this->db->from('laboran');
    return $this->db->get();
}
public function updatestok($id_bahan_kimia,$data){
    $this->db->select('*');
    $this->db->from('bahan_kimia');
    $this->db->where('id_bahan_kimia',$id_bahan_kimia);
    $this->db->update('bahan_kimia',$data);
}
public function UpdateId_status($id_alat_kimia,$data){
    $this->db->select('*');
    $this->db->from('alat_kimia');
    $this->db->where('id_alat_kimia',$id_alat_kimia);
    $this->db->update("alat_kimia",$data);
}
public function gantiAlat($id_alat_kimia,$data){
    $this->db->select('*');
    $this->db->from('alat_kimia');
    $this->db->where('id_alat_kimia',$id_alat_kimia);
    $this->db->update("alat_rusak",$data);
}
public function kembalikan($id_alat_kimia,$data){
    $this->db->select('*');
    $this->db->from('alat_kimia');
    $this->db->where('id_alat_kimia',$id_alat_kimia);
    $this->db->update("pinjaman",$data);
}
public function Loaddosen(){
    $this->db->select('*');
    $this->db->from('dosen');
    return $this->db->get();
}
public function Loadpraktikum(){
    $this->db->select('*');
    $this->db->from('praktikum');
    return $this->db->get();
}
}
?>