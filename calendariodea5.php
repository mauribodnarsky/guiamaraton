<?php
include 'config/db.php';
include 'models/evento.php';
$respuesta="";
$objetoevento = new Evento();
      
$eventos= $objetoevento->eventosdeacinco($_GET['cantidad']);

    if(isset($eventos)){
          foreach($eventos as $carrera){

            $respuesta=$respuesta."<div class=\"row row-striped\">
                                      <div class=\"col-3 col-sm-4 col-md-2  text-right\">
                                        <h1 class=\"display-4\"><span class=\"badge badge-secondary\">".$carrera['dia_numero']."</span></h1>
                                        <h2 class=\"text-uppercase\">".$carrera['mes']."</h2>
                                      </div>
                                    <div class=\"col-9 col-sm-8 col-md-10 \">
                                        <h3 class=\"text-uppercase\"><strong>".$carrera['nombre']."</strong></h3>
                                        <ul class=\"list-inline\">
                                          <li class=\"list-inline-item\"><i class=\"bi bi-calendar-event\" aria-hidden=\"true\"></i> ".$carrera['dia_escrito']."</li>
                                          <li class=\"list-inline-item\"><i class=\"bi bi-alarm\" aria-hidden=\"true\"></i> ".$carrera['hora']." hs</li>
                                          <li class=\"list-inline-item\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> ".$carrera['lugar']."</li> <br>
                                          <li class=\"list-inline-item\"><strong>".$carrera['categoria']."</strong></li>
                                          <li class=\"list-inline-item\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> ".$carrera['distancias']."</li>
                                        <div align=\"right\"><a type=\"button\" target=\"_blank\" class=\"btn btn-dark\" href=".$carrera['url_inscripcion']."\">INSCRIBITE</a></div>
                                    
                                      </ul>
                                      
                                    </div>
                                  </div>";
           } ;

          }else{
            $respuesta="<div class=\"row\">
            <div class=\"col-8 offset-2 text-center\">
              <h1 style=\"color:red; margin-top: 5%;padding:4%;\">Uups! No se encontraron resultados</h1>
            </div>
          </div>";


          }
          echo $respuesta;

        
         ?>
