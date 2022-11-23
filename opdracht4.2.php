<?php

date_default_timezone_set("Europe/Amsterdam");

$error = 500;

switch($error) {
    case 400  :  echo "Bad request";   break;
    case 403  :  echo "Forbidden";     break; 
    case 404  :  echo "Not found";     break;
    case 500  :  echo "Interal server error";  break;
    case 503  :  echo "Bad gateway";   break;

    default   :  echo "Unknown code";  break;
}
?>