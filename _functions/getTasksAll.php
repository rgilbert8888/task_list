
<?php


// require_once("config.php");
include("db.php");

function getTasksAll() {
	try {

		$PDO = db_connect();
		$statement = $PDO->prepare('select * from tblTasks');
		$statement->execute();
		$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $tasks;
		}

	catch(PDOException $e) {
	    echo $e->getMessage();
	}
}