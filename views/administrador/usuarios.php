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

    <!-- Tabla -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    

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

    <!-- links diseño calendario -->
        <link href="<?=base_url?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="<?=base_url?>bootstrap/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
        <link href="<?=base_url?>assets/css/estilopanel.css" rel="stylesheet" /> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

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
                        <h1 class="mt-4">USUARIOS</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel de Administrador</li>
                            
                        </ol>
                        
                        
                        <div class="row">
                            
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                <button data-toggle="modal" class="btn btn-dark" data-target="#nuevousuario">+ USUARIO</button>
                                </div>
                            </div>
                        </div>
                            
                          

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <strong> LISTA DE USUARIOS</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">USUARIO</th>
                                            <th scope="col">CORREO</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">ROL</th>
                                            <th scope="col">ACCION</th>
                                            

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">USUARIO</th>
                                            <th scope="col">CORREO</th>
                                            <TH scope="col">DNI</TH>
                                            <th scope="col">ROL</th>
                                            <th scope="col">ACCION</th>
                                            

                                        </tr>
                                    </tfoot>
                                    <tbody>
                
                
                <?php if(isset($usuarios)):?>
                    <?php foreach($usuarios as $usuario):?>

                                        <tr class="my-1">
                                            <td><?php echo $usuario['nombre'];?></td>
                                            <td class="px-2"><?php echo $usuario['email'];?> </td>
                                            <td class="px-2"><?php echo $usuario['dni'];?></td>
                                            <td><?php echo $usuario['rol'];?></td>
                                      
                                            <td class="text-center">
                                               

                                                <?php echo "<button class=\"btn-dark px-2 py-1 my-2 \" onclick=\"editarusuario('".$usuario['id']."','".$usuario['nombre']."','".$usuario['email']."','".$usuario['dni']."','".$usuario['rol']."')\" style=\"border-radius:4px !important;\">" ;?>
                                            
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
                <button data-toggle="modal" data-target="#editarusuario" type="button" id="editarbtn" class="h4 mb-0 text-white btn text-uppercase d-inline-block"></button>

<!-- Modal  editar usuario-->
<div class="modal fade" id="editarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <form   action="<?=base_url?>administrador/editarusuario" method="POST">

 <div class="modal-body">
     <input type="hidden" id="editarid" name="id">
       <label for="nombre" >USUARIO</label>
       <input type="text" class="form-control my-1" id="editarnombre" min="8" name="nombre" required placeholder="Nombre del evento" >
      <label for="fecha" >CORREO</label>
       <input type="email" class="form-control my-1" required name="email" id="editaremail" required placeholder="Seleccione la fecha" >
       <label for="dni" >DNI</label>
       <input type="text" class="form-control my-1" required name="dni" id="editardni" required pattern="[0-9]{8}" >
      
       <label for="categoria">ROL</label>
     
             <input class="form-check-input mt-1 ml-1 d-inline-block" type="radio" required  name="rol"  value="corredor" checked>
             <label class="form-check-label ml-4 d-inline-block text-dark" >
             Corredor
             </label>
       
            <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio" name="rol" value="organizador">
             <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
              Organizador
             </label>
             
            <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio" name="rol" value="administrador">
             <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
              Administrador
             </label>
 </div>
 <div class="modal-footer">
   <button type="submit" class="btn btn-primary mr-1 mb-1" style="background-color: #fc8c04 !important;border-color: #fc8c04;">GUARDAR EVENTO</button>
 </div>
</form>

</div>
        </div>
      </div>


 <!--SCRIPT PARA     EDITAR usuario            -->
                <script type="text/javascript">
					function editarusuario(id,nombre,email,dni,rol){
                        document.getElementById("editarnombre").value=nombre
                        document.getElementById("editaremail").value=email
                        document.getElementById("editardni").value=dni

                        document.getElementById("editarid").value=id
                        document.getElementById("editarbtn").click()

                    }
                    
					</script>
 <!--SCRIPT PARA     EDITAR EVENTO             -->
               
                
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

        
<!-- modal nuevo usuario -->
<div class="modal fade" id="nuevousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form   action="<?=base_url?>usuario/save" method="POST">
  
        <div class="modal-body">
          
              <label for="nombre" >USUARIO</label>
              <input type="text" class="form-control my-1"  name="usuario"   >
             <label for="text" >CORREO</label>
                <input type="email" email="true" class="form-control input100" placeholder="Email" name="email" #email="ngModel"   [(ngModel)]="usuario_registro.email"  >
                <label for="dni" >DNI</label>
       <input type="text" class="form-control my-1" required name="dni" required pattern="[0-9]{8}" >
      
        
              <label for="rol">ROL</label>
              <div>
              <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio"  [(ngModel)]="this.usuario_registro.rol" name="rol" value="administrador">
              <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
               Administrador
              </label>     
              <input class="form-check-input mt-1 ml-1 d-inline-block" type="radio"  [(ngModel)]="this.usuario_registro.rol" name="rol"  value="organizador" checked>
                    <label class="form-check-label ml-4 d-inline-block text-dark" >
                    Organizador
                    </label>
              
                   <input class="form-check-input mt-1 ml-1  d-inline-block " type="radio"  [(ngModel)]="this.usuario_registro.rol" name="rol" value="corredor">
                    <label class="form-check-label ml-4 d-inline-block ml-1 text-dark" >
                     Corredor
                    </label>
                    </div>
        </div>
        <div class="modal-footer">
                      <button type="submit" style="background-color: #fc8c04 !important;border: #fc8c04 !important;" class="btn btn-success" *ngIf="((usuario_registro.rol!='')&&(usuario_registro.password!='')&& (usuario_registro.usuario!='') && (email.valid !=false)) ">
                          GUARDAR USUARIO
                      </button>
        </div>
    </form>
  
      </div>
  
  
    </div>
  </div>