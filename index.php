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
			border:1px solid black;
			}
		</style>
	</head>
    <body>
        <h3>Welcome to the Student Management System. Input your details here to register</h3>
        <form action="core/handleForms.php" method="POST">
            <p>
				<label for="firstName">First Name</label>
				<input type="text" name="firstName">
			</p>

            <p>
				<label for="lastName">Last Name</label>
				<input type="text" name="lastName">
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
                <input type="submit" name="add_Applicant_Btn">
            </p>
        </form>
    </body>
</html>