<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigational Menu</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="Shortcut Icon" href="Images/finest.jpg">
    <script defer src="js/menu.js"></script>
</head>
<body>
    <header>
        <nav>
        <div>
            <img src="Images/finest.jpg" style="width: 60px;" title="Business LOGO">
        </div>
            <ul>
                <li><a href="index.php" title="Home Page">Home</a></li>
                <li><a href="#">About</a></li>
                <li>
                    
                    <span class="drop_down">
                        <a href="#" class="caret">Products 
                            <span class="caret_right"></span>
                        <span class="caret_left"></span>
                        </a>
                <span class="drop_down_menu">
                    <a href="#">Phone</a>
                    <a href="#">Tablet</a>
                    <a href="#">Laptop</a>
                    <a href="#">TV</a>
                </span>
            </span>
        </li>
        <li>
                    
            <span class="drop_down1">
                <a href="#">Services</a>
        <span class="drop_down_menu1">
            <a href="#">Sales</a>
            <a href="#">Repair</a>
            <a href="#">Maintenance</a>
            <a href="#">Consultation</a>
        </span>
    </span>
</li>
<?php if(isset($_SESSION["user_id"])) { ?>
<li><img src="<?php echo $_SESSION["picture"]; ?>" style="width:60px; border-radius:50%; position:absolute;"/>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
<a href="my_dashboard.php"><?php echo $_SESSION["first_name"]; ?>
</a></li>
<li><a href="logout.php">Logout</a></li>
<?php } else { ?>
    <li><a href="#" class="signup_login">Sign Up</a></li>
<?php } ?>
                <li class="search_icon"><a href="#">
                    <span class="search_circle"></span>
                    <span class="search_line"></span>
                </a></li>
            </ul>
        </nav>

<span class="mobile_menu_icon">
    <span class="top_line"></span>
    <span class="middle_line"></span>
    <span class="bottom_line"></span>
</span>        

<span class="search_icon_mobile">
<span class="circle_mobile"></span>
<span class="line_mobile"></span>

</span>
    </header>

    <section class="search_bar">
        <input type="text" placeholder="Type to search">
        <button class="close">Close</button>

    </section>
<!-- <section class="left_section">
    <img src="Images/finest.jpg" style="display: block; width: 100%; margin: 0 auto;">
</section> -->
<section class="profile_section">
<div class="slant">

</div>
</section>




</section>

    <fieldset class="signup_form">
        <legend>Sign Up</legend>

        <form id="registrationForm" method="POST">
        <div class="closesignup">
            <div class="closesignup1"></div>
            <div class="closesignup2"></div>
        </div>

    <label>
        <input type="text" name="username" required="required">
        <span>Username</span>
    </label>

    <label>
            <input type="password" name="password" required="required">
            <span>Password</span>
    </label>

    <label>
            <input type="text" name="first_name"  required="required">
            <span>First Name</span>
    </label>

    <label>
            <input type="text" name="last_name" required="required">
            <span>Last Name</span>
    </label>

        <button class="btnRegister" name="btnSubmit">Submit</button>

        <p>Already have an Account
            <a href="#" class="login">Login</a>
        </p>
</form>
<div class="msg"></div>
    </fieldset>


    <fieldset class="login_form">
    <form action="login.php" method="POST">
        <legend>Login</legend>
        <div class="closesignup">
            <div class="closesignup1"></div>
            <div class="closesignup2"></div>
        </div>

    <label>
        <input type="text" name="username" required="required">
        <span>Username</span>
    </label>

    <label>
            <input type="password" name="password" required="required">
            <span>Password</span>
    </label>
        <button class="btnLogin" name="btnLogin">Login</button>
        <p>Don't have an Account
            <a href="#" class="signup">Create Account</a>
        </p>
        </form>
    </fieldset>




<section class="mask"></section>

<style>

 .signup_form, .login_form{
        width: 30%;
        margin: 0 auto;
        position: fixed;
        top: -878px;
        /* top: 78px; */
        right: 0;
        left: 0;
        /* margin-top: 7%; */
        padding: 28px;
        border-radius: 8px;
        background-color: #f7f9fd;
        border: #b5b5b5 1px solid;
        /* display: none; */
        z-index: 3;
        transition: .7s;
        
    }
    legend{
        background-color:#f7f9fd;
        padding: 12px;
        border-radius: 80px;
        /* text-align: center; */
    }
    .closesignup{
        position: absolute;
        /* background-color: aqua; */
        width: 50px;
        height: 50px;
        right: 0;
        top: -5px;
        margin-bottom: 10px;
        /* padding: 10px; */
    }
    .closesignup1{
        position: absolute;
        top: -5px;
        left: 48%;
        width: 3px;
        height: 30px;
        rotate: -45deg;
        background-color: red;
        /* margin-bottom: 10px; */
    }
    .closesignup2{
        position: absolute;
        width: 3px;
        height: 30px;
        rotate: 45deg;
        background-color: red;
        right: 0;
        top: -5px;
        right: 48%;
    }
    fieldset *{
        display: block;
    }
    fieldset input{
        margin-bottom: 12px;
        padding-left: 3%;
        width: 97%;
        height: 38px;
        border-radius: 8px;
        outline: 0;
        border: 0;
        border-bottom: 2px solid #b5b5b5;
    }
    fieldset input:focus~span, fieldset input:valid~span{
        top: -15px;
        color: #222;
    }
    label{
        position: relative;
    }
    label span{
        position: absolute;
        font-size: 14px;
        top: 10px;
        left: 8px;
        color: #999;
        transition: .4s;
    }
    fieldset button{
        width: 100%;
        border: 0;
        height: 43px;
        border-radius: 8px;
        border-bottom: 2px solid #b5b5b5;
        background-color: #599ff5;
        color: #e2ebff;
    }
    fieldset a{
        display: inline-block;
    }
    .mask{
        width: 100%;
        height: 100vh;
        background-color: #000;
        position: fixed;
        z-index: 2;
        top: 0;
        opacity: .9;
        display: none;
        pointer-events: none;
        z-index: -2;
        transition: .7s;
    }
   @media (max-width: 800px) {
    fieldset{
        width: 60%;
    }
    
   }
</style>

<script>
    let signup_login = document.querySelector(".signup_login");
    let signup = document.querySelector(".signup");
    let login = document.querySelector(".login");
    let signup_form = document.querySelector(".signup_form");
    let login_form = document.querySelector(".login_form");
    let mask = document.querySelector(".mask");
    let closesignup = document.querySelector(".closesignup");


    signup_login.addEventListener("click",()=>{
        signup_form.style.top="78px";
        mask.style.pointerEvents="auto";
        mask.style.zIndex="2";

    });
    signup.addEventListener("click", ()=>{
        login_form.style.top="-878px";
       signup_form.style.top="78px";
        mask.style.pointerEvents="auto";
    });
    login.addEventListener("click", ()=>{
        signup_form.style.top="-878px";
        login_form.style.top="88px";
        mask.style.pointerEvents="auto";
    });
    
    mask.addEventListener("click", ()=>{
        login_form.style.top="-878px";
        signup_form.style.top="-878px";
        mask.style.pointerEvents="none";
        mask.style.zIndex="-2";
    });

    closesignup.addEventListener("click", ()=>{
        login_form.style.top="-878px";
        signup_form.style.top="-878px";
        mask.style.pointerEvents="none";
        mask.style.zIndex="-2";
    });
 </script>


<script>
    let quickSearchResult = document.querySelector("#quickSearchResult");
    function fetchdata(str) {
        if(str===""){
            quickSearchResult.innerHTML = "";
            return;
        } else {
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest ();
            } else {
                c = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if(this.readyState === 4 && this.status === 200) {
                    quickSearchResult.innerHTML=this.responseText;
                }
            };
            xmlhttp.open("GET", "quick_search.php?quickSearchResultID="+str, true);
            xmlhttp.send();
            quickSearchResult.style.display="block";
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let form = this;
            let form_data = new FormData(form);
            document.querySelector('.msg').style.display= 'block'; 
            document.querySelector('.msg').innerHTML = '<center><img src=images/loader.gif width=50/> Processing, please wait.....</center>';
            document.querySelector('.btnRegister').style.display = 'none';
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'registration.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    document.querySelector('.msg').innerHTML = xhr.responseText;
                    document.querySelector('.btnRegister').style.display = 'block';
                }
            };
            xhr.send(form_data);    
        });
        
    });
</script>

<script>
document.addEventListener('DOMContentloaded',Function ()[
    document.getElementById('loginForm').addEventListener('submit', function (of) {
el.preventDefault();
let formlogin = this;
let form_data_login = new FormData(formLogin);
document.queryselector('.msglogin').style.display = 'block';
document.queryselector('.msgLogin').innerHTML = '<center><img src=images/loader.gif width=50/> Processing, please wait.....</center>';
document.querySelector('.btnLogin').style.display = 'none';

let xhrlogin = new XMLHttpRequest ();
xhrLogin.open('POST', 'login.php', true);
×hrlogin.onload = function () {
if (xhrLogin.status === 200) {
console.log(xhrLogin.responseText);
document.querySelector('•msqLogin').innerHTML = xhrLogin.responseText;
document.queryselector('.btnLogin').style.display = 'block';
}
};
xhrLogin.send(form_data_login);
});
]);
</script> 
</body>
</html>