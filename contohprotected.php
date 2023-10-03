<?php
class Hewan {
protected $jenis;

protected function tampilkanjenis(){
    return "jenis hewan" . $this->jenis;
 }

}

class kucing extends hewan {
public function setjenis($jenis){
    $this->jenis = $jenis;

}

public function info(){
    echo $this->tampilkanjenis();

}
    
}

$kucing = new kucing();
$kucing ->setjenis("kucing persia");
$kucing ->info();

?>
