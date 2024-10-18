<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
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
	<?php $getEmployeeByID = getEmployeeByID($pdo, $_GET['employee_id']); ?>
	<form action="core/handleForms.php" method="POST">
    <input type="hidden" name="employee_id" value="<?php echo $_GET['employee_id']; ?>">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getEmployeeByID['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getEmployeeByID['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getEmployeeByID['gender']; ?>">
		</p>
		<p>
			<label for="birthday">Birthday</label>
			<input type="text" name="birthday" value="<?php echo $getEmployeeByID['birthday']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getEmployeeByID['position']; ?>">
		</p>
		<p>
			<label for="status">Status</label>
			<input type="text" name="status" value="<?php echo $getEmployeeByID['status']; ?>"></p>
		<p>
			<label for="department">Department</label>
			<input type="text" name="department" value="<?php echo $getEmployeeByID['department']; ?>">
			<input type="submit" name="editEmployeeBtn">
		</p>
	</form>
</body>
</html>
