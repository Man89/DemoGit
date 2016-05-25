<?php

class Hinh{
    public $canh = 5;

    public function tinh_chu_vi(){

    }

    public function tinh_dien_tich(){

    }
}

class HinhVuong extends Hinh{

    public function tinh_chu_vi(){
        echo "Chu vi Hinh Vuong </br>";
        echo $this->canh*4;
    }
    public function tinh_dien_tich(){
        echo "Dien tich Hinh Vuong</br>";
        echo $this->canh*$this->canh ;
    }
}

class HinhTron extends Hinh{
    public $r = 3;
    public function tinh_chu_vi(){
        echo "Chu vi Hinh tron </br>";
        echo round($this->r*2*pi(),1);
    }
    public function tinh_dien_tich(){
        echo "Dien Tich Hinh Tron</br>";
        echo round($this->r*$this->r*pi(),1);
    }

}

$obj = new HinhVuong();
$obj->tinh_chu_vi() ;
echo"</br>";
$obj->tinh_dien_tich();
echo"</br>";

$obj = new HinhTron();
$obj->tinh_chu_vi() ;
echo"</br>";
$obj->tinh_dien_tich();




