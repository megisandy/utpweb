<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>

<body>
	<a href="indexawal.php?page=tentang"><center>Go to Home</center></a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0" align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
			<tr>
				<td></td>
			<tr>
				<td>Jurusan</td><td>
                        <select name="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td></tr>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];

		// include database connection file
		include_once("configcrud.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

		// Show message when user added
		echo "User added successfully. <a href='indexawal.php?page=tentang'>View Users</a>";
	}
	?>
</body>
</html>