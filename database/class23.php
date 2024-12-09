<?php
    include('../config.db.php'); //นำไฟล์ config.db.php มาใช้
    $tabel = "CREATE TABLE members(
    id int(6) AUTO_INCREMENT COMMENT 'เลขที่',
    id_stu int(6) COMMENT 'รหัสนักเรียน',
    name varchar(100) COMMENT 'ชื่อ-นามสกุล',
    nname varchar(100) COMMENT 'ชื่อเล่น',
    age varchar(100) COMMENT 'อายุ',
    phone varchar(100) COMMENT 'เบอร์โทรศัพท์',
    address varchar(255) COMMENT 'ที่อยู่',
    status varchar(30) COMMENT 'สถานะภาพ',
    PRIMARY KEY (id)
    )";
    if($conn ->query($tabel ) === TRUE) {
        echo "เสร็จสิ้น";
    }else{
        echo "เกิดข้อผิดพลาด" .$conn ->error;
    };

    $conn ->close();//ปิดการเชื่อต่อฐานข้อมูล

?>