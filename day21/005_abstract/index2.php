<?php
abstract class Samsung{
    //Khai báo abstract method
    abstract public function giaban();

}
class SamsungMobile{
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
class SamsungTab{
    public function test()
    {
        echo "<br>test";
    }
    public function giaban()
    {
        // TODO: Implement giaban() method.
        echo "<br> giá bán từ 2tr - 20tr";
    }
}
$ss = new SamsungMobile();
$ss->giaban();
$s = new SamsungTab();
$s->giaban();