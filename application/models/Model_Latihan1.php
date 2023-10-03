<?php
class Model_Latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    //method penjumlahan
    public function jumlah($nill1 = null, $nill2 = null)
    {
        $this->nilai1 = $nill1;
        $this->nilai2 = $nill2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}