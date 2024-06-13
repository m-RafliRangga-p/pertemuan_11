<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Form Perhitungan Aritmatika</h1>
    <form method="POST" action="Challenge9_22114668.php">
        <table>
            <tbody>
                <tr>
                    <td>Masukkan Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="namaku"></td>
                </tr>
                <tr>
                    <td>Masukkan Angka Pertama (1-10)</td>
                    <td>:</td>
                    <td><input type="number" name="angkaku1"></td>
                </tr>
                <tr>
                    <td>Masukkan Angka Kedua (1-10)</td>
                    <td>:</td>
                    <td><input type="number" name="angkaku2"></td>
                </tr>
                <tr>
                    <td><input class="btn" type="submit" name="hitung" value="Hitung"></td>
                </tr>
            </tbody>
        </table>
        <!-- Masukkan Nama Anda = <input type="text" name="namaku"><br>
        Masukkan Angka Pertama (1-10) = <input type="number" name="angkaku1"><br>
        Masukkan Angka Kedua (1-10) = <input type="number" name="angkaku2"><br>
        <input type="submit" name="hitung" value="hitung"> -->
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        echo "<h2> Perhitungan Aritmatika </h2>";

        $angka1 = $_POST['angkaku1'];
        $angka2 = $_POST['angkaku2'];

        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $perkalian = $angka1 * $angka2;
        $pembagian = $angka1 / $angka2;
        $modulus = $angka1 % $angka2;

        echo "Nama : $_POST[namaku]<br>";
        echo "$angka1 + $angka2 = $tambah";
        echo "<br>$angka1 - $angka2 = $kurang";
        echo "<br>$angka1 * $angka2 = $perkalian";
        echo "<br>$angka1 / $angka2 = $pembagian";
        echo "<br>$angka1 % $angka2 = $modulus";
    }
    ?>
</body>

</html>