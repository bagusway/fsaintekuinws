<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Logout extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->library('session');
		
	}
 
	public function index(){
        $sess_data = array('id_laboran','logged_in','nama_laboran');
        $this->session->unset_userdata($sess_data);
        redirect('Login');
    }
 
}