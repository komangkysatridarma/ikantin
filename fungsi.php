<?php 
class Produk {
    public $bakwan;
    public $bakso;
    public $jmlBakwan;
    public $jmlBakso;
    public $hargaBakwan;
    public $hargaBakso;
    public $totalSeluruh;
    public $totalHargaBakwan;
    public $totalHargaBakso;

    function __construct() {
        $this->hargaBakwan = 2000;
        $this->hargaBakso = 10000;
    }
}

class Jumlah extends Produk {
    public function getJumlah($jmlBakwan, $jmlBakso) {
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;
    }

    public function setHarga() {
        $this->totalHargaBakwan = $this->hargaBakwan * $this->jmlBakwan;
        $this->totalHargaBakso = $this->hargaBakso * $this->jmlBakso;
        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;
    }

    public function cetakStruk() {
        echo "******* <b>$ iKantin Wikrama $</b> *******";
        echo "<br><br>";
        echo "Bakwan : $this->jmlBakwan x Rp. $this->hargaBakwan : <b>$this->totalHargaBakwan</b>";
        echo "<br>";
        echo "Bakso : $this->jmlBakso x Rp. $this->hargaBakso : <b>$this->totalHargaBakso</b>";
        echo "<br><br>";
        echo "Total bayar : Rp. <b>$this->totalSeluruh</b>";
        echo "<br><br>";
        echo "****************************************";
    }
}