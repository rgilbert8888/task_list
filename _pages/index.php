<?php
// include_once('../_functions/config.php');
include_once("../_functions/getTasksAll.php");


$tasks = getTasksAll();
// var_dump($tasks);
?>


<!DOCTYPE html>
<html>
<head>
	<title>TASKS</title>
	<link rel="stylesheet" type="text/css" href="../_styles/styls.css">
</head>
<body> 
<?php include_once(ROOT_PATH . "_includes/header.php"); ?>
















<?php include_once(ROOT_PATH . "_includes/footer.php"); ?>
</body>
</html>