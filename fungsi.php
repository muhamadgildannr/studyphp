<!DOCTYPE html>
<html lang="en">
<head>
<title>Level 2</title>

</head>

<body>
<p>Mencetak bilangan terbesar</p>
<form method="post" action="fungsi.php">
    <label>Masukkan Bilangan 1 :</label>
    <input type="text" name="bilangan1"><br>
<input type="submit" name="input">
</form>

<?php

for ($bilangan1 = 0; $bilangan1 < 100; $bilangan1++) {
    echo "Nilai ke-$bilangan1 <br>";
}

@$bil1 = $_POST["bilangan1"];
$array = array($bilangan1);

echo "<br>";
echo "Bilangan terbesar yaitu :".max($array);


?>



</body>
</html>