<?php require_once 'views/layout/header.php';?>
<!-- CAMBIAR URL EN LINEA 59 BUSCADOR DE JAVASCRIPT -->


			<section class="carousel mb-4" data-interval="5000" >
		
				<div id="carouselExampleFade"  class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner" >

						<?php foreach($beneficios as $index =>$beneficio):?>
								<?php if($index == 0):?>
								<div class="carousel-item  active">
									<a target="_blank" href="<?=$beneficio['enlace']?>" onclick="sumarpuntos(<?=$beneficio['id']?>)">
								<img src="<?=$beneficio['imagen']?>" class="d-block w-100" alt="<?=$beneficio['titulo']?>">
									</a>	
							</div>
								<?php endif;?>

								<?php if($index != 0):?>
									<div class="carousel-item  ">
									<img src="<?=$beneficio['imagen']?>" class="d-block w-100" alt="<?=$beneficio['titulo']?>">
									</div>
								<?php endif;?>
						<?php endforeach;?>
						</div>

						<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
				</div>
				</section>
				
	<!-- PREMIOS -->			
	<section>	
					 <div class="sorteo text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1 ">
                    <a href="https://guiamaraton.com/app/usuario/formularioregistro"><button type="button" class="btn btn-dark btn-lg"><i class="bi bi-bookmark-check"></i> GANATE UNA INSCRIPCION</button></a>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
        </section>


	
					
														<!-- BUSCADOR -->
														<section class="search-sec" >
																<div class="container">
																	<form  >

																		<div class="row mt-2">
																			<div class="col-lg-12">
																				<div class="row">
																					<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																						<input autocomplete="off" oninput="buscarcalendario()" type="text" id="busqueda"  class="form-control search-slt" placeholder="BUSCAR EVENTO">
																					</div>
																					
																					<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																						<select oninput="buscarcalendario()" class="form-control search-slt" value=""  id="categoria" placeholder="Seleccionar categoria" > 
																						<option value="">TODAS LAS CATEGORIAS</option>
																						<?php foreach($categorias as $categoria):?>
																								<option value="<?=$categoria['categoria']?>"><?=$categoria['categoria']?></option>
																						<?php endforeach;?>
																						</select>						
																						</div>
																					<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																						<select oninput="buscarcalendario()" class="form-control search-slt" value=""  id="lugar" class="form-control search-slt" id="exampleFormControlSelect1" placeholder="Seleccionar lugar">
																							<option value="">TODOS LOS LUGARES</option>
																							<?php foreach($lugares as $lugar):?>
																								<option value="<?=$lugar['lugar']?>"><?=$lugar['lugar']?></option>

																							<?php endforeach;?>
																						</select>
																					</div>
																					<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																						<select onchange="buscarcalendario()"  class="form-control search-slt" id="mes" value="">
																						<option value="" selected>SELECCIONAR MES</option>
																	
																						<option value="01">ENERO</option>                                   
																						<option value="02">FEBRERO</option>
																						<option value="03">MARZO</option>
																						<option value="04">ABRIL</option>
																						<option value="05">MAYO</option>
																						<option value="06">JUNIO</option>
																						<option value="07">JULIO</option>
																						<option value="08">AGOSTO</option>
																						<option value="09">SEPTIEMBRE</option>
																						<option value="10">OCTUBRE</option>
																						<option value="11">NOVIEMBRE</option>
																							<option value="12">DICIEMBRE</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
														</section>

		                    				<!-- RESULTADOS CALENDARIO -->
														<div class="container mt-4" id="ochoeventos">
																					<!-- 8 eventos CALENDARIO -->

								<?php if(isset($eventos)):?>
									<?php foreach($eventos as $carrera) : ?> 

											<div class="row row-striped">
													<div class="col-3 col-sm-4 col-md-2 col-lg-2  text-right">
														<h1 class="display-4"><span class="badge badge-secondary"><?= $carrera['dia_numero'];?> </span></h1>
														<h2 class="text-uppercase"> <?= $carrera['mes'];?></h2>
													</div>
												<div class="col-9 col-sm-8 col-md-10 col-lg-10 ">
														<h3 class="text-uppercase"><strong><?= $carrera['nombre'];?></strong></h3>
														<ul class="list-inline">
															<li class="list-inline-item"><i class="bi bi-calendar-event" aria-hidden="true"></i>   <?= $carrera['dia_escrito'];?></li>
															<li class="list-inline-item"><i class="bi bi-alarm" aria-hidden="true"></i>  <?= $carrera['hora'];?> hs</li>
															<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?= $carrera['lugar'];?></li> <br>
															<li class="list-inline-item"><strong><?= $carrera['categoria'];?></strong></li>
															<li class="list-inline-item"><i class="fa fa-trophy" aria-hidden="true"></i> <?= $carrera['distancias'];?></li>
														<div align="right"><a type="button" target="_blank" class="btn btn-dark" href="<?= $carrera['url_inscripcion'];?>">INSCRIBITE</a></div>
												
													</ul>
													
												</div>
											</div>
									<?php endforeach;?>
								<?php endif;?>
														</div>
														<div class="container mt-1 "  id="datos" >
								


														</div>

													
			
									
	<!-- BOTON VER MAS -->
	
		<div class="row mt-2">
		<div class="col-12 text-center">
			<input type="hidden" value="5" id="cantidad"></input>
			<a onclick="vermas()" class="btn btn-secondary py-3 px-5 my-3" style="border-radius: 7px !important; background-color: #fc8c04 !important;border: #fc8c04 !important;" > + EVENTOS</a>
		</div>
		</div>
		<!-- MODAL HTML -->


		<script type="text/javascript">
															function buscarcalendario(){
															var texto=document.getElementById("busqueda").value;
															var lugar=document.getElementById("lugar").value;
															var categoria=document.getElementById("categoria").value;
															var mes=document.getElementById("mes").value;

															var parametros = {
																"texto": texto,
																"categoria":categoria,
																"lugar":lugar,
																"mes":mes
															};


															$.ajax({
																data:parametros,
																url: 'https://gnuino.com.ar/~mauri/www/guianuevo/buscadorcalendario.php',
																type:'GET',
																success: function(response){
																	$("#ochoeventos").addClass("d-none")
																$("#datos").html(response);
																console.log(response)
																}
															});
															}

															function vermas(){
															var cantidad=document.getElementById("cantidad").value;
															cantidad=Number(cantidad)
															cantidad=cantidad+5
															document.getElementById("cantidad").value=cantidad;
															var parametros = {
																"cantidad": cantidad
															};


															$.ajax({
																data:parametros,
																url: 'https://gnuino.com.ar/~mauri/www/guianuevo/calendariodea5.php',
																type:'GET',
																success: function(response){
																	$("#ochoeventos").addClass("d-none")
																$("#datos").html(response);
																console.log(response)
																}
															});
															}

															function sumarpuntos(id){
															var parametros = {
																"id": id															};


															$.ajax({
																data:parametros,
																url: 'https://gnuino.com.ar/~mauri/www/guianuevo/sumarpuntos.php',
																type:'GET',
																success: function(response){

																}
															});
															}
															
															</script>
															
	
			

 
													