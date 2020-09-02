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
         return "$this->jenisKelamin, $this->jumlahKaki, $this->jenisPemakan";
    }
}

  //membuat class untuk mencoba Object Type
  class getInfoHewan{
    //parameter object khusus untuk class Hewan
    public function getInfo(Hewan $object){
      return "{$object->namaHewan}, {$object->getData()}";
    }

  }
 
//membuat object dari class Hewan menggunakan Constructor
$rusa = new Hewan("Rusa", "Jantan", 4, "Herbivora");

$pencetakInfo = new getInfoHewan();

//mencetak data sekaligus mengolah data object rusa 
echo $pencetakInfo->getInfo($rusa);

unset($rusa);
 
?>
