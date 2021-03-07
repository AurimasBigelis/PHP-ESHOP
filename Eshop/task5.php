<?php
session_start();
$question4 = $_POST['question4'];
$_SESSION['question4'] =  $question4;
 ?>

<p> 5 Klausimas : </p>

<p> Kaip vertinate mūsų pristatymą nuo 0 iki 10? </p>

<form action='result.php' method = 'post'>

<input type = 'text' name = 'question5' />

<input type="submit" name="submit" value="Paspausti">

</form>
