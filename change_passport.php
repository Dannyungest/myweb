<?php
if(isset ($_POST["btnUpload"])) {
    $user_id = $_POST['user_id'];
    $name = $_FILES['picture_url']['name'];
    $tmp_name = $_FILES['picture_url']['tmp_name'];
    $picture = "";

    if ($name) {
        $name = time () ;
        $picture = "user_pictures/$name.jpg";
    }
    move_uploaded_file($tmp_name, $picture);

    include_once './connect.php';

    $sql_update_statement = "UPDATE register SET picture = :picture WHERE user_id = :user_id";
    $statement  = $pdo->prepare($sql_update_statement);
    $statement->execute(["picture"=>$picture, "user_id"=>$user_id]);

    session_start ();
    $_SESSION['picture'] = $picture; ?> 

    <div id="message_success">Picture Changed</div>
    <script>
        document.location="my_dashboard.php";
    </script>
<?php } ?>