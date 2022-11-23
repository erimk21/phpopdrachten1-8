<?php

$uur = date("H");

if($uur > 6 & $uur <12)
{
    echo "Het is ochtend";
}
elseif($uur > 11 & $uur <18)
{
    echo "Het is middag";
}
elseif($uur > 19 & $uur <24)
{
    echo "Het is avond";
}
else
{
    echo "het is nacht";
}

?>