<?php
class Dienthoaicodien{
    public $ten;
    public $mausac = "đen";
    public function goiDien()
    {
        echo "<br>Gọi điện";
    }
    public function ngheDien()
    {
        echo "<br>Nghe điện";
    }
}
class Smartphone extends Dienthoaicodien{
    public function guiEmail(){
        echo "<br>Gửi Email";
    }
    public function choiGame()
    {
        echo "<br>Chơi game";
    }

}
$samsung = new Smartphone();
echo "<br> Màu sắc :". $samsung->mausac;
echo "<br>".$samsung->goiDien();
echo "<br>".$samsung->ngheDien();
echo "<br>".$samsung->guiEmail();
