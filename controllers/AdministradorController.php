<?php
require_once 'models/usuario.php';
require_once 'models/evento.php';

class administradorController{
	

	public function index(){
		$objusuario=new Usuario();

		$carrerastotal=$objusuario->obtenertotalcarreras();
		$organizadorestotal=$objusuario->obtenertotalorganizadores();
		$corredorestotal=$objusuario->obtenertotalcorredores();
		$totalvisitas=$objusuario->obtenertotalvisitaspublicitarias();
		
		$objevento=new Evento();
		$eventos=$objevento->eventosparaadmin();
		$categorias=$objevento->obtenercategorias();
		$lugares=$objevento->obtenerlugares();
		if((isset($_SESSION['identity'])) && ($_SESSION['identity']->rol=='administrador')){

		require_once 'views/administrador/index.php';
		}else{
			$error=false;
			require_once 'views/usuario/login.php';

		}
	}
	public function beneficios(){
		$objevento=new Evento();
		$beneficios=$objevento->obtenerbeneficios();

		require_once 'views/administrador/beneficios.php';
	}
	
	public function usuarios(){
		$objusuario=new Usuario();
		$usuarios=$objusuario->obtenerusuarios();
		$objusuario=new Usuario();

		$carrerastotal=$objusuario->obtenertotalcarreras();
		$organizadorestotal=$objusuario->obtenertotalorganizadores();
		$corredorestotal=$objusuario->obtenertotalcorredores();
		$totalvisitas=$objusuario->obtenertotalvisitaspublicitarias();
		require_once 'views/administrador/usuarios.php';
	}


		
		public function editarevento(){
			$objevento=new Evento();
			if(isset($_SESSION['identity'])){
			$objevento->setFecha($_POST['fecha']);
			$objevento->setNombre($_POST['nombre']);
			$objevento->setHora($_POST['hora']);
	
			$objevento->setLugar($_POST['lugar']);
			$objevento->setCategoria($_POST['categoria']);
			$objevento->setDistancia($_POST['distancias']);
			$objevento->setUrlInscripcion($_POST['url_inscripcion']);
			$objevento->setPublicado($_POST['publicado']);
			$modificar=$objevento->modificarevento($_POST['editarid']);



			$objusuario=new Usuario();
			$carrerastotal=$objusuario->obtenertotalcarreras();
			$organizadorestotal=$objusuario->obtenertotalorganizadores();
			$corredorestotal=$objusuario->obtenertotalcorredores();
			$totalvisitas=$objusuario->obtenertotalvisitaspublicitarias();
		
			

			$eventos=$objevento->eventosparaadmin();
			$categorias=$objevento->obtenercategorias();
			$lugares=$objevento->obtenerlugares();
			require_once 'views/administrador/index.php';
			}		
		}
		public function crearbeneficio(){
							
			$titulo=$_POST['titulo'];
			$enlace=$_POST['enlace'];
			$imagen="no hay imagen";
					// Guardar la imagen
			if(isset($_FILES['imagen'])){
				$file = $_FILES['imagen'];
				$filename = $file['name'];
				$mimetype = $file['type'];
				$imagen=base_url."assets/img/".$filename;

				move_uploaded_file($file['tmp_name'],  'assets/img/'.$filename);
				
		
			}
			
			$objusuario=new usuario();
			$objusuario->crearbeneficio($titulo,$enlace,$imagen);
			$objevento=new Evento();
			$beneficios=$objevento->obtenerbeneficios();
	
			require_once 'views/administrador/beneficios.php';
	}
		public function editarbeneficio(){
							
				$titulo=$_POST['titulo'];
				$enlace=$_POST['enlace'];
				$id=$_POST['editarid'];
						// Guardar la imagen
				if(isset($_FILES['imagen'])){
					$file = $_FILES['imagen'];
					$filename = $file['name'];
					$mimetype = $file['type'];
					$imagen=base_url."assets/img/".$filename;

					move_uploaded_file($file['tmp_name'],  'assets/img/'.$filename);
				}
		
					$objevento=new usuario();
					$objevento->editarbeneficio($id,$titulo,$enlace,$imagen);
					$objevento=new Evento();
					$beneficios=$objevento->obtenerbeneficios();
					require_once 'views/administrador/beneficios.php';

				
		}

		public function crearevento(){

			$objevento=new Evento();
			if(isset($_SESSION['identity'])){
			
			$objevento->setFecha($_POST['fecha']);
			$objevento->setNombre($_POST['nombre']);
			$objevento->setLugar($_POST['lugar']);
			$objevento->setCategoria($_POST['categoria']);
			$objevento->setHora($_POST['hora']);
	
			$objevento->setDistancia($_POST['distancias']);
			$objevento->setUrlInscripcion($_POST['url_inscripcion']);
			$objevento->setOrganizador($_SESSION['identity']->id);
			$objevento->setPublicado($_POST['publicado']);
			$eventos=$objevento->eventosparaadmin();
			$guardar=$objevento->guardarevento();



				//estadisticas,categorias,etc para views
			$objusuario=new Usuario();

			$carrerastotal=$objusuario->obtenertotalcarreras();
			$organizadorestotal=$objusuario->obtenertotalorganizadores();
			$corredorestotal=$objusuario->obtenertotalcorredores();
			$totalvisitas=$objusuario->obtenertotalvisitaspublicitarias();
			
			$objevento=new Evento();
			$eventos=$objevento->eventosparaadmin();
			$categorias=$objevento->obtenercategorias();
			$lugares=$objevento->obtenerlugares();
		}


			require_once 'views/administrador/index.php';

		}

		public function crearcategoria(){
		$nuevacategoria=$_POST['categoria'];
		$objevento=new Evento();
		$guardar=$objevento->crearcategoria($nuevacategoria);
		$eventos=$objevento->eventosparaadmin();
		$categorias=$objevento->obtenercategorias();
		$lugares=$objevento->obtenerlugares();
		


		require_once 'views/administrador/index.php';
	
		}


		
	public function editarusuario(){
		$usuario=new Usuario();
		$usuario->setRol($_POST['rol']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setEmail($_POST['email']);
		$usuario->setDni($_POST['dni']);

		$modificar=$usuario->editar($_POST['id']);
		$usuarios=$usuario->obtenerusuarios();
		$carrerastotal=$usuario->obtenertotalcarreras();
		$organizadorestotal=$usuario->obtenertotalorganizadores();
		$corredorestotal=$usuario->obtenertotalcorredores();
		$totalvisitas=$usuario->obtenertotalvisitaspublicitarias();
		
		require_once 'views/administrador/usuarios.php';
	
}
public function eliminarusuario(){
	$usuario=new Usuario();
	
	$eliminar=$usuario->borrar($this->json->id);
	$usuarios=$usuario->obtenerusuarios();
	$json=['usuarios'=>$usuarios,'respuesta'=>$eliminar];
	echo json_encode($json);

}
public function borrarbeneficio(){
	$usuario=new Usuario();
	$objevento=new Evento();
	$ruta=$_POST['imagen'];
	$ruta=substr($ruta,24);
	$borrar=unlink($ruta);

	$eliminar=$usuario->borrarbeneficio($_POST['id']);

	$beneficios=$objevento->obtenerbeneficios();
	require_once 'views/administrador/beneficios.php';

}
	
	
	
}