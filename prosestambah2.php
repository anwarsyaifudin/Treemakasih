<?php
  include "prosestambah.php";
  $nama  = $_REQUEST['nama'];
  $email  = $_REQUEST['email'];
  $password  = $_REQUEST['password'];
  $mysqli  = "INSERT INTO admin (user, email, password) VALUES ('$nama', '$email', '$password')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    header("Location: daftarberhasil.php");
  } else {
    header("Location: daftargagal.php");
  }
  mysqli_close($conn);
?>