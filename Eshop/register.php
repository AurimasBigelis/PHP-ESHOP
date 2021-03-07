
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <body>
			  <form method="POST">
			<h2>Register</h2>
		<div class="input-group">
			<label>Vardas</label>
		<input type="text" name="Vardas" placeholder="Ivesk sava Vardą" ><br>
		</div>
		<div class="input-group">
			<label>Pavarde</label>
	    <input type="text" name="Pavarde" placeholder="Įvesk sava Pavardę" ><br>
		</div>
		<div class="input-group">
			<label>Username</label>
    <input type="text" name="Username" placeholder="Sugalvok Username" ><br>
		</div>
		<div class="input-group">
			<label>Password</label>
  <input type="password" name="password" placeholder="Sugalvok Slaptazodį" ><br>
	<input type="submit" name="submit" value="Submit"><br>
		</div>
		</form>
		<?php
session_start();

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "shop";



if(!$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){


{

        die("failed to connect!");
    }

}
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{

		//something that was posted

		$name=$_POST['Vardas'];
		$surname=$_POST['Pavarde'];
		$username=$_POST['Username'];
		$pwd=$_POST['password'];

		if(!empty($name) && !empty($surname) && !empty($username) && !empty($pwd))
		{
				//save to database

				$query ="insert into vartotojai (Vardas,Pavarde,username,Slaptazodis) values ('$name','$surname','$username','$pwd')";
				mysqli_query($conn, $query);

				header("Location: index.php");
				die;



				}else
				{
						echo "Please fill the form properly";
				}
}

?>


</div>
</body>
</html>
