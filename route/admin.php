<?php
$page = $_GET['page'] ?? 'dashboard';


switch ($page) {
case 'dashboard' : include "page/dashboard.php";break;
case 'genre' : include "admin-page/input_genre.php";break;
}
?>