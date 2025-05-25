<?php
$dogruEmail = "b231210083@ogr.sakarya.edu.tr";
$dogruSifre = "b231210083";

if ($_POST["email"] == $dogruEmail && $_POST["password"] == $dogruSifre) {
  header("Location: ../index.html");
  exit();
} else {
  header("Location: ../login.html");
  exit();
}
?>