<form action="" method="post">
<input type="number" name="getal" placeholder="vul een getal in...">
<input type="submit" value="verzenden">
</form>

<?php

if(isset($_POST['getal']))
{
$getal = $_POST['getal'];
$modulo = $getal % 2;


if($modulo == 1){
  echo "het getal $getal is oneven";
}
elseif($modulo == 0){
    echo "Het getal $getal is even.";
}
}

?>