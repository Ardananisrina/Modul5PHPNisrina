<html>
    <head>
        <title>Menghitung kecepatan pada GLB</title>
    </head>
    <body>
	<?php
	function hitung($jarak, $waktu){
		$kecepatan = $jarak / $waktu;
		echo "Kecepatan = ".$kecepatan." Km/Jam";
	}
?>
			
		<?php
		$s = 10;
		$t = 2;
		echo "jarak (s) = 10 km<br>";
		echo "waktu (t) = 2 jam<br>";
		echo "Rumus Kecepatan = jarak (s) / waktu (t)<br>";
		echo hitung($s, $t);
		?>
    </body>
</html>