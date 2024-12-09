<?php
include('config.db.php'); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาใช้งาน

$dataJSON = json_decode(file_get_contents('php://input'), true);
$message = [];

// ประกาศตัวแปร สำหรับเพิ่มข้อมูล
$id_stu = $dataJSON['id_stu'];
$name = $dataJSON['name'];
$nname = $dataJSON['nname'];
$age = $dataJSON['age'];
$phone = $dataJSON['phone'];
$address = $dataJSON['address'];
$status = $dataJSON['status'];

// เขียนคำสั่งในการเพิ่มข้อมูล
$sql = "INSERT INTO `members` (`id_stu`, `name`, `nname`, `age`, `phone`, `address`, `status`) VALUES ('$id_stu', '$name', '$nname', '$age', '$phone', '$address', '$status');";

// รันคำสั่ง
$qr_insert = mysqli_query($conn, $sql);

if ($qr_insert) {
    // เพิ่มข้อมูลได้
    http_response_code(201);
    $message['status'] = "เพิ่มข้อมูลสำเร็จ";
} else {
    // เพิ่มข้อมูลไม่ได้
    http_response_code(422);
    $message['status'] = "เพิ่มข้อมูลไม่สำเร็จ";
}
// ส่งข้อมูลการดำเนินการกลับไป
echo json_encode($message);
echo mysqli_error($conn);

?>