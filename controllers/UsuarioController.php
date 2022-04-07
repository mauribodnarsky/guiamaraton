<?php

require_once 'models/usuario.php';
require_once 'models/evento.php';

class usuarioController{
	

	public function save(){
		if(isset($_POST)){
			$usuario=new Usuario();
			$usuario->setRol("corredor");
			$usuario->setNombre($_POST['usuario']);
			$usuario->setDni($_POST['dni']);
			$usuario->setEmail($_POST['email']);

			$registro=$usuario->crearusuario();
			$objetoevento=new Evento();
			$categorias=$objetoevento->obtenercategorias();
			$lugares=$objetoevento->obtenerlugares();
			$eventos=$objetoevento->obtenertreseventos();

			if($registro==="usuario ya logueado"){
				$mensaje="ESTE USUARIO YA EXISTE!";

		require_once "views/usuario/registrar.php";
		}
			elseif($registro==true){
				
				$mensaje="<h3 class=\"text-success\">REGISTRADO CORRECTAMENTE!</h3>";
				
				//Redirigir una vez registrado al inicio
			
			$identity = $usuario->login();
			$objetoevento = new Evento();
			$beneficios = $objetoevento->obtenerbeneficios();
			$categorias=$objetoevento->obtenercategorias();
			$lugares=$objetoevento->obtenerlugares();
			$eventos=$objetoevento->obtenerochoeventos();
			
			$_SESSION['identity'] = $identity;
				
				require_once "views/calendario/index.php";

			}	
			
			else{
				$mensaje="DATOS INGRESADOS INCORRECTOS!";
				require_once "views/usuario/registrar.php";

		}
		
	}
}
	public function formularioregistro(){

		require_once "views/usuario/registrar.php";

	}
	public function iniciarsesion(){
		$error=false;
		
		require_once "views/usuario/login.php";

	}

	 public function login(){
			// Identificar al usuario
			// Consulta a la base de datos
			$error=false; //se usa para mostrar el mensaje de error 
			$usuario = new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setDni($_POST['dni']);
			
			$identity = $usuario->login();
			$objetoevento = new Evento();
			$beneficios = $objetoevento->obtenerbeneficios();
			$categorias=$objetoevento->obtenercategorias();
			$lugares=$objetoevento->obtenerlugares();
			$eventos=$objetoevento->obtenertreseventos();
			if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;

				if($identity->rol == 'administrador'){
					$eventos=$objetoevento->eventosparaadmin();
					
			$objusuario=new Usuario();
			$carrerastotal=$objusuario->obtenertotalcarreras();
			$organizadorestotal=$objusuario->obtenertotalorganizadores();
			$corredorestotal=$objusuario->obtenertotalcorredores();
			$totalvisitas=$objusuario->obtenertotalvisitaspublicitarias();
					require_once "views/administrador/index.php";
				}
				if($identity->rol == 'organizador'){
					$eventos=$objetoevento->eventosparaorganizador($_SESSION['identity']->id);

					require_once "views/organizador/index.php";
				}
				if($identity->rol == 'corredor'){
					$eventos=$objetoevento->obtenereventos();
					require_once "views/calendario/index.php";
				}
				
			}
			else{
				$error=true;
				$mensaje="DATOS INGRESADOS INCORRECTOS!";
			require_once "views/usuario/login.php";
			}

		
	}
	public function logout(){
		$objetoevento = new Evento();
		$beneficios = $objetoevento->obtenerbeneficios();
		$eventos= $objetoevento->obtenertreseventos();
		$categorias=$objetoevento->obtenercategorias();
		$lugares=$objetoevento->obtenerlugares();
		
		if(isset($_SESSION['identity'])){
			unset($_SESSION['identity']);
		}
		
		if(isset($_SESSION['admin'])){
			unset($_SESSION['admin']);
		}
		$error=false; // booleano para mostrar mensajes de validacion
		require_once "views/usuario/login.php";

	}

}