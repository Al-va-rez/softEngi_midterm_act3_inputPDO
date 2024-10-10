<?php 
	require_once 'core/dbConfig.php';
	require_once 'core/queryFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Record</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getEngineer = getEngineer($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getEngineer['first_Name']; ?></p>
			<p>Last Name: <?php echo $getEngineer['last_Name']; ?></p>
			<p>College Degree: <?php echo $getEngineer['degree']; ?></p>
			<p>Graduated from: <?php echo $getEngineer['college']; ?></p>
			<p>Residence: <?php echo $getEngineer['residence']; ?></p>
			<p>Previous work experience: <?php echo $getEngineer['prev_exp']; ?></p>
			<p>Contact Number: <?php echo $getEngineer['contact_Num']; ?></p>

			<input type="submit" name="del_Engineer_Btn" value="Delete">
		</div>
	</form>
</body>
</html>