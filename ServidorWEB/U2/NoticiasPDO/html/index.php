<?php
    include_once 'dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<table border='1'>
	<tr>
	<th>Titulo</th>
	<th>Imagenes</th>
	<th>Opciones</th>
	</tr>
	<?php
		$query = 'SELECT * FROM gnr_post';
		$newquery = $crud->paging($query);
		$crud->dataview($newquery);
	?>
</table>

</body>
</html>