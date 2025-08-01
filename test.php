<?php
// ฟังก์ชันทักทายชื่อที่ระบุ
function greet($name) {
    return "สวัสดีคุณ " . htmlspecialchars($name) . "!";
}

// ฟังก์ชันแสดงเวลาในรูปแบบไทย
function getThaiDatetime() {
    date_default_timezone_set("Asia/Bangkok");
    return date("d/m/Y H:i:s");
}

// เรียกใช้ฟังก์ชัน
$yourName = "Mac";
echo "<h2>" . greet($yourName) . "</h2>";
echo "<p>เวลาในขณะนี้: " . getThaiDatetime() . "</p>";
?>
