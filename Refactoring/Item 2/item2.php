<?php


public function getDistanceTravelled($time, $haggis){

$result= 0;
$initialAcceleration - $haggis->primaryForce/ $haggis-mass;
$primaryTime = getPrimaryTime($time, $haggis->delay); //primary time

$result = 0.5 * $initialAcceleration * $primaryTime * $primaryTime;

$secondaryTime = getSecondaryTime($time, $haggis->delay);// secondary time


if($computedTime >0){
    $primaryVelocity = $acceleration * $haggis->delay;
    $secondaryAcceleration = ($haggis->primaryForce + $haggis->secondaryForce);
    $result += $primaryVelocity *$secondaryTime +0.5 * $secondaryAcceleration * $secondaryTime *$secondaryTime;
}

return $result;

}

public function getPrimaryTime($time , $delay){

    return $computedTime = min($time, $haggis->delay);

}

public function getSecondaryTime($time, $delay){

    return $computedTime = ($time, $haggis->delay);
}

public function getPrimaryVelocity($time, $delay){

    return $primaryVelocity = $acceleration * $haggis->delay;
}

public function getSecondaryAcceleration($time, $delay){

    return $secondaryAcceleration = ($haggis->primaryForce + $haggis->secondaryForce);
}









?>