<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
            <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
            <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
            <p><label for="gender">Gender</label> <input type="text" name="gender"></p>
            <p><label for="yearLevel">Year Level</label> <input type="text" name="yearLevel"></p>
            <p><label for="section">Section</label> <input type="text" name="section"></p>
            <p><label for="adviser">Adviser</label> <input type="text" name="adviser"></p>
            <p><label for="religion">Religion</label> <input type="text" name="religion">
                <input type="submit" name="insertNewStudentBtn">
            </p>
        </form>
    </body>
</html>