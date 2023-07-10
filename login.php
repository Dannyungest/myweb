<?php 
$username = $_POST["username"];
$password_input = $_POST["password"];

include_once './connect.php';

$sql = "SELECT *FROM register WHERE username = :username AND password_input = :password_input";
$stmt = $pdo->prepare($sql);
$stmt->execute(["username"=>$username, "password_input"=>md5($password_input)]);
$count = $stmt->rowCount();
$rows = $stmt->fetchAll();

if($count > 0){
    session_start();
foreach($rows as $row){
    $_SESSION["user_id"] = $row->user_id;
    $_SESSION["username"] = $row->username;
    $_SESSION["first_name"] = $row->first_name;
    $_SESSION["last_name"] = $row->last_name;
    $_SESSION["user_role"] = $row->user_role;
    $_SESSION["picture"] = $row->picture;
    echo "<h1>Access Granted to" .$_SESSION["first_name"]. "</h1>";
    ?>
    <script>
        document.location="my_dashboard.php";    
        </script>
    <?php
}}else{
    include_once './header.php'; 
    echo "<div class='error'>Access Denied </div>";
    include "./footer.php";
}