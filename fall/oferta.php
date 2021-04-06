
<br>
<?php 
	$resp = $this->apiController->obtenerPorId($oferta_id);
	if($resp->response==true){
 ?>
	
<div class="container  p-3 border rounded oferta-descripcion">
	<h2><?php echo $resp->data->oferta_titulo ?></h2>
	<hr>

	
	<div class="datos  row d-flex col-md-9 text-sm-left m-auto">

	<div class="col-sm-6 col-lg-4 d-flex mb-2">
		<div class="icono-datos">
		<i class="fa fa-calendar ofertasiconos"></i>
		</div>

		<div class="textdatos">
		<h3>Fecha de publicación:</h3>
		<li><?php echo  $resp->data->oferta_fechapublicacion ?></li>
		</div>
	</div>

	<div class="col-sm-6 col-lg-4 d-flex mb-2">
		<div class="icono-datos">
	<i class="fa fa-credit-card ofertasiconos" aria-hidden="true"></i>

		</div>

		<div class="textdatos">
		<h3>Salario:</h3>
		<li><?php echo $resp->data->oferta_salario ?></li>
		</div>
	</div>

	<div class="col-sm-6 col-lg-4 d-flex mb-2">
		
	
		<div class="icono-datos">
		<i class="fa fa-hourglass-end ofertasiconos "></i>
		</div>
		<div class="textdatos">
		<h3>Jornada laboral:</h3>
		<li><?php echo $resp->data->oferta_contrato ?></li>
		</div>

	</div>

	<div class="col-sm-6 col-lg-4 d-flex mb-2">
		
		<div class="icono-datos">
			<i class="fas fa-map-marker-alt ofertasiconos"></i>
		</div>
		<div class="textdatos">
		<h3>Ubicación:</h3>
		<li> <?php echo $resp->data->oferta_nombrelocalidad.', '.$resp->data->oferta_nombremunicipio.', '.$resp->data->oferta_nombreestado.'.'; ?></li>
		</div>
	</div>

	</div>


		
	

	<hr>
	<?php echo html_entity_decode($resp->data->oferta_descripcion) ?>

	
	
	
	
	<br><br>
	<a href="<?php echo __PATH__.'/oferta/postular/'.$resp->data->oferta_id ?>"><button type="button" class="BotonPostular p-2">Postular ahora <i class="fa fa-arrow-circle-right flecha"></i></button></a>
	<br><br>
</div>


<?php 
	}else{
?>

<div class="container w-50 border rounded oferta-descripcion">
	Oferta no válida.

</div>
<br><br>
<?php
	}
 ?>