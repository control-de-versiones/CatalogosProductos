<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('data','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');

     $this->smartyci->caching = false;

     $this->smartyci->assign( 'username', $session_data['username'] );
     $this->smartyci->assign( 'admin', $session_data['admin'] );

     $products = $this->data->get_products();

     $this->smartyci->assign( 'products', $products );
     $this->smartyci->display( 'home.tpl' );

     //$this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

 function delete($pid){
    if($this->session->userdata('logged_in'))
    {

        $session_data = $this->session->userdata('logged_in');
        if($session_data['admin'] == 1 AND is_numeric($pid)){

            $this->data->delete($pid);

         } else {
            redirect('home', 'refresh');
         }


    }
 }

}

?>

