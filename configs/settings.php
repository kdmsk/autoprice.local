<?php
/*
Файл для настроек сайта
*/

$user_c = null;

if(isset($_COOKIE["user_id"])) {
    $user_c = $_COOKIE["user_id"];
}

$admin_c = null;

if(isset($_COOKIE["admin_id"])) {
    $admin_c = $_COOKIE["admin_id"];
}
?>