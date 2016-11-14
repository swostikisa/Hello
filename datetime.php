<html>
<body>
	<?php
	date_default_timezone_get("Nepal/Kathmandu");
	echo "the time is:".date("h:i:sa");
	echo "<br>";
	$d=mktime(4, 20, 33, 3, 4, 2015);
	echo "Created date is :".date("Y-m-d h:i:sa",$d);
	?>
	<body>
</html>