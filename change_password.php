<?php session_start ();
$user_id = $_SESSION ["user_id"];
$current_password = $_POST ['current_password'];
$encoded_password_current = md5($current_password);
$new_password = $_POST ['new_password'];
$confirm_password = $_POST ['confirm_password'];
$password_encoded = md5($new_password);

if (empty (trim ($current_password) )) {
echo '<span class="message_error">Enter your current password</span>';
exit ();
}
if ($new_password === $current_password) {
    echo '<span class="message_error">Your new password seems to same the old one. Choose another password</span>';
    exit ();
}

$upperCase = preg_match('@[A-Z]@', $new_password);
$lowerCase = preg_match('@[a-z]@', $new_password);
$number = preg_match('@[0-9]@', $new_password);
$specialCharacter = preg_match('@[^\w]@', $new_password);

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
if ($new_password = $confirm_password) {} else {
echo "<span class=message_error>Your passwords do not match</span>";
exit ();
}

include_once './connect.php';
$sql_statement = "SELECT * FROM register WHERE user_id=:user_id and password_input =:password_input";
$statement = $pdo -> prepare ($sql_statement);
$statement->execute ([ "user_id"=>user_id, "password_input"=>$encoded_password_current]);
$count_row = $statement->rowCount ();

if ($count_row < 1) {
echo '<span class= message_error>Password could not be changed because you entered the wrong</span>';
exit ();
}
else{
$sql_statement2 = "UPDATE register SET password_input = password_input WHERE user_id = :user_id";
$statement2 = $pdo->prepare ($sql_statement2);
$statement2->execute (["password_input"=>$password_encoded, "user_id"=>$user_id]);?>


<center> <?php
echo 'Password Changed Successfully'; session_destroy(); ?>
<br/><br/><a href="index.php"><b>Login</b></a> with your new password
</center>
<?php } ?>