<?php
    @$jarak = $_GET['jarak'];
    @$waktu = $_GET['waktu'];
    @$kecepatan = $jarak / $waktu;
?>

<html>
    <head>
        <title>Menghitung kecepatan pada GLB</title>
    </head>
    <body>
        <form action="" method="GET">

            Jarak (s)<input type="text" name="jarak" value="<?php echo $jarak; ?>"/>Km<br><br>
            waktu (t)<input type="text" name="waktu" value="<?php echo $waktu; ?>"/>Jam<br><br>
            <input type="submit" name="submit" value="HITUNG"/><br><br>

            <?php 
                echo "Kecepatan pada GLB = Jarak(s) / Waktu(t)<br>";
                echo "Kecepatan(V) = ".$kecepatan."Km/Jam";
            ?>

        </form>
    </body>
</html>