<?php

require("connection.php");
if(isset($_POST['signin']))
{
$query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
    session_start();
 $_SESSION['AdminLoginId']=$_POST['AdminName'];
 header("location: admin.php");  
}
else
{
 echo "<script>alert('Password is Incorrect');</script>";
}

}
?>
<!--HTML FILES-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - RedStore</title>
    <link rel="stylesheet" href="style.css">
     <!--------------------------------------------Google Fonts Link Named-Poppins--------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--------------------------------------------Rating font cdn Link----------------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 #preloader{
    background: #fff url(image/preloader.gif) no-repeat center center;
   background-size: 15%;
    height: 100vh;
    width: 100%;
    position:fixed;
    z-index: 100;
 }
</style>
<!---------------------------------------------------------->
<style>
.navbar{ height: 100px;
    
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
      
      #MenuItems a{
        text-decoration: none;
        color: #2d3436;
        text-transform: uppercase;
        font-weight: bolder;
        position: relative;
        text-shadow: 2px 2px 3px #0984e3;
      }
      #MenuItems a:before{
        content: "";
        position: absolute;
        left: 0;
        top: 100%;
        width: 0%;
        height: 2px;
        background-color: #000;
        transition: all 0.5s linear;
      }
      #MenuItems a:hover:before{
        width:100%;
        background-color:red;
      }
      </style>
<!---------------------------------------------------------->
</head>
<body>
<div id="preloader"></div> 
  
    <div class="container">
        <div class="navbar">
            <div class="logo">
              <a href="index.php">  <img src="image/NikkuLogo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">SignUp</a></li>
                    <li><a href="Admin Login.php">Admin</a></li>
                               
                </ul>
            </nav>
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">
        </div> 
    </div>
<!-------------------------ACCOUNT PAGE------------------------------------>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="image/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                           <h3 style="color: Blue; font-size:35px;"><u>Admin Login</u></h3>
                        </div>
                        <form method="post">  
                        <i class="fas fa-user"></i>
                            <input type="text" name="AdminName" placeholder="Admin Username" > 
                            <i class="fas fa-lock"></i>
                            <input type="password" name="AdminPassword"  placeholder="Admin Password" >
                            <button type="submit" name="signin" class="btn">Admin Login</button>
        
                         </form>
                       
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

<!----------------------------FOOTER-------------------------------------->
     
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                       <h3>Download our App</h3>
                        <p>Download App for Android and ios mobile Phone.</p>
                        <div class="app-logo">
                            <img src="image/play-store.png">
                            <img src="image/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="image/NikkuLogo.png">
                         <p>Our Purpose is to sustainably make the pleasure and benefits of sports Accessible to the Many.</p>
                     </div>
                     
                     <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <a href="https://www.facebook.com/profile.php?id=100007958238731" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/snikku5912/" class="fa fa-instagram"></a>
                            <a href="https://twitter.com/SNikku5912?t=HHMK9rLTPO_3y3ou7y_-AQ&s=09" class="fa fa-twitter"></a>
                            <br>
                            <a href="http://www.linkedin.com/in/niraj-singh-90b220191" class="fa fa-linkedin"></a>
                            <a href="mailto:snirajsingh678@gmail.com" class="fa fa-envelope"></a>
                            <a href="https://nirajsingh2000.github.io/My_Portfolio/" class="fa fa-google"></a>
                        </ul>
                        </ul>
                     </div>
                </div>
                <hr>
                <p class="copyright">&copy; Copyright <?php echo date('Y')?> - Nikku</p>
            </div>
     </div>
  <!---Script for Preloader--->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function(){
                loader.style.display = "none";
        })
     </script>
</body>
</html>