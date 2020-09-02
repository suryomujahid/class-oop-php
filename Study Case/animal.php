<?php
 
 //membuat class Hewan
class Hewan{

  //membuat attribute untuk Hewan
    public $namaHewan, 
            $jenisKelamin,
            $jumlahKaki,
            $jenisPemakan;
 
  //membuat Constructor untuk Hewan
    public function __construct($namaHewan = "",$jenisKelamin = "",$jumlahKaki = 0,$jenisPemakan = ""){
            $this->namaHewan = $namaHewan;
            $this->jenisKelamin = $jenisKelamin;
            $this->jumlahKaki = $jumlahKaki;
            $this->jenisPemakan = $jenisPemakan;
        }
    
  //membuat Destructor untuk Hewan
    public function __destruct(){
            //otomatis akan melakukan ini ketika object tersebut dihapus
            echo "<br> Object $this->namaHewan telah dihapus";
        }

    public function getData(){
         return "$this->namaHewan, $this->jenisKelamin, $this->jumlahKaki, $this->jenisPemakan";
    }
}
 
//membuat object dari class Hewan menggunakan Constructor
$rusa = new Hewan("Rusa", "Jantan", 4, "Herbivora");
echo "Info hewan pertama: ", $rusa->getData();

//menghapus object rusa untuk melihat Destructor berjalan
unset($rusa);
 
?>
