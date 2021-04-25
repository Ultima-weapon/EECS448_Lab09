<html>
	<head>
		<title>Web Store</title>
		<link href="..\css\style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Heading -->
		<div id="header" class="title-header">
			<h1 id="title">Web Store</h1>
		</div>
		<div align="center">
			<h2>Thank you for your purchase!</h2>
			<?php
				if($_POST['submit']){
					if($itemCount1=='' || $itemCount2=='' || $itemCount3=='' || $shipping=='' || $username=='' || $password==''){
						$itemCount1 = $_POST['itemCount1'];
						$itemCount2 = $_POST['itemCount2'];
						$itemCount3 = $_POST['itemCount3'];
						$shipping = $_POST['shipping'];
						$username = $_POST['username'];
						$password = $_POST['password'];
					}
					
				}
				echo '<div align="center"><h5>Username: ' . $username . ' Password: ' . $password . '</h5></div>';
				echo '<div class="receipt">Purchase Receipt<table><tr><b><th/><th>Quanity</th><th>Cost Per Item</th><th>Sub Total</th>';
				echo '<tr><td><b>Item 1</b></td><td>' . $itemCount1 . '</td><td>$4.95</td><td>$' . number_format($itemCount1*4.95,2,'.','') . '</td></tr>';
				echo '<tr><td><b>Item 2</b></td><td>' . $itemCount2 . '</td><td>$15.98</td><td>$' . number_format($itemCount2*15.98,2,'.','') . '</td></tr>';
				echo '<tr><td><b>Item 3</b></td><td>' . $itemCount3 . '</td><td>$2.99</td><td>$' . number_format($itemCount3*2.99,2,'.','') . '</td></tr>';
				echo '<tr><td><b>Shipping</b></td><td colspan="2">';
				if($shipping==1){
					echo '7-Day</td><td>$0.00</td></tr>';
				} else if($shipping==2){
					echo 'Overnight</td><td>$50.00</td></tr>';
				} else if($shipping==3){
					echo '3-Day</td><td>$5.00</td></tr>';
				}
				echo '<tr><td colspan="3"><b>Total Cost</b></td><td><b>$';
				if($shipping==1){
					echo number_format($itemCount1*4.95+$itemCount2*15.98+$itemCount3*2.99,2,'.','') . '</b></td></tr>';
				} else if($shipping==2){
					echo number_format($itemCount1*4.95+$itemCount2*15.98+$itemCount3*2.99+50,2,'.','') . '</b></td></tr>';
				} else if($shipping==3){
					echo number_format($itemCount1*4.95+$itemCount2*15.98+$itemCount3*2.99+5,2,'.','') . '</b></td></tr>';
				}
				echo '</table></div>';
			?>
		</div>
	</body>
</html>