<?php
    include_once 'dbh.inc.php';
	include_once 'info.inc.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$object = new Info;
		echo $object->getAllInfo();
		?>
	</body>
</html>