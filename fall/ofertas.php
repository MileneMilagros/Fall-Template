<br>
<div class="container ">
	<h2 class="text-center">Forma parte de nuestro equipo de trabajo</h2>
	<h5 class="text-center">Estas son las ofertas que tenemos disponibles para ti.</h5>
	<hr id="linea" >	
</div>

<?php 
	$oferta = $this->apiController->obtenerTodas();

	foreach ($oferta->data as $value => $key) {
?>

<section class="principal">
	

<div class="container ">
	
	<div class="row">
	<div class="col-sm-4 col-md-2 col-lg-3 col-xl-2  logo">
			<img  class="img-responsive" src="https://cdn.jobtify.com.mx/jobtifynew.png" alt="">
	</div>
	<div class="col-sm-4 col-md-8 col-lg-6 col-xl-7  ">

		<p class="puesto"><a href="oferta/<?php echo $key->oferta_id ?>"><?php echo $key->oferta_titulo ?></a></p>
		
		<p class="salario"><b><?php echo $key->oferta_salario ?></b></p>
		<div class="d-flex">
			<div>
			<i class="fa fa-hourglass-end ofertaiconos " aria-hidden="true"></i>
			</div>
			<div>
			<p class="Jornada"><b><?php echo $key->oferta_contrato ?></b></p> 
			</div>
			

		</div>
		

		

		<p><?php echo $key->oferta_funciones ?></p>
		<p><i class="fas fa-map-marker-alt ofertaiconos"></i><?php echo $key->oferta_nombrelocalidad.', '.$key->oferta_nombremunicipio.', '.$key->oferta_nombreestado.'.' ?></p>
	</div>
	<div class="col-sm-4 col-md-2 col-lg-3 col-xl-3 redes ">
		<p class="publicacion m-0">Fecha de publicación : <p> <?php echo $key->oferta_fechapublicacion ?></p></p>
		 

		<p class=" compartir m-0">Compartir</p>
		<a class="enlaceIcono" href="#" target="_blank"><i class="fab fa-facebook-square icon"></i></a> 
		<a class="enlaceIcono" href="#" target="_blank"><i class="fab fa-twitter icon"></i></a>
		<a class="enlaceIcono" href="#" target="_blank"><i class="fab fa-linkedin icon"></i></a>
		<a class="enlaceIcono" href="#" target="_blank"><i class="fab fa-whatsapp icon"></i></a>


		<a href="oferta/<?php echo $key->oferta_id ?>"><button class=" BotonPostular w-75">Postular <i class="fa fa-arrow-circle-right flecha"></i></button></a>
		

	</div>
	</div>
</div>





</section>
<br>

<?php
		
	}
?>


