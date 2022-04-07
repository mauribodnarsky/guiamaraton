<?php
require_once 'models/usuario.php';
require_once 'models/evento.php';

class calendarioController{
	
	public function index(){
		$objetoevento = new Evento();
		$beneficios = $objetoevento->obtenerbeneficios();
		$eventos= $objetoevento->obtenertreseventos();
		if(isset($_SESSION['identity'])){
		$eventos= $objetoevento->obtenerochoeventos();
		}
		$categorias=$objetoevento->obtenercategorias();
		$lugares=$objetoevento->obtenerlugares();
		
		
		
		// renderizar vista
		require_once 'views/calendario/index.php';
	}
	
	
	

	
}