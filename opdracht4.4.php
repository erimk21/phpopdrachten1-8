<?php

$laptop = 1000;
$software = 100;

if($laptop > 150) 
{
  $som = $laptop * 1.19 ;
  echo $som ;
}
elseif($software < 55)
{
  $som = $software * 1.11 ;
  echo $som ;
}
else{
  $som = $software * 1.16;
  echo $som ;
}
?>