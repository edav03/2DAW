<?php include_once 'dbconfig.php';?>
<?php include_once 'header.php';?>

<h1>Noticias del Blog</h1>

<table border='1' width=100%>
	<tr>
	<th>Titulo</th>
	<th>Imagenes</th>
	<th>Opciones</th>
	</tr>
	<?php
		$query = 'SELECT * FROM gnr_post';
		$crud->indexview($query);
	?>
</table>

</body>
</html>