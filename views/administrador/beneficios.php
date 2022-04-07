<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Guia Maratón</title>
        <link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  <!-- Argon CSS --> 
   <script src="<?=base_url?>assets/js/datatables-simple-demo.js"></script>

  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
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
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "bafe2f78-5a40-493e-b5de-0085b6cfc393",
    });
  });
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Tabla -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>


<!-- links diseño calendario -->
<link href="<?=base_url?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?=base_url?>bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />

<link href="<?=base_url?>assets/css/estilopanel.css" rel="stylesheet" />  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


	</head>
	<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?=base_url?>"><img src="https://guiamaraton.com/panel/assets/img/logo.png" width="100"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">CERRAR SESION</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">PANEL</div>
                            <a class="nav-link"  href="<?=base_url?>administrador/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                CARRERAS
                            </a>
                            <a class="nav-link"  href="<?=base_url?>administrador/beneficios">
                                <div class="sb-nav-link-icon"><i class="fas fa-percent"></i></div>
                                BENEFICIOS
                            </a>
                            <a class="nav-link"  href="<?=base_url?>administrador/usuarios">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                USUARIOS
                            </a>
                            
                            <a class="nav-link" href="<?=base_url?>usuario/logout">
                                <div class="sb-nav-link-icon"><i class="fas fa-copyright"></i></div>
                                CERRAR SESIÓN
                            </a>
                           
                        </div>
                    </div>
                    
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Beneficios</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel de Administrador</li>
                        </ol>
                       
                        
                         <div class="row">
                            
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                <button data-toggle="modal" class="btn btn-dark" data-target="#nuevobeneficiomodal">+ BENEFICIOS</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <strong> TODOS LOS BENEFICIOS</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>TITULO</th>
                                            <th>ENLACE</th>
                                            <th>PUNTOS</th>
                                            <th>IMAGEN</th>
                                            <th>ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>TITULO</th>
                                            <th>ENLACE</th>
                                            <th>PUNTOS</th>
                                            <th>IMAGEN</th>
                                            <th>ACCIÓN</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($beneficios as $beneficio):?>
                                        <tr class="my-1">
                                            <td><?php echo $beneficio['titulo'] ?></td>
                                            <td><?php echo $beneficio['enlace'] ?></td>
                                            <td><?php echo $beneficio['visitas'] ?></td>
                                            <td>
                                                <img src="<?php echo $beneficio['imagen'] ?>" class="w-50 text-center"></td>
                                            <td>
                                            <?php echo "<button class=\"btn-dark px-2 py-1 mt-1 \" onclick=\"editarbeneficio('".$beneficio['id']."','".$beneficio['titulo']."','".$beneficio['enlace']."','".$beneficio['imagen']."')\" style=\"border-radius:4px !important;\">" ;?>
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <form action="<?= base_url?>administrador/borrarbeneficio" method="POST">
                                            <input type="hidden" name="id" value="<?=$beneficio['id']?>">
                                            <input type="hidden" name="imagen" value="<?=$beneficio['imagen']?>">

                                            <button class="btn btn-danger px-2 py-1 mt-1" type="submit" >
                                            <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                            
                                            </td>
                                        </tr>
                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <button data-toggle="modal" data-target="#editarbeneficiomodal" type="button" id="editarbtn" class="h4 mb-0 text-white btn text-uppercase d-inline-block"></button>

<!-- Modal  editar beneficio-->
<div class="modal fade" id="editarbeneficiomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">EDITAR BENEFICIO</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <form   action="<?=base_url?>administrador/editarbeneficio" method="POST" enctype="multipart/form-data" >

 <div class="modal-body">
     <input type="hidden" id="editarbeneficioid" name="editarid">
       <label for="nombre" >TITULO</label>
       <input type="text" class="form-control my-1" id="editartitulo" min="8" name="titulo" required placeholder="Titulo del beneficio" >
      <label for="fecha" >ENLACE</label>
       <input type="text" class="form-control my-1" required name="enlace" id="editarenlace" required placeholder="enlace de beneficio" >
       <label for="imagen">IMAGEN</label>
       <input type="file"  class="form-control my-1" name="imagen" id="editarimagen" required placeholder="Selecciona la imagen" >
        </div>
 <div class="modal-footer">
   <button type="submit" class="btn btn-primary mr-1 mb-1" style="background-color: #fc8c04 !important;border-color: #fc8c04;">GUARDAR BENEFICIO</button>
 </div>
</form>

</div>
        </div>
      </div>
                   <!--SCRIPT PARA    EDITAR BENEFICIO



                -->
                <script type="text/javascript">
					function editarbeneficio(id,titulo,enlace,imagen){
                        document.getElementById("editartitulo").value=titulo
                        document.getElementById("editarenlace").value=enlace
                   
                        document.getElementById("editarbeneficioid").value=id
                        document.getElementById("editarbtn").click()
console.log(id,titulo,enlace,imagen)
                    }
                    
					</script>
 <!--SCRIPT PARA     EDITAR BENEFICIO



                -->

                
<!-- Modal  nuevo beneficio-->
<div class="modal fade" id="nuevobeneficiomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">NUEVO BENEFICIO</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <form   action="<?=base_url?>administrador/crearbeneficio" enctype="multipart/form-data" mult method="POST">

 <div class="modal-body">
       <label for="nombre" >TITULO</label>
       <input type="text" class="form-control my-1"  min="8" name="titulo" required placeholder="Titulo del beneficio" >
      <label for="fecha" >ENLACE</label>
       <input type="text" class="form-control my-1" required name="enlace"  required placeholder="enlace de beneficio" >
       <label for="imagen">IMAGEN</label>
       <input type="file"  class="form-control my-1" name="imagen"  required placeholder="Selecciona la imagen" >
        </div>
 <div class="modal-footer">
   <button type="submit" class="btn btn-primary mr-1 mb-1" style="background-color: #fc8c04 !important;border-color: #fc8c04;">GUARDAR BENEFICIO</button>
 </div>
</form>

</div>
        </div>
      </div>
                
            </div>
        </div>