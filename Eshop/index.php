<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
        <title>PARDĖ</title>
    </head>
    <body>
			<div class="header">
		<h2>Login</h2>
	</div>
        <form method="POST">
					<div class="input-group">
						<label>Username</label>
						<input type="text" name="Username" >
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password">
					</div>
            <input type="submit" name="login" value="login"><br>
						<p>
							Not yet a member? <a href="register.php">Sign up</a>
						</p>

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

      $username=$_POST['Username'];
      $pwd=$_POST['password'];

      if(!empty($username) && !empty($pwd))
      {
          //read from the database

          $query ="select * from vartotojai where username='$username' limit 1";
          $result= mysqli_query($conn, $query);

          if($result)
          {
               if($result && mysqli_num_rows($result)> 0)
     {
              $user_data=mysqli_fetch_assoc($result);

                  if($user_data['Slaptazodis']===$pwd)
              {
                      $_SESSION['Username']= $user_data['Username'];
                      header("Location: shop.php");
                          die;

          }
          }
          }

          }else
          {
              echo "<br>Please enter correct login details";
          }
  }


?>
        </form>
    </div>
    </body>
</html>
