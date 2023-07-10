<?php include_once './header.php';
if(isset($_SESSION["user_id"])) { ?>
<!-- <script>
     document.location="index.php"
</script> -->
<?php } ?> 
<h1>
My Dashboard | <span>
     <?php echo $_SESSION["first_name"] ." ".$_SESSION["last_name"]; ?> </span> 
</h1>
<section>
<a href="#">

     <form action="change_passport.php" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"]; ?>"/>

     <label for="fileInput">
          <img src="<?php echo $_SESSION["picture"]; ?>" class="picture" title="picture"/>
     </label>

     <input type="file" id="fileInput" name="picture_url" onchange="previewImage ();"
     style="display:none;"/>
<h1><?php echo $_SESSION["first_name"] ." ". $_SESSION["last_name"]; ?></h1>
<?php $_SESSION["first_name"]; ?>
     <button class="btnUpload" name="btnUpload">Save</button>
     </form>
     <div class="message"></div>
          <!-- <img src="Images/edit picture.jpg">Change Passport</a> -->
     <a href="change_password.php">
          <img src="Images/Change password.jpg">Change Password</a>
     <a href="edit_profile.php">
          <img src="Images/edit profile.jpg">Edit Profile</a>
     <a href="logout.php">
          <img src="Images/logout.jpg">Logout</a>

</section>
<script>
     const previewImage = () =>{
          let file = document.querySelector("#fileInput");
          let picture = document.querySelector(".picture");
          let message = document.querySelector(".message");
          let btnUpload = document.querySelector(".btnUpload");

          picture.src = window.URL.createObjectURL(file.files[0]);

          let regex = new RegExp("[^.]+$");
          fileExtension = file.value.match(regex);
          if(fileExtension == "jpeg" || fileExtension == "jpg" || fileExtension == "png") {
               btnUpload.style.display="block";
               message.innerHTML="";
          } else {
               picture.src="image/error.png";
               btnUpload.style.display="none";
               message.innerHTML="<b>." +fileExtension+ "</b> file is not allowed.<br/>Choose a .jpg or .png only";
          }
     }
</script>
<style>
     section{
          margin: 0 auto;
          width: 80%;
          padding: 8px;
     }
     section a{
          display: inline-block;
          margin: 25px;
          padding: 8px;
          text-decoration: none;
          color: #333
     }
     section a img{
          display: block;
          margin: 0 auto;
          width: 60px;
     }
     section a:hover {
          opacity: .5;
     }
     .btnUpload{
          display: none;
          width: 80px;
          height: 34px;
          border: 0;
          background-color: #599ffb;
          color: #fcfcfc;
          border-radius: 8px;
          padding: 4px;
          margin-top: 5px;
     }
     .picture{
          display: block;
          border-radius: 50%;
     }
</style>
<?php
include_once './footer.php';
?>