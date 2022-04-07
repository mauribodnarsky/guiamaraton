<?php
include 'config/db.php';
include 'models/evento.php';
$respuesta="";
$objetoevento = new Evento();
      
$objetoevento=new Evento();
$id=$_GET['id'];
$sumarpuntos=$objetoevento->sumarpuntosbeneficio($id);
$beneficios= $objetoevento->obtenerbeneficios();
