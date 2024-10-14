<?php 
	require_once 'core/dbConfig.php';
	require_once 'core/queryFunctions.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PDO with Inputs</title>
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
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
            }
		</style>
	</head>
    <body>
        <h3>Welcome to the Student Management System. Input your details here to register</h3>
        <form action="core/handleForms.php" method="POST">
            <p>
				<label for="first_Name">First Name</label>
				<input type="text" name="first_Name">
			</p>

            <p>
				<label for="last_Name">Last Name</label>
				<input type="text" name="last_Name">
			</p>

			<p>
				<label for="degree">College Degree</label>
				<input type="text" name="degree">
			</p>

            <p>
				<label for="college">Graduated from</label>
				<input type="text" name="college">
			</p>

            <p>
				<label for="residence">Residence</label>
				<input type="text" name="residence">
			</p>

            <p>
				<label for="prev_exp">Previous work experience</label>
				<input type="text" name="prev_exp">
			</p>
			
            <p>
				<label for="contact_Num">Contact Number</label>
				<input type="text" name="contact_Num">
                
            </p>

			<p>
				<input type="submit" name="add_Applicant_Btn">
			</p>
        </form>

		<table style="width:50%; margin-top: 50px;">
			<tr>
				<th>Applicant ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>College Degree</th>
				<th>Graduated from</th>
				<th>Residence</th>
				<th>Previous work experience</th>
				<th>Contact Number</th>
				<th>Action</th>
			</tr>

			<?php $see_All_Engineers = fetch_All_Engineers($pdo); ?>
			<?php foreach ($see_All_Engineers as $row) { ?>
			<tr>
				<td><?= $row['applicant_id']; ?></td>
				<td><?= $row['first_Name']; ?></td>
				<td><?= $row['last_Name']; ?></td>
				<td><?= $row['degree']; ?></td>
				<td><?= $row['college']; ?></td>
				<td><?= $row['residence']; ?></td>
				<td><?= $row['prev_exp']; ?></td>
				<td><?= $row['contact_Num']; ?></td>
				<td>
					<a href="edit_Record.php? applicant_id=<?= $row['applicant_id'];?>">Edit</a>
					<a href="delete_Record.php? applicant_id=<?= $row['applicant_id'];?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>

		<a href="testGetVariable.php? first_Name=Viron & prev_exp=Python">Test Get Superglobal</a>
    </body>
</html>