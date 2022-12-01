<h1>sparen voor iphone</h1>
<form action="" method="post">
<input type="text" name="geld" placeholder="hoeveel spaargeld heb je?">
<input type="submit" value="verzenden">
</form>



<?php

if(isset($_POST["geld"]))
{
    $spaargeld = $_POST["geld"];
    $kosten = 1000;
    $over = $spaargeld - $kosten;
    $tekort = $kosten - $spaargeld;

    if($spaargeld <750)
    {
        $uitkomst = $kosten - $spaargeld;
        echo "Je spaargeld is nu : &euro;$spaargeld, je komt dus &eruo; $tekort te kort!
        je kan beter nog even een baantje gaan zoeken";
    }
    elseif($spaargeld > 750 && $spaargeld < 1000){
    echo "Je spaargeld is nu &euro; $spaargeld, je hebt bijna genoeg,
    maar er is nog &euro; $tekort te weinig";
}
else{
    echo "Je spaargeld is nu: &euro;$spaargeld, -hiermee
    is het mogelijk om een iphone te kopen!
    je hebt nog &euro; $over,- over voor bijv. een hoesje.";
}} 
?>
