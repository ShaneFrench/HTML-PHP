<!DOCTYPE html>
<html>
<head>

<title><?php print time(); ?></title>
<link rel='stylesheet' href='http://www.w3schools.com/lib/w3.css'>
</head>
	<body style="background:#<?php echo bgcolor(); ?>">
	
	<?php 
	function bgcolor(){return dechex(rand(0,10000000));}
	?>

	<?php

			print "<p>Hello ".$_GET['firstname']." ".$_GET['lastname']."!</p>\n";
		
		?>

	<br>
		<?php

		if ( isset( $_GET['firstname']) && isset( $_GET['lastname'])) {
  		print "<p>Hello ".$_GET['firstname']." ".$_GET['lastname']."!</p>\n";
		} else {
  		print "<p>You didn't tell me your first and last names!</p>\n";
}

		?>
	</br>

	<br>
		<?php

			print "<a href='?firstname=already&lastname=filledin'>Click Here</a>\n";

		?>
	</br>
		
			<?php
			function timestable( $n) {
			$text = "<p>\n";
			for( $i = 1; $i < 13; $i++) {
				$text .= $i." times ".$n." is ".($i * $n)."<br>\n"; 
			}
			$text .= "</p>\n";
			return $text;
		}
		
		// code to print out LOTS of times tables
	print "<table class='w3-table-all'>\n";
	for( $i = 1; $i < 10; $i += 6) {
	print "<tr>\n";
	for( $j = 0; $j < 7; $j++) {
    print "<td>".timestable($i + $j)."</td>\n";
	}
	print "</tr>\n";
	}
	print "</table>\n";

			?>
			
			
	<br>
		<?php
		    print "<h1>The time is ";
			print time();
			print "</h1>";
		?>
	</br>
		
		
		
	<br>
		<?php
			print date ( "r", time());
		?>
	</br>
		

		
	<br>
		<?php
			$words = array( "happy", "sad", "hype", "<i>fruity</i>");
			$r = rand(0,3);
			print "<h2>Are you feeling ".$words[$r]."</h2>\n";
		?>
	</br>

		
	</body>
</html>