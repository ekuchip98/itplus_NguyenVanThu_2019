<?php
class Oto{
//    Các thuộc tính
    public $nhasanxuat;
    public $model;
    public $ten;
    public $gia;
    public $mausac;
//    Khai báo phương thức

    public function __construct($nsx,$model,$ten,$gia,$m)
    {
        //Truyền gtri từ tham số method cho các thuộc tính của class
        //để truy nhập đến chính bản thân class này thì dùng từ khóa $this
        echo "<br>".__METHOD__;
        $this->nhasanxuat = $nsx;
        $this->model = $model;
        $this->ten = $ten;
        $this->gia = $gia;
        $this->mausac = $m;
    }
    //Xuất thông tin xe
    public function xuatThongTin()
    {
        // in ra hằng số __METHOD__ để biết được mình đang gọi vào method nào
        echo "<br>" . __METHOD__;
        echo "<br>Thông tin xe :";
        echo "<br>Nhà sản xuất : ". $this->nhasanxuat;
        echo "<br>Model : ". $this->model;
        echo "<br>Tên xe : ". $this->ten;
        echo "<br>Giá xe : ". $this->gia;
        echo "<br>Màu sắc : ". $this->mausac;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br> Hàm hủy được tự động gọi";
        echo "<br>" . __METHOD__;

    }

}
//Nhập thủ công
$car = new Oto("KIA","DD11","Modeww","900000000","Đỏ");
echo "<br>Sau khi khởi tạo contruct";
$car->xuatThongTin();
/**
 * truy cập vào các thuộc tính của class từ bên ngoài class
 */
echo "<br> ===Gọi thuộc tính bên ngoài class===";
echo "<br>" . $car->ten;
echo "<br>" . $car->gia;
echo "<br>UNSET object";
unset($car);
echo "<br> line1 ".__LINE__;
echo "<br> line2 ".__LINE__;
echo "<br> line3 ".__LINE__;
echo "<br> Scrtip PHP kết thúc";