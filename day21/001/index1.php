<?php
class Oto{
//    Các thuộc tính
    public $nhasanxuat;
    public $model;
    public $ten;
    public $gia;
    public $mausac;
//    Khai báo phương thức

    public function nhapThongTin($nsx,$model,$ten,$gia,$m)
    {
        //Truyền gtri từ tham số method cho các thuộc tính của class
        //để truy nhập đến chính bản thân class này thì dùng từ khóa $this
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
    //Nhập thủ công

}
    $car = new Oto();
    $car->nhapThongTin("KIA","DD11","Modeww","900000000","Đỏ");
    $car->xuatThongTin();
/**
 * truy cập vào các thuộc tính của class từ bên ngoài class
 */
echo "<br> Gọi thuộc tính bên ngoài class";
echo "<br>" . $car->ten;
echo "<br>" . $car->gia;
