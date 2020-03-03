<?php
abstract class Samsung{
    //Khai báo abstract method
    abstract public function giaban();

}
class SamsungMobile extends Samsung{
    public function test()
    {
        echo "<br>test";
    }
    public function giaban()
    {
        // TODO: Implement giaban() method.
        echo "<br> giá bán từ 2tr - 50tr";
    }
}
$ss = new SamsungMobile();
$ss->giaban();