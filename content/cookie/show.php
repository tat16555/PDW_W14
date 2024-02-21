<?php
if(!empty($_COOKIE)){
    echo '<pre>'.print_r($_COOKIE).'</pre>';
} else {
    echo 'ไม่พบข้อมูล';
}
?>
<br>
<a href=".">กลับหน้าindex</a>