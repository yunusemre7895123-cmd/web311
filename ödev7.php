<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ödevi - Görev 1 ve 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        h2 { color: #333; border-bottom: 2px solid #ddd; padding-bottom: 10px; }
        
        /* Tablo Stilleri */
        table { border-collapse: collapse; margin-top: 15px; background: white; }
        td { border: 1px solid #333; padding: 8px; text-align: center; min-width: 30px; }
        
        /* Form Stilleri */
        input[type="number"] { padding: 5px; width: 60px; }
        button { padding: 5px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>

    <div class="container">
        <h2>1. Görev: 1-100 Arası Tek Sayılar</h2>
        <p>
        <?php
            // 1'den 100'e kadar döngü
            for ($i = 1; $i <= 100; $i++) {
                // Modülüs (%) operatörü ile kalanı kontrol et
                if ($i % 2 != 0) {
                    echo $i . " - ";
                }
            }
        ?>
        </p>
    </div>

    <div class="container">
        <h2>2. Görev: Dinamik Tablo Oluşturma</h2>
        <p>Satır ve sütun sayısını giriniz. Hücrelere 1-100 arası rastgele sayı atanacaktır.</p>
        
        <form method="post">
            Satır Sayısı: <input type="number" name="satir" min="1" required>
            Sütun Sayısı: <input type="number" name="sutun" min="1" required>
            <button type="submit" name="tabloyu_olustur">Oluştur</button>
        </form>

        <?php
        // Butona basıldıysa aşağıdaki kodlar çalışsın
        if (isset($_POST['tabloyu_olustur'])) {
            $satir = $_POST['satir'];
            $sutun = $_POST['sutun'];

            echo "<h4>Sonuç ($satir x $sutun):</h4>";
            echo "<table>";

            // Dış Döngü: Satırları (tr) oluşturur
            for ($i = 0; $i < $satir; $i++) {
                echo "<tr>";
                
                // İç Döngü: Sütunları/Hücreleri (td) oluşturur
                for ($j = 0; $j < $sutun; $j++) {
                    // 1 ile 100 arası rastgele sayı üret (rand fonksiyonu)
                    $sayi = rand(1, 100);
                    echo "<td>$sayi</td>";
                }
                
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>

</body>
</html>