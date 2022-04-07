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

 <!-- Tabla -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>

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
            <a class="navbar-brand ps-3" href="<?=base_url?>"><img src="<?=base_url?>assets/img/logo.png" width="100"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=base_url?>usuario/logout">CERRAR SESIÓN</a></li>
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
                        <h1 class="mt-4">Eventos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel de Administrador</li>
                            
                        </ol>
                        
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">TOTAL DE CARRERAS <strong><?php echo $carrerastotal;?></strong></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">CORREDORES <strong><?php echo $corredorestotal;?></strong></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">ORGANIZADORES <strong><?php echo $organizadorestotal;?></strong></div>
                                </div>
                            </div>
                      
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">VISITAS <strong>40</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                <button data-toggle="modal" class="btn btn-dark" data-target="#nuevacategoria" >+ CATEGORIA</button>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                <button data-toggle="modal" class="btn btn-dark" data-target="#nuevoevento">+ EVENTO</button>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <strong> PRÓXIMAS CARRERAS</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>EVENTO</th>
                                            <th>FECHA</th>
                                            <th>HORA</th>
                                            <th>DISTANCIA</th>
                                            <th>LUGAR</th>
                                            <th>URL</th>
                                            <th>ORGANIZADOR</th>
                                            <th>PUBLICADO</th>
                                            <th>ACCIONES</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>EVENTO</th>
                                            <th>FECHA</th>
                                            <th>HORA</th>
                                            <th>DISTANCIA</th>
                                            <th>LUGAR</th>
                                            <th>URL</th>
                                            <th>ORGANIZADOR</th>
                                            <th>PUBLICADO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                
                
                <?php if(isset($eventos)):?>
                    <?php foreach($eventos as $evento):?>

                                        <tr >
                                            <td><?php echo $evento['nombre'];?></td>
                                            <td><?php echo $evento['dia_escrito']." ".$evento['dia_numero']." ".$evento['mes'];?> </td>
                                            <td><?php echo $evento['hora'];?></td>
                                            <td><?php echo $evento['distancias'];?></td>
                                            <td><?php echo $evento['lugar'];?></td>
                                            <td><?php echo $evento['url_inscripcion'];?></td>
                                            <td><?php echo $evento['organizador'];?></td>
                                            <?php if($evento['publicado']==0):?>
                                                <td class="text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                                </svg>
                                                </td>
                                            <?php else:?>
                                                <td class="text-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                                    </svg>
                                                </td>
                                            <?php endif;?>
                                            <td>
                                            <?php $json=json_encode($evento);?>
                                               

                                                <?php echo "<button class=\"btn-dark px-2 py-1 \" onclick=\"editarevento('".$evento['id']."','".$evento['nombre']."','".$evento['fecha']."','".$evento['hora']."','".$evento['lugar']."','".$evento['categoria']."','".$evento['distancias']."','".$evento['url_inscripcion']."','".$evento['publicado']."')\" style=\"border-radius:4px !important;\">" ;?>
                                            
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                            </button> 
                                          

                                              </td>
                                        </tr>
                     <?php endforeach;?>
            
                <?php endif;?>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <button data-toggle="modal" data-target="#editarmodal" type="button" id="editarbtn" class="h4 mb-0 text-white btn text-uppercase d-inline-block"></button>

<!-- Modal  editar evento-->
<div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">EDITAR CARRERA</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <form   action="<?=base_url?>administrador/editarevento" method="POST">

 <div class="modal-body">
     <input type="hidden" id="editarid" name="editarid">
       <label for="nombre" >EVENTO</label>
       <input type="text" class="form-control my-1" id="editarnombre" min="8" name="nombre" required placeholder="Nombre del evento" >
      <label for="fecha" >FECHA</label>
       <input type="date" class="form-control my-1" required name="fecha" id="editarfecha" required placeholder="Seleccione la fecha" >
       <label for="hora">HORA</label>
       <input type="time"  class="form-control my-1" name="hora" id="editarhora" required placeholder="Selecciona la hora" >
       <label for="lugar">LUGAR</label>
       <input type="text"  class="form-control my-1" name="lugar" id="editarlugar" required placeholder="Ingrese el lugar" >
       <label for="categoria">CATEGORIA</label>
       <select  class="form-control search-slt" required   name="categoria"  id="editarcategoria" placeholder="Seleccione la categoria">
                <?php foreach($categorias as $categoria):?>
                            <option value="<?=$categoria['categoria']?>"><?=$categoria['categoria']?></option>

                        <?php endforeach;?>

          </select>	
       <label for="distancias">DISTANCIA</label>
       <input type="text" placeholder="6k 2k" required  class="form-control my-1" id="editardistancias" name="distancias"  placeholder="Ingresa la distancia" >
       <label for="url_inscripcion">URL INSCRIPCION</label>
       <input type="text" required class="form-control my-1"  name="url_inscripcion" id="editarurl_inscripcion" placeholder="url inscripcion"  >
       <label for="url_inscripcion">ESTADO</label>
             <input class="form-check-input mt-1 ml-1 d-inline-block" type="radio" required  name="publicado"  value="0" checked>
             <label class="form-check-label ml-4 d-inline-block text-dark" >
             Borrador
             </label>
       
            <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio" name="publicado" value="1">
             <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
              Publicado
             </label>
 </div>
 <div class="modal-footer">
   <button type="submit" class="btn btn-primary mr-1 mb-1" style="background-color: #fc8c04 !important;border-color: #fc8c04;">GUARDAR EVENTO</button>
 </div>
</form>

</div>
        </div>
      </div>


      <!--SCRIPT PARA     EDITAR EVENTO



                -->
                <script type="text/javascript">
					function editarevento(id,nombre,fecha,hora,lugar,categoria,distancia,url_inscripcion,publicado){
                        console.log(id,nombre,fecha,hora,lugar,categoria,distancia,url_inscripcion,publicado)
                        document.getElementById("editarnombre").value=nombre
                        document.getElementById("editarfecha").value=fecha
                        document.getElementById("editarhora").value=hora
                        document.getElementById("editarlugar").value=lugar
                        document.getElementById("editarurl_inscripcion").value=url_inscripcion
                        document.getElementById("editarid").value=id
                        document.getElementById("editarbtn").click()

                    }
                    
					</script>
 <!--SCRIPT PARA     EDITAR EVENTO               -->
                
            </div>
        </div>
           
            <!-- modal nueva categoria -->
            <div class="modal fade" id="nuevacategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">NUEVA CATEGORIA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                                 <form   action="<?=base_url?>administrador/crearcategoria" method="POST">

                                    <div class="modal-body">
                                        <label for="nombre" >CATEGORIA</label>
                                        <input type="text" class="form-control my-1" required min="10" name="categoria"  placeholder="Nombre del evento" >
                                    </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="background-color: #fc8c04 !important;border: #fc8c04 !important;">Guardar Evento</button>
                </div>
            </form>

            </div>
            </div>

</div>   

        
<!-- modal nuevo evento -->
<div class="modal fade" id="nuevoevento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">NUEVA MARATON</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form   action="<?=base_url?>administrador/crearevento" method="POST">

    <div class="modal-body">
          <label for="nombre" >EVENTO</label>
          <input type="text" class="form-control my-1" required min="10" name="nombre"  placeholder="Nombre del evento" >
         <label for="fecha" >FECHA</label>
          <input type="date" class="form-control my-1" required min="<?php echo date('d-m-Y');?>" name="fecha"  placeholder="Seleccione la fecha" >
          <label for="hora">HORA</label>
          <input type="time"  class="form-control my-1" required  name="hora" placeholder="Selecciona la hora" >
          <label for="lugar">LUGAR</label>
          <input type="text"  class="form-control my-1" required name="lugar"  placeholder="Ingrese el lugar" >
          <label for="categoria">CATEGORIA</label>
          <select  class="form-control search-slt" required   name="categoria" placeholder="Seleccione la categoria">
                <?php foreach($categorias as $categoria):?>
                            <option value="<?=$categoria['categoria']?>"><?=$categoria['categoria']?></option>

                        <?php endforeach;?>

          </select>	
          <label for="distancias">DISTANCIA</label>
          <input type="text"  class="form-control my-1" required   name="distancias"  placeholder="Ingresa la distancia" >
          <label for="url_inscripcion">URL INSCRIPCION</label>
          <input type="text"  class="form-control my-1" min="8" required name="url_inscripcion" placeholder="url inscripcion"  >
          <label for="publicado">ESTADO</label>
             <input class="form-check-input mt-1 ml-1 d-inline-block" type="radio"  name="publicado"  value="0" checked>
             <label class="form-check-label ml-4 d-inline-block text-dark" >
             Borrador
             </label>
       
            <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio"  name="publicado" value="1">
             <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
              Publicado
             </label>
        </div>
    
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="background-color: #fc8c04 !important;border: #fc8c04 !important;">Guardar Evento</button>
    </div>
</form>

  </div>
</div>

</div>