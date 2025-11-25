<?php
$_GET ['page'];
$page =$_GET['page'] ?? 'dashboard';




switch ($page) {
case 'dashboard' : include "page/dashboard.php";break;
case 'genre' : include "page/input_genre.php";break;
default : echo "lahaman tidak ditemukan";
}
?>