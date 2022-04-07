<?php
class Evento{
	private $id;
	private $nombre;
	private $fecha;
	private $hora;
	private $lugar;
	private $categoria;
	private $distancia;
	private $url_inscripcion;
	private $organizador;
	private $publicado;
	private $db;
		
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function setId($id){
		$this->id=$id;
	}

	function getId(){
		return $this->id;
	}
	
	function setNombre($nombre){
		$this->nombre=$nombre;
	}

	function getNombre(){
		return $this->nombre;
	}
	

	function setFecha($fecha) {
		$this->fecha = $fecha;
	}
	
	function getFecha() {
		return $this->fecha;
	}

	function setHora($hora) {
		$this->hora = $hora;
	}
	
	function getHora() {
		return $this->hora;
	}

	function setLugar($lugar) {
		$this->lugar = $lugar;
	}
	
	function getLugar() {
		return $this->lugar;
	}

	
	


	function setCategoria($categoria) {
		$this->categoria = $categoria;
	}
	function getCategoria() {
		return $this->categoria;
	}

	


	function setDistancia($distancia) {
		$this->distancia = $distancia;
	}
	function getDistancia() {
		return $this->distancia;
	}

	function setUrlInscripcion($url) {
		$this->url_inscripcion = $url;
	}
	function getUrlInscripcion() {
		return $this->url_inscripcion;
	}

	


	function setOrganizador($organizador) {
		$this->organizador = $organizador;
	}
	function getOrganizador() {
		return $this->organizador;
	}

	


	function setPublicado($publicado) {
		$this->publicado = $publicado;
	}
	function getPublicado() {
		return $this->publicado;
	}

	//metodos 
	
	//** */
	public function eventosdeacinco($cantidad){

		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h\") as 'hora',CONCAT(UCASE(LEFT(date_format(fecha, \"%W\"),1)),LCASE(SUBSTRING(date_format(fecha, \"%W\"),2))) as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion,publicado FROM eventos order by fecha ASC LIMIT ".$cantidad;
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query($sql);
	
		while($filas=$filassql->fetch_assoc()){
			$eventos[]=$filas;
		}
	
		return $eventos;
	
	
	}
	
	public function borrarbeneficio($id){
		$sql = $this->db->query("DELETE FROM beneficios WHERE id =".$id." ");
		
		return $sql;
	}
	
	
	public function obtenerbeneficios(){
		$beneficios=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT * from beneficios;";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $beneficios[]=$filas;
        }

		return $beneficios;
	}
	public function sumarpuntosbeneficio($id){
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="UPDATE beneficios SET visitas=visitas+1 where id=".$id.";";
		$respuesta = $this->db->query($sql);

	

		return $respuesta;
	}

	public function buscarbeneficio($busqueda){
		$beneficios=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT * from beneficios WHERE titulo LIKE '%".$busqueda."%';";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $beneficios[]=$filas;
        }

		return $beneficios;
	}

	public function buscareventoadmin($busqueda,$lugar,$categoria){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query("SELECT usuarios.id as 'organizadorid', eventos.nombre as 'nombre', date_format(eventos.fecha, \"%d\") as 'dia_numero',substring(date_format(eventos.fecha, \"%M\"),1,3)as 'mes',eventos.fecha as 'fecha',eventos.hora as 'hora',eventos.lugar as 'lugar',eventos.categoria,eventos.distancias as 'distancias',eventos.url_inscripcion as 'url_inscripcion',usuarios.nombre as 'organizador',eventos.publicado as 'publicado',eventos.id as 'id' FROM eventos INNER JOIN usuarios ON eventos.organizador=usuarios.id WHERE eventos.nombre LIKE '%".$busqueda."%' and   eventos.lugar LIKE '%".$lugar."' and   eventos.categoria LIKE '%".$categoria."'   order by eventos.fecha asc;");
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }
		return $eventos;
	}

	public function buscarevento($busqueda,$lugar,$categoria){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',date_format(fecha, \"%M\") as 'mes',date_format(hora,\"%h\") as 'hora',date_format(fecha, \"%W\") as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion,publicado FROM eventos WHERE nombre LIKE '%".$busqueda."' and  lugar LIKE '%".$lugar."' and  categoria LIKE '%".$categoria."'  order by eventos.fecha asc;";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}
	public function buscareventoorganizador($busqueda,$id){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',date_format(fecha, \"%M\") as 'mes',date_format(hora,\"%h\") as 'hora',date_format(fecha, \"%W\") as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion,publicado FROM eventos WHERE ((eventos.organizador=".$id.") and ((nombre LIKE '%".$busqueda."') or  (lugar LIKE '%".$busqueda."') or  (categoria LIKE '%".$busqueda."')))  order by eventos.fecha asc;";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}

	public function eventospublicados(){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h\") as 'hora',CONCAT(UCASE(LEFT(date_format(fecha, \"%W\"),1)),LCASE(SUBSTRING(date_format(fecha, \"%W\"),2))) as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion,publicado FROM eventos WHERE  publicado=1  order by eventos.fecha asc;";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}
	public function buscareventocalendario($busqueda,$categoria,$lugar,$mes){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h\") as 'hora',CONCAT(UCASE(LEFT(date_format(fecha, \"%W\"),1)),LCASE(SUBSTRING(date_format(fecha, \"%W\"),2))) as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion,publicado FROM eventos WHERE nombre LIKE '%".$busqueda."' and  lugar LIKE '%".$lugar."' and  categoria LIKE '%".$categoria."' and MONTH(fecha) LIKE '%".$mes."' and publicado=1  order by eventos.fecha asc;";
		$filassql = $this->db->query($sql);

		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}
	public function eventosparaadmin(){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query("SELECT usuarios.id as 'organizadorid', eventos.nombre as 'nombre', date_format(fecha, \"%d\") as 'dia_numero',date_format(fecha, \"%W\") as 'dia_escrito',substring(date_format(fecha, \"%M\"),1,3)as 'mes',fecha,hora,lugar,categoria,distancias,url_inscripcion,usuarios.nombre as 'organizador',publicado,eventos.id as 'id' FROM eventos INNER JOIN usuarios ON eventos.organizador=usuarios.id order by eventos.fecha asc;");
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}
	public function eventosparaorganizador($id){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$sql="SELECT eventos.nombre as 'nombre',substring(date_format(fecha, \"%M\"),1,3)as 'mes',fecha,hora,lugar,categoria,distancias,url_inscripcion,usuarios.nombre as 'organizador',date_format(fecha, \"%W\") as 'dia_escrito', date_format(fecha, \"%d\") as 'dia_numero',publicado FROM `eventos` INNER JOIN usuarios ON eventos.organizador=usuarios.id and usuarios.id=".$id." order by eventos.fecha asc";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}


	public function obtenereventos(){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$sql ="SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h:%m\") as 'hora',date_format(fecha, \"%W\") as 'dia_escrito',eventos.nombre as 'nombre', lugar,distancias,categoria,url_inscripcion, usuarios.nombre as 'organizador',publicado FROM `eventos` INNER JOIN  usuarios ON eventos.organizador=usuarios.id order by eventos.fecha asc;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}

	public function obtenertreseventos(){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query("SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h\:%m\") as 'hora',CONCAT(UCASE(LEFT(date_format(fecha, \"%W\"),1)),LCASE(SUBSTRING(date_format(fecha, \"%W\"),2))) as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion FROM `eventos` where publicado=1 order by eventos.fecha asc LIMIT 5;");
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}

	public function obtenerochoeventos(){
		$eventos=array();
		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");
		$filassql = $this->db->query("SELECT date_format(fecha, \"%d\") as 'dia_numero',substring(date_format(fecha, \"%M\"),1,3)as 'mes',date_format(hora,\"%h\:%m\") as 'hora',CONCAT(UCASE(LEFT(date_format(fecha, \"%W\"),1)),LCASE(SUBSTRING(date_format(fecha, \"%W\"),2))) as 'dia_escrito',nombre, lugar,distancias,categoria,url_inscripcion FROM `eventos` where publicado=1 order by eventos.fecha asc LIMIT 8;");
		while($filas=$filassql->fetch_assoc()){
            $eventos[]=$filas;
        }

		return $eventos;
	}
	public function obtenerevento($id){
		$sql = $this->db->query("SELECT * FROM eventos WHERE id =".$id." ");
		$evento[]=$sql->fetch_assoc();
		return $evento;
	}
	
	
	public function guardarevento(){
		$sql = "INSERT INTO eventos VALUES(NULL,'{$this->getNombre()}', '{$this->getFecha()}','{$this->getHora()}','{$this->getLugar()}','{$this->getCategoria()}','{$this->getDistancia()}','{$this->getUrlinscripcion()}',{$this->getOrganizador()},0); ";
		$save = $this->db->query($sql);
		$result = $sql;
		if($save){
			$result = true;
		}
		return $sql; 
	}
		
	public function modificarevento($id){
		$sql = "UPDATE eventos SET  fecha='{$this->getFecha()}',hora='{$this->getHora()}',lugar='{$this->getLugar()}',categoria='{$this->getCategoria()}',distancias='{$this->getDistancia()}',nombre='{$this->getNombre()}',url_inscripcion='{$this->getUrlinscripcion()}',publicado={$this->getPublicado()} WHERE eventos.id=".$id."; ";
		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $sql;
	}
	public function eliminarevento($id){
		$sql = "DELETE FROM eventos WHERE id=".$id."; ";
		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	public function crearcategoria($categoria){
		$sql = "INSERT INTO categorias VALUES(null,'".$categoria."');";
		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $sql;
	}


	public function obtenercategorias(){
		$categorias=array();
		$sql="SELECT categoria from categorias;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $categorias[]=$filas;
        }

		return $categorias;
	}
	public function obtenerlugares(){
		$lugares=array();
		$sql="SELECT lugar from eventos GROUP BY lugar;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $lugares[]=$filas;
        }

		return $lugares;
	}
}
	