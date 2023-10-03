<?php
class Animal
{
 public $animalName;
 public $animalSpecies;
 function getName(){
 return "Aku adalah Singa! <br />";
 }
}
// Instansiasi class Animal
$Lion = new Animal();
// Memanggil method getName dari class Animal
echo $Lion->getName();