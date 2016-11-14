<html>
<head>
	<h1>Form validation</h1>
</head>
	<body>
		
		<form method ="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Name:<input type="text" name="fname">
			<br><br>
			Address:<input type="text" name="address">
			<br><br>
			Email:<input type="email" name="mail">
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="male"> Male
			<br><br>
			Comment:<textarea name="comment"></textarea>
			<br><br>
			<input type="submit" name="Submit" >
		</form>
		<?php
		echo "<h3>your input:</h3>";
		echo $name;
		echo "<br>";
		echo $address;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $comment;
		?>
		<?php
		function submit(){


		$name = $address = $email = $gender = $comment  ="";

		if($_SERVER["REQUEST_METHOD"] =="POST"){
			$name = test_input($_POST["name"]);
			$address = test_input($_POST["address"]);
			$email = test_input($_POST["email"]);
			$gender = test_input($_POST["gender"]);
			$comment = test_input($_POST["comment"]);
		}
		function test_input($data)
		 {
        	  $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }
    }
	?>
	</body>
</html>