<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Guia Maratón</title>
		<link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico">
<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<link rel="manifest" href="assets/js/manifest.json">

  <!-- Argon CSS --> 
   <script src="<?=base_url?>assets/js/datatables-simple-demo.js"></script>

  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
  
    <!-- diseño modal alert -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<!-- GET ICONS --> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Notificacion Push-->
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script src="https://guiamaraton.com/app/OneSignalSDKWorker.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "bafe2f78-5a40-493e-b5de-0085b6cfc393",
    });
  });
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- links diseño calendario -->
<link href="<?=base_url?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?=base_url?>bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />

<link href="<?=base_url?>assets/css/estilopanel.css" rel="stylesheet" />  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


<style>
	
@media all and (max-width:320px){
  .navbar-brand {
    display: flex !important;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
   margin-left:20% !important;
}				
    }

@media all and (min-width:321px) and (max-width:411px){
  .navbar-brand {
    display: flex !important;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    
    
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
   margin-left:30% !important;
}				
    }

        @media all and (min-width:412px) and (max-width:650px){
          .navbar-brand {
            display: flex !important;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            
            
            font-size: 1.25rem;
            text-decoration: none;
            white-space: nowrap;
           margin-left:33% !important;
        }				
            }
            @media all and (min-width:651px){
              .navbar-brand {
                padding-top: 0.3125rem;
                padding-bottom: 0.3125rem;
                margin-right: 1rem;
                font-size: 1.25rem;
                text-decoration: none;
                white-space: nowrap;
              }
            }
</style>
</head>
	<body>
<div id="container">


<nav class="navbar navbar-expand-lg  d-lg-flex   bg-secondary text-uppercase" style="background-color: #2c3e50 !important;" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger " id="logocabecera" href="<?=base_url?>">
		  <img  src="<?=base_url?>assets/img/logo.png" width="140"></a>
	
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto text-center ">
	  
			  
						<?php if(!isset($_SESSION['identity'])):?>

						<li class="nav-item mx-0 mx-lg-1">
							<a href="<?=base_url?>usuario/iniciarsesion" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white"  ><i class='fas fa-caret-square-right'></i> Ingresar</a>
						</li>
						<?php endif;?>

						<?php if(isset($_SESSION['identity'])):?>
								<?php if($_SESSION['identity']->rol=='organizador'):?>
								<li class="nav-item mx-0 mx-lg-1" >
									<a href="<?=base_url?>organizador/index"  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white"   id="organizadorbtn"><i class="bi bi-person"></i>MIS EVENTOS</a>
								</li>
								<?php endif;?>
								<?php if($_SESSION['identity']->rol=='administrador'):?>
								<li class="nav-item mx-0 mx-lg-1" >
									<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="<?=base_url?>administrador/index" id="administradorbtn" ><i class="bi bi-person"></i>ADMINISTRACION</a>
								</li>
								<?php endif;?>
								<?php if(($_SESSION['identity']->rol=='administrador') or ($_SESSION['identity']->rol=='corredor') or ($_SESSION['identity']->rol=='organizador')):?>


								
								<li class="nav-item mx-0 mx-lg-1" >
									<a  href="<?=base_url?>usuario/logout" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger  text-white" translate="no"   >
									<i class="bi bi-power mr-2" ></i>CERRAR SESION</a>
								</li>

								
								<?php endif;?>
					<?php endif;?>

			</ul>
		  </div>
    </div>
  </nav>
  

  <!-- MENU ABAJO-->
		<nav class="navbar navbar-expand-lg d-lg-none  text-uppercase fixed-bottom " style="height: 10%;background-color: black;" id="mainNav"">
  			<div class="container-fluid">
				 <?php if(isset($_SESSION['identity'])):?>

						<div class="row w-100">
							<div class="col-4 text-center ">
								<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" id="calendariobtn" href="<?=base_url?>calendario/index"  style="color: #fc8c04 !important;"><i class="bi bi-house"></i></a>
							</div>
							<div class="col-4 text-center">
							<?php if(($_SESSION['identity']->rol=='administrador')):?>
								<a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url?>administrador/index"   style="color: #fc8c04 !important;">
								<i class="bi bi-person"></i></a>
							<?php endif;?>
							
							<?php if(($_SESSION['identity']->rol=='organizador')):?>
								<a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url?>organizador/index"   style="color: #fc8c04 !important;">
								<i class="bi bi-person"></i></a>
							<?php endif;?>
							
							<?php if(($_SESSION['identity']->rol=='corredor')):?>
								<a  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"  href="<?=base_url?>"  style="color: #fc8c04 !important;">
								<i class="bi bi-person"></i></a>
								<?php endif;?>

							</div>
							<?php if(($_SESSION['identity']->rol=='administrador') || ($_SESSION['identity']->rol=='corredor') || ($_SESSION['identity']->rol=='organizador')):?>

							<div class="col-4 text-center">

							<a  href="<?=base_url?>usuario/logout"  class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn"translate="no" style="color: #fc8c04 !important;"   >
								<i class="bi bi-power" ></i></a>

        					</div>
							<?php endif;?>

				        </div>
				<?php endif;?>
    		</div>
		</nav>
  <!-- MENU ABAJO-->
  <?php if(!isset($_SESSION['identity'])):?>

  <nav class="navbar navbar-expand-lg d-lg-none  text-uppercase fixed-bottom " style="height: 10%;background-color: black;" id="mainNav" >
    <div class="container-fluid">
     
  <div class="row w-100">
          
          <div class="col-12 text-center">
  
              <a   href="<?=base_url?>usuario/iniciarsesion"   class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-center"   id="loginbtn" style="color: #fc8c04 !important;">
			  <i class="bi bi-person"></i></a>
            
           
          
          </div>
          
         <?php endif;?>
  
         
         
        </div>
      </div>
  </nav>
  
			<div id="content">