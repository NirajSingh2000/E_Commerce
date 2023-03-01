<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM register WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO register (username,  password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>


<!--HTML FILES-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts - RedStore</title>
    <link rel="stylesheet" href="style.css">
     <!-------------------------Google Fonts Link Named-Poppins------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--------------------------------------------Rating font cdn Link----------------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
</head>
<body>
<div id="preloader"></div>  
   <!---------------------------------CONTAINER CLASS-------------------------------------->
    <div class="container">
 <!-----------------------------NAVBAR-------------------------------->
        <div class="navbar">
            <div class="logo">
              <a href="index.php">  <img src="image/NikkuLogo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">   
                <li><a href="https://snirajsingh678.github.io/NikkuBoss.github.io/">About</a></li>           
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">SignUp</a></li> 
                    <li><a href="Admin Login.php">Admin</a></li>                 
                </ul>
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
                         
                           <h3 style="color:red; font-size:30px;"><u>Register Here</u></h3>
                           
                        </div>    
                             <form id="RegForm" action="" method="post">
                           
                           <input type="text" name="username" id="inputEmail4" placeholder=" Email or Username" required>
                           
                           <input type="password"  name="password" id="inputPassword4" placeholder="New Password">  
                          
                           <input type="password" name="confirm_password" id="inputPassword" placeholder="Confirm Password">

                          <button type="submit" class="btn">Register Now</button>
                          <a href="login.php">Already a user? <b><u>Login</u></b></a>                 
                       </form>
                             
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--------------------FOOTER----------------------------------------->
     
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
  
     
     <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px"
            }
        }
     </script>
<!---Script for Preloader--->
<script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function(){
                loader.style.display = "none";
        })
     </script>
</body>
</html>