<?php
class Oto{
    public $ten;
    public static $gia  = 200;
    public function gioiThieu()
    {
        echo "<br>Giới thiệu";
    }
    public static function giaBan()
    {
        echo "<br> HI : ";
        /**
         * chú ý trong phương thức static không được phép
         * sử dụng $this để chỉ chính class
         * mà phải dùng self thay thế
         *
         */
        echo "<br>".self::$gia;
    }
}
Oto::giaBan();
echo Oto::$gia;