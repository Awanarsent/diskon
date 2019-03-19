<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diskon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('https://i1.wp.com/www.kentos.org/wp-content/uploads/2015/05/big-sale.png?fit=405%2C292&ssl=1');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form  id="booking-form" class="booking-form" action="index.php" method="post">
					<span class="contact3-form-title">
						Menghitung Diskon
					</span>

					
					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="totalbeli" placeholder="Masukan Harga">
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">

						<button class="contact3-form-btn" type="submit" name="tuku" value="Hitung Diskon">
							Hitung Diskon
						</button>
					</div>
					</form>

					<?php

					if(!empty($_POST['tuku'])){
					$totalbeli = $_POST['totalbeli'];
					$totalbeli = str_replace(".", "", $totalbeli);


					if (isset($totalbeli)){

					$toyar=intval($totalbeli);
					$diskon=0;

					if ($toyar>=500000){
					$diskon=(0.5*$toyar);
					} 
					else if ($toyar>=100000) {
					$diskon=(0.1*$toyar);
					}else if ($toyar>=50000) {
					$diskon=(0.05*$toyar);
					} else {
					print("Maaf Tidak Ada Diskon <br>\n");
					}



					{
					//printf("Jumlah Bayar = %d<br>\n",$toyar);
					echo "Harga = Rp ";
					echo number_format($toyar,2,",",".");
					echo "<br>";

					//printf("Diskon = %d<br>\n",$diskon);

					echo "Diskon = Rp ";
					echo number_format($diskon,2,",",".");
					echo "<br>";

					$totalbayar=$toyar-$diskon;
					//printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);

					echo "<b>Jumlah Bayar = </b> Rp ";
					echo number_format($totalbayar,2,",",".");
					echo "<br>";

					}

					}

					}
					?>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
