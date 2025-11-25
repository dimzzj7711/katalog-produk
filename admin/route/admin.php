<?php
$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? 'index';




switch ($page) {
case 'dashboard' : include "../admin-page/dashboard.php";break;
case 'genre' : include "../page/input_genre.php";break;

default : echo "halaman tidak ditemukan";
}

?>