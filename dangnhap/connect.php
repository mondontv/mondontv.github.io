<?php
$connect = mysqli_connect ('localhost', 'root', '', 'data') or die ('Không thể kết nối tới database');
mysqli_set_charset($connect, 'UTF8');
if($connect === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {
echo 'Kết nối chương trình thành công!';
}
?>
// Code by #tnhh_minhsonlaptrinh