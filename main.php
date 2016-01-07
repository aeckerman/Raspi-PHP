<html>
<head>
	<title>PHP on RPi2B</title>
</head>
<body>
	<p>People in space:</p>

	<?php
	$url = "http://api.open-notify.org/astros.json"
	$json = file_get_contents($url);
	$json_data = json_decode($json, true);
	echo "<p>", $json_data["number"], "</p>";
	?>
</body>
</html>