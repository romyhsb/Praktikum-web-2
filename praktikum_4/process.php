<?php
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pasword = $_POST['pw'];
}
if ($email == 'admin@gmail.com' and $pasword == 'admin') {
  header("location:./tugas/index.php");
}
