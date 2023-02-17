<?php

Class Rectangle {

public int $height;
public int $width;
public int $area;
public int $volume;
public string $name;

public function setValue(string $name, int $value){
isNameHeight($name, $value);
isNameWidth($name, $value);
isNameDepth($name, $value);
}

public function isNameHeight( string $name, int $value){
if ($name == 'height'){
$this->height = $value;
}
}

public function isNameWidth( string $name, int $value){
if ($name == 'width'){
$this->height = $value;
}
}

public function isNameDepth( string $name, int $value){
if ($name == 'depth'){
$this->height = $value;
}
}


public function setProperties(int $height, int $width, int $depth){
getArea($height, $width);
getVolume($height, $width, $depth);
}

public function getArea(int $height, int $width){
$this->area = $height * $width;
}

Public function getVolume(int $height, int $width, int $depth){
$this->volume= $height * $width *$depth;
}


}
?>
