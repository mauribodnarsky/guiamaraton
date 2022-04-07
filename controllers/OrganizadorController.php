<?php
require_once 'models/usuario.php';
require_once 'models/evento.php';

class organizadorController{
	

	public function index(){
		$objusuario=new Usuario();

		
		$objevento=new Evento();
		$categorias=$objevento->obtenercategorias();
		$lugares=$objevento->obtenerlugares();
		if((isset($_SESSION['identity'])) && ($_SESSION['identity']->rol=='organizador')){
			$eventos=$objevento->eventosparaorganizador($_SESSION['identity']->id);

		require_once 'views/organizador/index.php';
		}else{
			$error=false;
			require_once 'views/usuario/iniciarsesion.php';

		}
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
	

		public function crearevento(){

			$objevento=new Evento();
			if(isset($_SESSION['identity'])){
			$id=$_SESSION['identity']->id;
			$objevento->setFecha($_POST['fecha']);
			$objevento->setNombre($_POST['nombre']);
			$objevento->setLugar($_POST['lugar']);
			$objevento->setCategoria($_POST['categoria']);
			$objevento->setHora($_POST['hora']);
	
			$objevento->setDistancia($_POST['distancias']);
			$objevento->setUrlInscripcion($_POST['url_inscripcion']);
			$objevento->setOrganizador($id);
			$objevento->setPublicado($_POST['publicado']);
			$eventos=$objevento->eventosparaorganizador($id);
			$guardar=$objevento->guardarevento();



				//estadisticas,categorias,etc para views
			
			$objevento=new Evento();
			$eventos=$objevento->eventosparaorganizador($id);
			$categorias=$objevento->obtenercategorias();
			$lugares=$objevento->obtenerlugares();
		}


			require_once 'views/administrador/index.php';

		}

		public function crearcategoria(){
		$nuevacategoria=$this->json->categoria;
		$objevento=new Evento();
		$guardar=$objevento->crearcategoria($nuevacategoria);
		$categorias=$objevento->obtenercategorias();
		$json=['resultado'=>$guardar,'categorias'=>$categorias];
				echo json_encode($json);
	
		}


		
	public function editarusuario(){
		$usuario=new Usuario();
		$usuario->setRol($_POST['rol']);
		$usuario->setNombre($_POST['usuario']);
		$usuario->setEmail($_POST['email']);

		$modificar=$usuario->editar($_POST['id']);
		$usuarios=$usuario->obtenerusuarios();
		require_once 'views/administrador/usuarios.php';
	
}
public function eliminarusuario(){
	$usuario=new Usuario();
	
	$eliminar=$usuario->borrar($this->json->id);
	$usuarios=$usuario->obtenerusuarios();
	$json=['usuarios'=>$usuarios,'respuesta'=>$eliminar];
	echo json_encode($json);

}
	
	
}