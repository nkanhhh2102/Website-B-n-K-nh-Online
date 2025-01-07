<?php 

$conn = mysqli_connect('localhost:3307', 'root', '', 'tsl');
mysqli_query($conn, "SET NAMES 'utf8'");

if (!$conn) {
    exit('Kết nối không thành công!');
}

?>