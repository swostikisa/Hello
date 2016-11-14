	<?
$nameErr = $addressErr = $emailErr = $genderErr = $commentErr = "";
$name = $address = $email = $gender = $comment = "";
if($_SERVER["REQUIRED_METHOD"] == "POST"){
	if (empty($_POST["name"])){
		$nameErr = "name is required";
	}else {
		$name = test_input($_POST["name"]);
	}
	if (empty($_POST["address"])){
		$nameErr = "address is required";
	}else {
		$name = test_input($_POST["address"]);
	}
	if (empty($_POST["email"])){
		$nameErr = "email is required";
	}else {
		$name = test_input($_POST["email"]);
	}
	if (empty($_POST["gender"])){
		$nameErr = "gander is required";
	}else {
		$name = test_input($_POST["gander"]);
	}
	if (empty($_POST["comment"])){
		$nameErr = "comment is required";
	}else {
		$name = test_input($_POST["comment"]);
	}
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
echo "<h2>your inputs:</h2>";
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