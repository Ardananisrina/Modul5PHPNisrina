<?php
	function hitung($jarak, $waktu){
		$kecepatan = $jarak / $waktu;
		echo "Kecepatan = ".$kecepatan;
	}
?>

<html>
    <head>
        <title>Menghitung kecepatan pada GLB</title>
    </head>
    <body>
        <form action="" method="GET">

            Jarak (s)<input type="text" name="jarak" value=""/>Km<br><br>
            waktu (t)<input type="text" name="waktu" value=""/>Jam<br><br>
            <input type="submit" name="submit" value="HITUNG"/><br><br>
			
		<?php
		echo hitung($jarak, $waktu);
		?>
        </form>
    </body>
</html>