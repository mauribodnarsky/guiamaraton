<?php

class Usuario{
	private $nombre;
	private $dni;
	private $rol;
	private $email;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	

	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function getNombre() {
		return $this->nombre;
	}

	

	function setDni($dni) {
		$this->dni = $dni;
	}
	function getDni() {
		return $this->dni ;
	}
	function setRol($rol) {
		$this->rol = $rol;
	}

	function getRol() {
		return $this->rol;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function getEmail() {
		return $this->email;
	}





	
	public function getAll(){
		$usuarios=array();
		$usuarioss = $this->db->query("SELECT * FROM usuarios;");
		while($filas=$usuarioss->fetch_assoc()){
            $usuarios[]=$filas;
        }

		return $usuarios;
	}


	public function borrar($id){
		$sql="DELETE FROM usuarios WHERE id=".$id.";";
		$delete = $this->db->query($sql);
		return $delete;

		
	}
	public function borrarbeneficio($id){
		$sql="DELETE FROM beneficios WHERE id=".$id.";";
		$delete = $this->db->query($sql);
		return $delete;

		
	}

	public function editar($id){
		$sql = "UPDATE usuarios SET nombre='{$this->getNombre()}',rol= '{$this->getRol()}',email='{$this->getEmail()}' where id=".$id."; ";
		$save = $this->db->query($sql);
		$result = false;
		if($save){
			$result = true;
		}
		
		return $result;
	}
	
	public function buscarusuario($busqueda){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query("SELECT * FROM usuarios WHERE usuarios.nombre LIKE '%".$busqueda."%' or  usuarios.email LIKE '%".$busqueda."' or   usuarios.rol LIKE '%".$busqueda."'   order by usuarios.nombre desc;");
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }
		return $eventos;
	}
	public function crearusuario(){
		$sql = "SELECT * FROM usuarios WHERE email ='{$this->getEmail()}' or  dni='{$this->getDni()}' ;";
		$login = $this->db->query($sql);
		$result = false;
		$usuarioyaexiste=false;
		if($login && $login->num_rows >= 1){
			$usuarioyaexiste =true;

		}
		else{
		$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}','{$this->getDni()}','{$this->getEmail()}', '{$this->getRol()}'); ";

		$save = $this->db->query($sql);
		if($save){
			$result = true;
		}
	}
	
		if($usuarioyaexiste==true){
			return "usuario ya logueado";
		}else{
		return $result;
		}
	}
	
	public function login(){
		$result = false;
		$email = $this->email;
		$dni = $this->dni;
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE email ='$email' and dni='".$dni."' ;";
		$login = $this->db->query($sql);
		
		
		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();
			$result=$usuario;
		}

		return $result;
	}
	public function obtenerusuarios(){
		$usuarios=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$sql ="SELECT * from usuarios;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $usuarios[]=$filas;
        }

		return $usuarios;
	}



public function obtenertotalcarreras(){
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$carreras=array();
		$sql ="SELECT COUNT(eventos.id) as 'carreras' from eventos;";
		$filassql = $this->db->query($sql);

		$carreras=$filassql->fetch_assoc();
    		$carrerastotal=$carreras['carreras'];

		return $carrerastotal;
	}


public function obtenertotalorganizadores(){
		$organizadores=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT COUNT(usuarios.id ) as 'organizadores' from usuarios where rol LIKE 'organizador'";
		$filassql = $this->db->query($sql);

		$organizadores=$filassql->fetch_assoc();
    		$organizadorestotal=$organizadores['organizadores'];

		return $organizadorestotal;
	}

	public function obtenertotalvisitaspublicitarias(){

		$sql ="SELECT SUM(beneficios.visitas ) as 'totalvisitaspublicitarias' from beneficios";
		$filassql = $this->db->query($sql);

		$totalvisitaspublicitarias=$filassql->fetch_assoc();
    		$beneficiostotal=$totalvisitaspublicitarias['totalvisitaspublicitarias'];

		return $beneficiostotal;
	}
public function obtenertotalcorredores(){
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$corredores=array();
		$sql ="SELECT COUNT(usuarios.id ) as 'corredores' from usuarios where rol LIKE 'corredor'";
		$filassql = $this->db->query($sql);

		$corredores=$filassql->fetch_assoc();
    		$corredorestotal=$corredores['corredores'];

		return $corredorestotal;
	}
	public function crearbeneficio($titulo,$enlace,$imagen){
		$sql="INSERT INTO beneficios VALUES (null,'".$titulo."','".$enlace."','".$imagen."',0);";
		$sentencia = $this->db->query($sql);
		return $sentencia;

	}

	public function editarbeneficio($id,$titulo,$enlace,$imagen){
		$sql="UPDATE beneficios SET titulo='".$titulo."',enlace='".$enlace."',$imagen='".$imagen."' WHERE id=".$id.";";
		$sentencia = $this->db->query($sql);
		return $sentencia;

	}

	
}