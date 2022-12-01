<h1>
    leeftijd voor scooterrijbewijs en om te stemmen
</h1>
<form action="" method="post">
<input type="text" name="leeftijd" placeholder="wat is je leeftijd">
stempas ontvangen
<input type="radio" name="stempas" value="true">ja (true)
<input type="radio" name="stempas" value="false">nee (false)
<input type="submit" value="verzenden">
</form>



<?php

if(isset($_POST['leeftijd']))
{
$leeftijd = $_POST['leeftijd'];
$stempas = $_POST;
$examen = 16;

if($leeftijd >= $examen ){
    echo "Je mag een praktijk examen doen voor je scooterrijbewijs!.</br>";
}
else{
    echo "Je mag nog geen praktijk examen voor scooterrijbewijs doen!.</br>";
}

if($stempas=='true' && $leeftijd >= 18) {
    echo "je mag nog niet stemmen";
}
else {
    echo "je mag stemmen";
}
}

?>
