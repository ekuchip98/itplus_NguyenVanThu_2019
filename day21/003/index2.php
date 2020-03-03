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
class Smartphone {
    public function guiEmail(){
        echo "<br>Gửi Email";
    }
    public function choiGame()
    {
        echo "<br>Chơi game";
    }

}
$nokia110i = new Smartphone();
echo "<br> Màu sắc :". $nokia110i->mausac;
echo "<br>".$nokia110i->goiDien();
echo "<br>".$nokia110i->ngheDien();
echo "<br>".$nokia110i->guiEmail();
