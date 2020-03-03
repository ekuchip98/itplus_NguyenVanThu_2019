<?php
class Hinhtron{
    const SO_PI = 3.14;
    public $s;
    public function dientich($r)
    {
        $s = $r*$r*self::SO_PI;
        echo "<br> S của hình tròn là " . $s;
        // gọi đến hằng trong class self::
        echo "<br> số pi là : " . self::SO_PI;
    }

}
//bên ngoài class gọi đến hằng số teenclass::TenConst
echo "<br>Số PI là : ". Hinhtron::SO_PI;
$ht = new Hinhtron();
$ht->dientich(15);