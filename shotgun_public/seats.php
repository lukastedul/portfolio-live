<!DOCTYPE html>
<html>
<head>
	<title>SHOTGUN!</title>
	<meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="style_seats_m.css" />
</head>

<?php
	error_reporting(0);

	$putnici = $_POST['putnik'];
	$vozac = $POST['driver'];
	$arrlenght = count($putnici);
	/*echo $arrlenght;*/
	shuffle($putnici);

	/*print_r($_POST);*/

	print_r($vozac);

?>

<body>

	<?php
		if(isset($_POST['prvi_putac'])){ ?>
			<div class="wrap">
				<img src="arrow_s.png">
				<table>
		  			<tr>
		    			<td><div id="driver_seat" class="seat"><?php echo $vozac[0]; ?></div></td>
		    			<td></td>
		    			<td><div id="shotgun_seat" class="seat"><?php echo $putnici[0]; ?></div></td>
		  			</tr>
		  			<tr>
		    			<?php for ($i=0; $i<$arrlenght-1; $i=$i+1){
			    			$pom=$i+1; 
			    			if (fmod($i, 3)==0){
			    				echo "</tr><tr>";
			    			}
			    			echo "<td><div class='seat'>" . $putnici[$pom] . "</div></td>";
		    			} ?> 
				</table>
			</div> <?php
		}elseif(isset($_POST['drugi_putac'])){ ?>
			<div class="wrap2_vanjski">
				<div class="wrap2">
					<?php echo $putnici[0]; ?>
				</div>
			</div>
			<div class="shotgun">Shotgun!</div> <?php
		}
	?>

</body>