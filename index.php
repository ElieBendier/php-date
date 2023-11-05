<?php


$presentTime = new DateTime();
echo $presentTime->format("M d Y A h:i");

echo nl2br("\n");

$destinationTime = new DateTime("Nov 4 2024 5:16 PM");
echo $destinationTime->format("M d Y A h:i");

echo nl2br("\n");

$interval = $presentTime->diff($destinationTime);

echo $interval->format("%y années %m mois %d jours %h heures %i minutes %s secondes");
echo nl2br("\n");

$intervalInMinutes = ($interval->y*365*30*24*60)+($interval->m*30*24*60)+($interval->d*24*60)+($interval->h*60)+($interval->i);
echo $intervalInMinutes . " minutes";
// echo $interval->format("%I minutes");
echo nl2br("\n");

$litres = 0;
for($i=0; $i<=$intervalInMinutes; $i=$i+10000){
    $litres=$litres+1;
}
echo $litres . " litres";