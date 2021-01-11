<?php

	include 'dbconnect.php';

	if($_POST['action'] == 'add_note'){
		try {
			
			$name = $_POST['data']["name"];
			$description = $_POST['data']["description"];
			///pdo
			$pdo->beginTransaction();
			$prepared_statement = $pdo->prepare("INSERT notes (title,description,user_id,status) VALUES (?,?,?,?)");
			echo json_encode($name);
			echo json_encode($description);

			$prepared_statement->execute(array($name, $description, 1, 1));

				echo $pdo->lastInsertId();

			$pdo->commit();
		} catch (Exception $e) {
			$pdo->rollback();
			throw $e;
		}
	}

?>	