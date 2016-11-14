<html>
	<head>
		<h1>php form validation!!</h1>
	</head>
<body> 

<p><span class="error">*required field.</span></p>

	<form method="post" action="disp.php">
		Name:<input type="text" name="name">
		<span class ="error">*<?php echo $nameErr;?></span>
		<br><br>
		Address:<input type="text" name="address">
		<span class="error">*<?php echo $addressErr;?></span>
		<br><br>
		Email:<input type="email" name="email">
		<span class="error">*<?php echo $emailErr;?></span>
		<br><br>
		Gender:
		<input type="radio" name ="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<span class="error">*<?php echo $genderErr;?></span>
		<br><br>
		Comment:<input type="text" name ="comment">
		<span class="error">*<?php echo $commentErr;?></span>
		<br><br>
		<input type="submit" name ="Submit">
	</form>
	
</body>
</html>