<?php
session_start();

if (!empty($_SESSION)) {
    echo '<pre>' . htmlspecialchars(print_r($_SESSION, true)) . '</pre>';
} else {
    echo 'ไม่พบข้อมูล';
}
?>
<br>
<a href=".">กลับไปที่หน้าหลัก</a>
