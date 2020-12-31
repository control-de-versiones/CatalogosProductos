<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Producto extends CI_Controller {

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

     if($session_data['admin'] == 0){
      redirect('home', 'refresh');
     }

     $this->smartyci->caching = false;

     $this->smartyci->assign( 'username', $session_data['username'] );
     $this->smartyci->assign( 'admin', $session_data['admin'] );
     $this->smartyci->assign('url', 'producto'); 

     if ($this->input->post()){

      $this->form_validation->set_rules('name', 'Nombre', 'trim|required|min_length[3]|max_length[50]|xss_clean');
      $this->form_validation->set_rules('desc', 'Descripción', 'trim|required|min_length[5]|max_length[500]|xss_clean');
      $this->form_validation->set_rules('stock', 'Descripción', 'trim|required|is_natural|xss_clean');
      $this->form_validation->set_rules('price', 'Precio', 'trim|required|decimal|xss_clean');
      $this->form_validation->set_rules('img', 'Ruta Imagen', 'trim|required|min_length[3]|max_length[50]|xss_clean');

      if($this->form_validation->run() == FALSE)
      {
       //Field validation failed.&nbsp; User redirected to login page
       $this->smartyci->display( 'producto.tpl' );
      }
      else
      {
       //Go to private area
       $this->data->insert();
       redirect('home', 'refresh');
      }

     }



     $this->smartyci->display( 'producto.tpl' );

     //$this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }


 function edit($pid)
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');

     if($session_data['admin'] == 0 && !is_numeric($pid)){
      redirect('home', 'refresh');
     }

     $this->smartyci->caching = false;

     $this->smartyci->assign( 'username', $session_data['username'] );
     $this->smartyci->assign( 'admin', $session_data['admin'] );

     if(!$product = $this->data->get_inf_product($pid)){
        redirect('home', 'refresh');
     }
     $this->smartyci->assign('url', 'producto/edit/' . $pid); 
     $this->smartyci->assign('product', $product);

     if ($this->input->post()){

      $this->form_validation->set_rules('name', 'Nombre', 'trim|required|min_length[3]|max_length[50]|xss_clean');
      $this->form_validation->set_rules('desc', 'Descripción', 'trim|required|min_length[5]|max_length[500]|xss_clean');
      $this->form_validation->set_rules('stock', 'Descripción', 'trim|required|is_natural|xss_clean');
      $this->form_validation->set_rules('price', 'Precio', 'trim|required|decimal|xss_clean');

      if($this->form_validation->run() == FALSE)
      {
       //Field validation failed.&nbsp; User redirected to login page
       $this->smartyci->display( 'producto.tpl' );
      }
      else
      {
       //Go to private area
       $this->data->update($pid);
       redirect('home', 'refresh');
      }

     }



     $this->smartyci->display( 'producto.tpl' );

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

}

?>

