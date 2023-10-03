<?php
class mobil {
    private $kecepatan = 0;

    private function tampilanKecepatan(){
        return "Kecepatan: " . $this->kecepatan . " km/jam";
    }

    public function tambahkecepatan($nilai) {
        $this->kecepatan += $nilai;
        echo $this->tampilanKecepatan();

    }
}

class contoh {
    private function privatemethod(){
        echo "ini adalah private method";
    }

    public function publicMethod(){
        //mengakses private method dari dalam kelas
        $this->privatemethod();

    }

}
$mobil = new Mobil();
$mobil->tambahkecepatan(50); 
echo $mobil->tampilKecepatan();

$contoh = new contoh();
$contoh->publicMethod();

?>