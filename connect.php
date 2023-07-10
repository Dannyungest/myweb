<?php
$host = "127.0.0.1";
$dbname = "new_web_db";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql: host=$host; dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    //echo "connected";
}catch(PDOEXCEPTION $ex){
    echo "connection failed because:" .$ex;
}
?>