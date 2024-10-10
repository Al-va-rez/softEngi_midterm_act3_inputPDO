<?php 
	require_once 'core/dbConfig.php';
	require_once 'core/queryFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Record</title>
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
	<?php $getEngineer = getEngineer($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getEngineer['first_Name']; ?>">
		</p>

		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getEngineer['last_Name']; ?>">
		</p>

		<p>
			<label for="degree">College Degree</label>
			<input type="text" name="degree" value="<?php echo $getEngineer['degree']; ?>">
		</p>

		<p>
			<label for="college">Graduated from</label>
			<input type="text" name="college" value="<?php echo $getEngineer['college']; ?>">
		</p>

		<p>
			<label for="residence">Residence</label>
			<input type="text" name="residence" value="<?php echo $getEngineer['residence']; ?>">
		</p>

		<p>
			<label for="prev_exp">Previous work experience</label>
			<input type="text" name="prev_exp" value="<?php echo $getEngineer['prev_exp']; ?>">
		</p>
		
		<p>
			<label for="contact_Num">Contact Number</label>
			<input type="text" name="contact_Num" value="<?php echo $getEngineer['contact_Num']; ?>">
			<input type="submit" name="edit_Engineer_Btn">
		</p>
	</form>
</body>
</html>

