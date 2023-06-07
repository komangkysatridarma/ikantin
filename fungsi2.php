<?php
class Produk {
    public $dimsum;
    public $kulkul;
    public $ager;
    public $jmlDimsum;
    public $jmlKulkul;
    public $jmlAger;
    public $hargaDimsum;
    public $hargaKulkul;
    public $hargaAger;
    public $totalSeluruh;
    public $totalHargaDimsum;
    public $totalHargaKulkul;
    public $totalHargaAger;

    public function __construct() {
        $this->hargaDimsum = 3000;
        $this->hargaKulkul = 2000;
        $this->hargaAger = 1000;
    }
}

class jumlah extends Produk {
    public function getJumlah($jmlDimsum, $jmlKulkul, $jmlAger){
        $this->jmlDimsum = $jmlDimsum;
        $this->jmlKulkul = $jmlKulkul;
        $this->jmlAger = $jmlAger;
    }

    public function setHarga() {
        $this->totalHargaDimsum = $this->hargaDimsum * $this->jmlDimsum;
        $this->totalHargaKulkul = $this->hargaKulkul * $this->jmlKulkul;
        $this->totalHargaAger = $this->hargaAger * $this->jmlAger;
        $this->totalSeluruh = $this->totalHargaDimsum + $this->totalHargaKulkul + $this->totalHargaAger;
    }

    public function cetakStruk() {
        echo "******* <b>iKantin Wikrama</b> *******";
        echo "<br>";
        echo "Dimsum : $this->jmlDimsum x Rp. $this->hargaDimsum : <b>$this->totalHargaDimsum</b>";
        echo "<br>";
        echo "Kulkul : $this->jmlKulkul x Rp. $this->hargaKulkul : <b>$this->totalHargaKulkul</b>";
        echo "<br>";
        echo "Ager : $this->jmlAger x Rp. $this->hargaAger : <b>$this->totalHargaAger</b>";
        echo "<br>";
        echo "Total Bayar : Rp. <b>$this->totalSeluruh</b>";
        echo "<br>";
        echo "****************************************";
    }
}
?>