<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Ujian extends CI_Controller {

    function __construct() {
        parent::__construct();
   		// $this->load->model('Login/Usermodel');
   	    
    }
    public function index(){
  // $n=$this->input->post('n');
      
      
      $hasil=array(5,4,3,2,1);
      $data['hasilnya']=$hasil;
      
      // print_r($hasil);exit();
      $this->load->view('jancuk',$data);
  
}
      // $night      = $this->input->post("night");
      // $rpn        = 200;
      // $total_rent = $night*$rpn;
      // $cleaning   = 50;
      // $pet_fee    = 10;
      // $tax        = (0.1* $total_rent)+(0.1*($cleaning+$pet_fee));
      // $total_house_rent = $total_rent + $tax;

      // $hasil=array('total_house_rent'=>$total_house_rent);
      
      // if ($night == null) {
      //   echo "Input Night";
      // }
      // else {
      // print_r($hasil);
      // }
      
    
    public function iterasi(){
      $n=$this->input->post('n');
  For ($i<0;$i<n;$i++){
  echo $i;
  }
    }
  


  }




?>
