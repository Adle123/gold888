<?php

$d_host = "localhost";
$d_name = "gold888_goldrtp";
$d_password = "Technology.008";
$d_dbname = "gold888_goldrtp";

$data = mysqli_connect($d_host, $d_name, $d_password, $d_dbname);
$today = date("Y-m-d H:i:s");
$todaydate = date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');

if(!$data) {
    echo "Error Connect Database";
}

$uploadgambar = 'Upload gambar? langsung ke link ini >>> <a href="https://id.imgbb.com/" target="_blank">IMGBB</a>';

?>