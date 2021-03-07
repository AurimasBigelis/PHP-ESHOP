
<?php
session_start();
$question2 = $_POST['question2'];
$_SESSION['question2 '] =  $question2;

?>

<p> 3 Klausimas : </p>

<p>   Kaip vertinate mūsų prekes  nuo 0 iki 10?  </p>

<form action='task4.php' method = 'post'>

<input type = 'text' name = 'question3' />

<input type="submit" name="submit" value="Paspausti">

</form>
