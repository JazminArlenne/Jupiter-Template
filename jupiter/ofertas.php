<section class="container-fluid ofertas">
	<div class="o-contenedor">
		<h2 class="">Forma parte de nuestro equipo de trabajo</h2>
		<h5 class="text-center">Estas son las ofertas que tenemos disponibles para ti.</h5>
		<hr class="w-25 hr2">
	</div>

	<?php 
		/*var_dump($_GET['busqueda']);

		if(isset($_GET['busqueda'])){

		}else{
			$oferta = $this->apiController->obtenerTodas();
		}

		foreach ($oferta->data as $value => $key) {*/

		$oferta = $this->apiController->obtenerTodas();
		
		foreach ($oferta->data as $value => $key) {

	?>
<!--
	<div class="input-group w-50 mb-3 of-i">
		<input type="text" class="form-control" placeholder="Buscar vacantes" aria-label="Buscar vacantes" aria-describedby="basic-addon2">
		<div class="input-group-append">
			<button class="btn btn-outline-secondary" type="button">Buscar</button>
		</div>
	</div>
-->

	<div class="container w-100 border rounded pl-4 p-3 of">
		<p class="of-titulo"><a href="oferta/<?php echo $key->oferta_id ?>"><?php echo $key->oferta_titulo ?></a></p>
		<hr>
		<p class="of-sl">Rango Salarial: <b><?php echo $key->oferta_salario ?></b></p> 	
		<p class="of-sl"><i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo $key->oferta_nombrelocalidad.', '.$key->oferta_nombremunicipio.', '.$key->oferta_nombreestado.'.' ?></p>
	</div>
	<br>

	<?php
			
		}
	?>
</section>