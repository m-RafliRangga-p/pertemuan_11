<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9.8</title>
</head>

<body>
    <form method="POST" action="praktikum_9.8.php">
        Nama Anda = <input type="text" name="namaku"><br>
        Email Anda = <input type="email" name="emailku"><br>
        Alamat Anda = <textarea name="alamatku">
        </textarea><br>
        <input type="submit" name="kirim" value="sent">
    </form>
    <?php
    if (isset($_POST['kirim'])) {
        echo "Nama Anda : $_POST[namaku]<br>";
        echo "Email Anda : $_POST[emailku]<br>";
        echo "Alamat Anda : $_POST[alamatku]<br>";
    }
    ?>
</body>

</html>