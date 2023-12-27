<?php

$servername = "sql206.epizy.com";
$username = "epiz_33257857";
$password = "a838dLcYOVi";
$dbname = "projeler";

// Veri tabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Veri tabanına bağlanırken hata kontrol et
if ($conn->connect_error) {
    die("Veri tabanına bağlanırken hata oluştu: " . $conn->connect_error);
}
  $proje_ad = $_POST['proje_ad'];
  $og_ad = $_POST['og_ad'];
  $og_numara = $_POST['og_numara'];
  $sinif = $_POST['sinif'];
  $file = $_FILES['file']['name'];

  // Veritabanına verileri kaydedin
  $sql = "INSERT INTO projeler (proje_ad, og_ad, og_numara, sinif, file) VALUES ('$proje_ad', '$og_ad', '$og_numara', '$sinif', '$file')";
  if (mysqli_query($conn, $sql)) {
    // Veri kaydedildiğinde yapılacak işlemler
    echo "Veri kaydedildi.";
  } else {
    // Veri kaydedilemediğinde yapılacak işlemler
    echo "Veri kaydedilemedi: " . mysqli_error($conn);
  }

  // Veritabanı bağlantısını kapatın
  mysqli_close($conn);
?>
