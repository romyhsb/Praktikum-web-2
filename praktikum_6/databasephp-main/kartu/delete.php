<?php
require_once '../dbkoneksi.php';

// menangkap data iddel dari url
$id = $_GET['iddel'];

$dbh->query("DELETE FROM kartu WHERE id=$id");

header('location:index.php');
