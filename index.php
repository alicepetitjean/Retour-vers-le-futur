<?php


$destinationTime=new DateTime('2040-09-01 12:00:00', new DateTimeZone("Europe/Paris"));
echo 'Date de destination :'.'<br>'.$destinationTime->format('M-d-Y A h:i').'<br>';

echo "<br />", "\n";

$presentTime = new DateTime(null, new DateTimeZone("Europe/Paris"));
echo 'Date de départ :'.'<br>'.$presentTime->format('M-d-Y A h:i').'<br>';

echo "<br />", "\n";

$diff = $presentTime->diff($destinationTime);
echo $diff->format('%Y years, %M months, %D days, %H:%i').'<br>';

echo "<br />", "\n";

echo 'Nombre de minutes entre les deux dates :'.'<br>';
$minutes = $diff->format('%a') * 24 * 60;
$minutes += $diff->format('%h') * 60;
$minutes += $diff->format('%i');
echo $minutes . " min.".'<br>';

echo "<br />", "\n";

$nbl = round($minutes / 10000);
echo 'Pour ton voyage de '.$minutes.' min, il te faut donc '.$nbl.' l.';
