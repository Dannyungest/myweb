<?php
$username = $_POST["username"];
$password_input = $_POST["password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$upperCase = preg_match("@[A-z]@", $password_input);
$lowerCase = preg_match("@[a-z]@", $password_input);
$number = preg_match("@[0-9]@", $password_input);
$specialCharacter = preg_match("@[^\w]@", $password_input);

if(strlen ($password_input) < 8){
echo "<div class=error_message>Your password MUST be at least 8 characters long</div>";
exit();
}
if (!$upperCase) {
echo "<div class=error_message>Your password MUST contain at least 1 uppercase letter</div>";
exit();
}
if (!$lowerCase) {
    echo "<div class=error_message>Your password MUST contain at least 1 lowercase letter</div>";
exit ();
}

if(!$number) {
echo "<div class=error_message>Your password MUST contain at least 1 number</div>";
exit();
}
if (!$specialCharacter){
echo "<div class=error_message>Your password must contain at least 1 special character</div>";
exit();
}
// if($password_input !== $password_input2){
// echo "<div class=error_message>Your passwords do not match</div>";
// exit();
// }
if (empty(trim($password_input))){
echo"<div class=error_message>Enter password«/div»";
exit();
}

//Validate password strength
?>

<?php

include_once "./connect.php";

$sql = "INSERT INTO register(username, password_input, first_name, last_name, user_role, picture, date_register)
                     VALUES (:username, :password_input, :first_name, :last_name, :user_role, :picture, now())";
$stmt = $pdo->prepare($sql);
$stmt->execute(["username"=>$username, "password_input"=>md5($password_input), "first_name"=>$first_name, "last_name"=>$last_name, "user_role"=>"1", "picture"=>"user_picture/user.png"]);
$count = $stmt->rowCount();

if($count > 0) {
    echo "Registration Successful";
}else{
    echo "Registration Failed";
}
?>
