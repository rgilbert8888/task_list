<?php
// include_once('../_functions/config.php');
include_once("../_functions/getTasksAll.php");


$tasks = getTasksAll();

?>


<!DOCTYPE html>
<html>
<head>
	<title>TASKS</title>
	<link rel="stylesheet" type="text/css" href="../_styles/main.css">
</head>
<body> 
<?php include_once(ROOT_PATH . "_includes/header.php"); ?>


<table class="table">
	<thead>
		<tr>
			<th>Done</th>
			<th>Task</th>
			<th>Date Due</th>
			<th>Random Pic</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tasks as $task) { ?>
		<tr>
			<td><?php echo $task['blnComplete'];?></td>
			<td><?php echo $task['task_name'];?></td>
			<td><?php echo $task['due_date'];?></td>
			<td><img src="<?php echo $task['image'];?>" /></td>
		</tr>
		<?php } ?>
	</tbody>
</table>


<?php include_once(ROOT_PATH . "_includes/footer.php"); ?>

<script src="../js/app.js"></script>
</body>
</html>