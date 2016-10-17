<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$car= ['toyota','honda','mazda','ford'];
print_r($car);
echo '<hr>';
//ประกาศค่าตัวแปร count_car ให้นับ ค่าอาเรย์ของ $car
$count_car = count ($car);
echo $car[1];
echo '<br>';
//เรียกดูอาเรย์โดยใช้ for เมื่อค่า X = 0 แล้ว X มีค่าน้อยค่า ตัวแปร Count_car (อาเรย์ที่นับมา)ให้+ค่าx เพิ่ม
//จนกว่าค่า X จะเท่ากับตึวแปร count_car
for ($x=0; $x < $count_car; $x++){
    //เรียกแสดงค่า ตัวแปร car ตัวแปร x แสดงแบบขึ้นบรรทัดใหม่
    echo $car[$x].'<br>';
}



?>