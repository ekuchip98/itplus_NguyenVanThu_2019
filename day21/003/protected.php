<?php
class Dienthoaicodien{
    public $ten;
    public $mausac = "đen";
    protected function goiDien()
    {
        echo "<br>Gọi điện";
    }
    protected function ngheDien()
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
$nokia110i = new Dienthoaicodien();
echo "<br> Màu sắc :". $nokia110i->mausac;
echo "<br>".$nokia110i->goiDien();

