<!DOCTYPE html>
<html lang="es">
<head>
  <title></title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

    <link href="{base_url('css/bootstrap.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/plugins.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/animate.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/style.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/responsive.css')}" rel="stylesheet" type="text/css" />
    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="{base_url('images/icons/favicon.ico')}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{base_url('images/icons/apple_icons_57x57.png')}">
    <link rel="apple-touch-icon" sizes="72x72" href="{base_url('images/icons/apple_icons_72x72.png')}">
    <link rel="apple-touch-icon" sizes="114x114" href="{base_url('images/icons/apple_icons_114x114.png')}">
    <!-- // IE  // -->
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="{base_url('js/jquery.js')}"></script>
  <script src="{base_url('js/jquery-ui.min.js')}" type="text/javascript"></script>    
    <script type="text/javascript" src="{base_url('js/current.j')}s"></script>        
</head>
<body cz-shortcut-listen="true" class="animated single_page" data-animated="fadeIn">


    <div class="container">

                {form_open('verifylogin', $class)}
                 <h2 class="form-signin-heading">Login Catálogo</h2>
                 <label for="username">Username:</label>
                 <input type="text" id="username" name="username"/>
                 <br/>
                 <label for="password">Password:</label>
                 <input type="password" id="passowrd" name="password"/>
                 <br/>
                 <h5>{validation_errors()}</h5>
                 <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
                </form>

  </div> 
       
</body>
</html>
