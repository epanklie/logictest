<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logika Test</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h3>Angka Ajaib</h3>
	<form action="" method="post">
		Input digit <input type="number" name="digit" required>
		<input type="submit" value="Hasil">
	</form>

<?php 

error_reporting(0)

$digit = $_POST['digit'];

if (($digit%2)!=0) {
	echo "Angka Hanya Boleh Bilangan Genap";
}

else{

	$setengah = $digit/2;
	$batasAwal = pow(10, $setengah-1)==1?0:pow(10, $setengah-1);
	$batasAkhir = pow(10, $setengah)-1;
	$string = [];

	for ($i=$batasAwal; $i <= $batasAkhir; $i++) {
		for ($o=$batasAwal; $o <= $batasAkhir; $o++) {
			if ($i.$o == pow($i+$o, 2)) {
				$string[] =  $i.$o;
			}
		}
	}

	$stringData = count($string);
	foreach ($string as $i => $ajaib) {
		if ($i == $stringData-1 && $stringData > 1) {
			echo ', dan ';
		}
		elseif ($i > 0) {
			echo ', ';
		}
		echo $ajaib;
	}
}

?>

</body>
</html>
