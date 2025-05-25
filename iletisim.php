<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim Sonucu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $ad = htmlspecialchars($_POST['ad']);
      $soyad = htmlspecialchars($_POST['soyad']);
      $email = htmlspecialchars($_POST['email']);
      $telefon = htmlspecialchars($_POST['telefon']);
      $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
      $mesaj = htmlspecialchars($_POST['mesaj']);

      echo "<h2 class='mb-4'>Form Başarıyla Gönderildi</h2>";
      echo "<ul class='list-group'>";
      echo "<li class='list-group-item'><strong>Ad:</strong> $ad</li>";
      echo "<li class='list-group-item'><strong>Soyad:</strong> $soyad</li>";
      echo "<li class='list-group-item'><strong>Email:</strong> $email</li>";
      echo "<li class='list-group-item'><strong>Telefon:</strong> $telefon</li>";
      echo "<li class='list-group-item'><strong>Cinsiyet:</strong> $cinsiyet</li>";
      echo "<li class='list-group-item'><strong>Mesaj:</strong> $mesaj</li>";
      echo "</ul>";
    } else {
      echo "<div class='alert alert-danger'>Form gönderilemedi. Lütfen tekrar deneyin.</div>";
    }
    ?>
  </div>
</body>
</html>
