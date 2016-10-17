<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        // การประกาศตัวแปรใน PHP ไม่จำเป็นต้อง มีโค๊ดกำกับว่า เป็นค่าอะไร PHP จะตรวจอัตโนมัติว่าค่าที่ใส่เป็นอะไร
        //ประกาศตัวแปร เป็น ข้อความ String
        $a = 'ทดสอบ';
        //ประกาศตัวแปรเป็น integer
        $b=30;
        // ประกาศตัวแปรเป็น float ตัวเลขมีจุดทศนิยม
        $c = 388.56;
        //ประกาศตัวแปรเป็น boolean
        $d=TRUE;
        //ประกาศตัวแปรแบบ array
        $arr=array('apple','papaya','orange');
        
        // เรียกตัวแปรมาแสดง
        echo $a;
        echo '<hr>';
        echo $b;
        echo '<hr>';
        echo $c;
        echo '<hr>';
        echo $d;
        echo '<hr>';
        print_r($arr);
        echo $arr[1];
        echo '<br>';
        echo 'Asahichirokano';
        
        ?>
    </body>
</html>
