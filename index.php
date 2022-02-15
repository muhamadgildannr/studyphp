<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Level 1</title>
</head>    
<body>


<form method="post" action="index.php">
    <label>Bilangan 1</label>
    <input type="text" name="bilangan1">
    <p>

    <label>Bilangan 2</label>
    <input type="text" name="bilangan2">

    </p>
<p>
    <label>Bilangan 3</label>
    <input type="text" name="bilangan3">
</p>
<p>
<label>Bilangan 4</label>
    <input type="text" name="bilangan4">
</p>
    <input type="submit" value="input">
</form>


<?php
echo "<br>";
echo "Level 1";
echo "<br>";

@$bil1 = $_POST["bilangan1"];
@$bil2 = $_POST["bilangan2"];
@$bil3 = $_POST["bilangan3"];
@$bil4 = $_POST["bilangan4"];
$array = array($bil1, $bil2, $bil3, $bil4);

echo "Nilai yang di input yaitu $bil1 , $bil2, $bil3 dan $bil4 ";
echo "<br>";
echo "Nilai terbesar yaitu :" .max($array);

?>



</body>
</html>