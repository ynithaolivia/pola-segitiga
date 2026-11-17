<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Segitiga Bintang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 50px;
        }
        .container {
            background: #ffffff;
            max-width: 450px;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-top: 0;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: #d9534f;
            background-color: #f2dede;
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            border: 1px solid #ebccd1;
        }
        .result {
            margin-top: 20px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #dee2e6;
        }
        pre {
            font-family: monospace;
            font-size: 18px;
            line-height: 1.2;
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pola Segitiga Bintang</h2>
    <form method="POST" action="">
        <label for="height">Masukkan Tinggi Segitiga (1 - 20):</label>
        <input type="number" id="height" name="height" required>
        <button type="submit" name="submit">Tampilkan Pola</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $height = $_POST['height'];

        // Validasi: Cek apakah input adalah bilangan bulat dan berada di rentang 1 sampai 20
        if (!filter_var($height, FILTER_VALIDATE_INT) || $height < 1 || $height > 20) {
            echo '<div class="error"><strong>Peringatan:</strong> Masukan tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</div>';
        } else {
            echo '<div class="result">';
            echo '<strong>Hasil Segitiga (Tinggi: ' . $height . '):</strong><br><pre>';
            
            // Perulangan bersarang (Nested Loop) untuk segitiga simetris
            for ($i = 1; $i <= $height; $i++) {
                // 1. Loop untuk mencetak spasi (agar posisi simetris di tengah)
                for ($j = 1; $j <= ($height - $i); $j++) {
                    echo " ";
                }
                
                // 2. Loop untuk mencetak bintang
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                
                // Pindah ke baris berikutnya
                echo "\n";
            }
            
            echo '</pre></div>';
        }
    }
    ?>
</div>

</body>
</html>