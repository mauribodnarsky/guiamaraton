<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Guia Maratón</title>
        <link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico">

		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
 
  <!-- Argon CSS -->
  <link rel="stylesheet" href="https://guiamaraton.com/api/assets/css/argon.css?v=1.2.0" type="text/css">
<link rel="stylesheet" href="https://guiamaraton.com/api/assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?=base_url?>assets/css/estilopanel.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

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

	</head>
	<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?=base_url?>"><img src="<?=base_url?>assets/img/logo.png" width="100"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
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
							<a class="nav-link"  href="<?=base_url?>organizador/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                CARRERAS
                            </a>
                           
                            
                            <a class="nav-link" href="<?=base_url?>usuario/logout">
                                <div class="sb-nav-link-icon"><i class="fas fa-copyright"></i></div>
                                CERRAR SESIÓN
                            </a>
                           
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        Guia Maraton
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Eventos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel de Organizador</li>
                        </ol>
                        <div class="row">
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">                       
                                    <button data-toggle="modal" data-target="#nuevoevento" type="button" class="h4 mb-0 text-white btn text-uppercase d-inline-block">+NUEVO EVENTO</button>
                                </div>
                            </div>
                        </div>
                        
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <strong> MIS CARRERAS</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>EVENTO</th>
                                            <th>LUGAR</th>
                                            <th>DISTANCIA</th>
                                            <th>FECHA</th>
                                            <th>HORA</th>
                                            <th>URL</th>
                                            <th>PUBLICADO</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>EVENTO</th>
                                            <th>LUGAR</th>
                                            <th>DISTANCIA</th>
                                            <th>FECHA</th>
                                            <th>HORA</th>
                                            <th>URL</th>
                                            <th>PUBLICADO</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                
                
                <?php if(isset($eventos)):?>
                    <?php foreach($eventos as $evento):?>
                      
                                <td> <i *ngIf="evento.publicado==0" class="bi bi-x text-danger"></i><i  *ngIf="evento.publicado==1" class="bi text-success bi-check2"></i> </td>
                                
                                        <tr>
                                            <td><?php echo $evento['nombre'];?></td>
                                            <td><?php echo $evento['lugar'];?> </td>
                                            <td><?php echo $evento['distancias'];?></td>
                                            <td><?php echo $evento['dia_escrito']." ".$evento['dia_numero']." ".$evento['mes'];?></td>
                                            <td><?php echo $evento['hora'];?></td>
                                            <td><?php echo $evento['url_inscripcion'];?></td>
                                            <?php if($evento['publicado']==0):?>
                                                <td class="text-success text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                                </svg>
                                                </td>
                                            <?php else:?>
                                                <td class="text-danger text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                                    </svg>
                                                </td>
                                            <?php endif;?>
                                        </tr>
                     <?php endforeach;?>
            
                <?php endif;?>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;Guia Maraton 2021</div>
                            <div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
      

        
<!-- Modales -->
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
          <label for="url_inscripcion">ESTADO</label>
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