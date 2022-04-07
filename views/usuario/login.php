<?php require_once 'views/layout/header.php';?>


<div class="container-fluid" >
 <div class="limiter" >
		<div class="container-login" >
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<form class="login100-form validate-form flex-sb flex-w"  action="<?=base_url?>usuario/login" method="POST">
			<span class="login100-form-title p-b-53  ">
                        <div class="row">
                            <div class="col-4 ">

                            </div>
                            <div class="col-4 text-center" id="amarillo">
                                <img src="<?=base_url?>assets/img/avatars.png" class="w-100">

                            </div>
                            <div class="col-4 " id="verde">

                            </div>
                        </div>
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							EMAIL
						</span>
					</div>
					<div class="wrap-input100 validate-input"  >
						<input required class="input100 form-control" type="email"  name="email" placeholder="TU EMAIL" />
						
					</div>
					<div class="mt-2 mb-1 p-t-13 p-b-9">
						<span class="txt1">
							DNI
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input required class="input100 form-control" type="text"  pattern="[0-9]{8}" placeholder="TU DNI SIN PUNTOS (8 DIGITOS)" name="dni"  />
                        
					</div> 
					<?php if($error==true):?>
					<span class="form_error ml-1 text-danger" >
						<?php echo $mensaje ;?>
					</span>	
					<?php endif;?>
					<div class="mt-2 container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" >
							INGRESAR
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							No tienes una cuenta?
						</span>

						<a href="<?=base_url?>usuario/formularioregistro" class="text-dark">
							REGISTRARME
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>