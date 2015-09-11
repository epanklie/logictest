<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logic Test</title>
	<link rel="stylesheet" href="">
</head>
<body>

<h3>Bilangan Fibonanci</h3>
<form action="" method="post">
	Masukkan Jumlah Digit <input type="number" name="input">
	<input type="submit" value="Hasil">
</form>
<?php 

error_reporting(0);

$a1 = 1;
$a2 = 1;

if ($_POST['input']) {

	if ($_POST['input']==1) {
		echo $a1." = ".$a1;
	}

	elseif ($_POST['input']==2) {
		$dua = $a1 + $a2;
		echo $a1." + ".$a2." = ".$dua;
	}
	
	else{
		$input = $_POST['input']-2;

		echo $a1." + ".$a2;

		for ($u=0; $u < $input; $u++) { 
			$s = $a1 + $a2;
			echo " + ".$s;
			$a1 = $a2;
			$a2 = $s;
			$jumlah = $a1 + $a2 + $s - 1;
		}
		
		echo " = ".$jumlah;
	}
}
 ?>

</body>
</html>
