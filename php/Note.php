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
	}else if($_POST['action'] == 'get_notes'){
		$user_id = $_POST['user_id'];
		try {
			$sql = "SELECT * FROM  notes WHERE user_id = $user_id AND status = 1";
			$stm = $pdo->query($sql);
			$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($rows);
		} catch (Exception $e) {

			throw $e;
		}

	}else if($_POST['action'] == 'edit_note'){
		
		try {
			
			$pdo->beginTransaction();
			$prepared_statement = $pdo->prepare("UPDATE notes SET title = ? , description = ? , updated_at = ? WHERE id = ?");

			$prepared_statement->execute(array($_POST['data']["title"],$_POST['data']["description"],date("Y-m-d 
				H:i:s"),$_POST['data']["id"]));

			$pdo->commit();

			echo "edited!";
		} catch (Exception $e) {
			$pdo->rollback();
			throw $e;
		}

	}else if($_POST['action'] == 'edit_note'){

	}

?>	