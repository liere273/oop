<?php
class Animal
{
     // menentukan property dengan protected
 protected $animalName = "Naga";
 protected function getName(){
 return "Aku adalah " . $this->animalName;
 }
 public function getName(){
 return $this->getName();
 }
}
// Instansiasi class Animal
$Hiu = new Animal();
// Memanggil method getName dari class Animal
echo $Hiu->getName(); 