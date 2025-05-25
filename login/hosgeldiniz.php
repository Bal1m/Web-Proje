<?php
$dogruEmail = "b231210083@ogr.sakarya.edu.tr";
$dogruSifre = "b231210083";

if ($_POST["email"] == $dogruEmail && $_POST["password"] == $dogruSifre) {
    echo "<h2>Hoşgeldiniz " . htmlspecialchars($_POST["email"]) . "</h2>";
    echo "<a href='../index.html'>Siteye Git</a>";
} else {
    header("Location: ../login.html");
    exit();
}
?>

