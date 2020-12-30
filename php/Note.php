<?php

	if($_POST['action'] == 'add_note'){
		echo json_encode($_POST['data']);
	}

?>	