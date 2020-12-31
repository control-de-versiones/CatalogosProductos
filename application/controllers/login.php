
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->smartyci->caching = false;
   $class = array(
    'class' => 'form-signin'
	);
   $this->smartyci->assign( 'class', $class );
   $this->smartyci->display( 'login.tpl' );
   //$this->load->view('login_view');
 }

}

?>

