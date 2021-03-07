<?php
session_start();
$question1 = $_POST['question1'];
$_SESSION['question1'] =  $question1;
?>

<p> 2 Klausimas : </p>

<p>  Kaip vertinate mūsų shopą nuo 0 iki 10?  </p>

<form action='task3.php' method = 'post'>

<input type = 'text' name = 'question2' />

<input type="submit" name="submit" value="Paspausti">

</form>
