<html>
    <head>
        <title>Studikasus</title>
    </head>
    <body>
        <h3>Masukkan Bilangan<br>(Mengurutkan bilangan dari yang terkecil ke terbesar)</h3>

        <form action="lev2.php"method="post">
            <input type="number"name="satu">
            <input type="number"name="dua">
            <input type="number"name="tiga"><br><br>
            <input type="submit"name="submit"value="SUBMIT">
        </form>

    <?php
    if(isset($_POST["submit"])){
       @$satu = $_POST["satu"];
       @$dua = $_POST["dua"];
       @$tiga = $_POST["tiga"];
       @$nilai =array($satu,$dua,$tiga);

       sort($nilai);
       echo"</br>";

       $jumlah=count($nilai);
       for($x=0; $x<$jumlah; $x++){
           echo($nilai)[$x];
           echo"</br>";
       }
    }
    ?>       
</body>
</html>