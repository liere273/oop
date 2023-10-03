<?php
class kendaraan {
    public $nama;

    public function start() {
            echo "Kendaraan dimulai.";
        
    }

}

$mobil = new kendaraan();
$mobil->nama = "Mobil";
echo $mobil->nama; // output: mobil
$mobil->start(); // output : kendaraan mobil
?>