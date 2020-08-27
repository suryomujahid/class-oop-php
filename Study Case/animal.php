<?php
 
 //membuat class Hewan
class Hewan{

  //membuat attribute untuk Hewan
    public $namaHewan, 
            $jenisKelamin,
            $jumlahKaki,
            $jenisPemakan;
 
  //membuat method untuk Hewan
    public function __construct($namaHewan = "",$jenisKelamin = "",$jumlahKaki = 0,$jenisPemakan = ""){
            $this->namaHewan = $namaHewan;
            $this->jenisKelamin = $jenisKelamin;
            $this->jumlahKaki = $jumlahKaki;
            $this->jenisPemakan = $jenisPemakan;
        }

    public function getData(){
         return "$this->namaHewan, $this->jenisKelamin, $this->jumlahKaki, $this->jenisPemakan";
    }
}
 
//membuat object dari class Hewan
$rusa = new Hewan("Rusa", "Jantan", 4, "Herbivora");
echo "Info hewan pertama: ", $rusa->getData();
 
?>
