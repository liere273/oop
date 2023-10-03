<?php
class Animal
{
 // menentukan property dengan private
 private $animalName = "Hiu";
 public function getName(){
 return "Aku adalah " . $this->animalName;
 }
}
// Instansiasi class Animal
$Hiu = new Animal();
// Memanggil method getName dari class Animal
echo $Hiu->getName();