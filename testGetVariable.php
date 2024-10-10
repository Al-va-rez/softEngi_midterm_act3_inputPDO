<?php  

	if (isset($_GET['firstName'])) {
		echo "<h2>Engineer Name: " . $_GET['firstName']. "</h2>";
	}

	if (isset($_GET['prev_exp'])) {
		echo "<h2>Previous work experience: " . $_GET['prev_exp'] . "</h2>";
	}
?>