
<br>
<?php 
	$resp = $this->apiController->obtenerPorId($oferta_id);
	if($resp->response==true){
 ?>
	
<div class="container border rounded oferta-descripcion">
	<h2><?php echo $resp->data->oferta_titulo ?></h2>
	<p>Salario: <?php echo $resp->data->oferta_salario ?></p>
	<p>Jornada laboral: <?php echo $resp->data->oferta_contrato ?></p>
	<p>Ubicación: <?php echo $resp->data->oferta_nombrelocalidad.', '.$resp->data->oferta_nombremunicipio.', '.$resp->data->oferta_nombreestado.'.'; ?></p>
	<hr>
	<div class="oferta-d">
		<?php echo html_entity_decode($resp->data->oferta_descripcion) ?>
		
	</div>
	
	
	<?php if( $resp->data->oferta_mapa != NULL){ ?>
		<br><h5>Mapa:</h5>
		<div class="map-responsive">
			<?php echo $resp->data->oferta_mapa ?>
		</div>
	<?php
	    }
	?>
	
	
	
	<br><br>
	<a href="<?php echo __PATH__.'/oferta/postular/'.$resp->data->oferta_id ?>"><button type="button" class="btn btn-outline-dark">Postular ahora</button></a>
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