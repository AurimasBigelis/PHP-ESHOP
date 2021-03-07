<?php
session_start();
$question3 = $_POST['question3'];
$_SESSION['question3'] =  $question3;
 ?>

<p> 4 Klausimas : </p>

<p> Kaip vertinate mūsų aptarnavimą nuo 0 iki 10? </p>

<form action='task5.php' method = 'post'>

<input type = 'text' name = 'question4' />

<input type="submit" name="submit" value="Paspausti">

</form>
