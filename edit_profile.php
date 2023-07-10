<?php include_once './header.php'?>

<fieldset class="edit_profile">
        <legend>Edit Profile</legend>

        <form action="edit_profile.php" method="POST">
        <div class="closesignup">
            <div class="closesignup1"></div>
            <div class="closesignup2"></div>
        </div>
    <label>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"]; ?>" required="required">
        <span>user_id</span>
    </label>

    <label>
            <input type="text" name="first_name" value="<?php echo $_SESSION["first_name"]; ?>" required="required">
            <span>First Name</span>
    </label>

    <label>
            <input type="text" name="last_name" value="<?php echo $_SESSION["last_name"]; ?>" required="required">
            <span>Last Name</span>
    </label>

        <button name="btnUpdate">Save</button>
</form>
    </fieldset>
    <?php
    if(isset($_POST["btnUpdate"])) {
$user_id = $_POST["user_id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

        include_once "./connect.php";

    $sql = "UPDATE register SET first_name = :first_name, last_name = :last_name WHERE user_id = :user_id";
    $stmt = $pdo->prepare ($sql);
    $stmt->execute(["first_name"=>$first_name, "last_name"=>$last_name, "user_id"=>$user_id]);

    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;

?>    
<script>
    document.location ="my_dashboard.php"
</script>
<?php } ?>
<style>
    .edit_profile{
        margin: 0 auto;
        margin-bottom: 23px;
        width: 26%;
        border-radius: 8px;
        background-color: #f7f7fd;
        border: #b5b5b5;
        padding: 20px;
    }
</style>

<?php include_once './footer.php'
?>
