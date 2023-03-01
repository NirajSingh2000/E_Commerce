<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NikkuStore | E-Commerce Website.</title>
    <link rel="stylesheet" href="style.css">
     <!--------------------------------------------Google Fonts Link Named-Poppins--------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-----------------------Rating font cdn Link------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!---------------------------------------->
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


<!---------------------------------------->

</head>
    <body>
         <div id="preloader"></div>
     <!---------------------------NAVBAR------------------------------>
         <div class="header">
            <div class="container">
                <div class="navbar" id="nav">
                     <div class="logo">
                        <a href="https://snirajsingh678.github.io/NikkuBoss.github.io/">  <img src="image/NikkuLogo.png" width="125px"></a>
                    </div>        
                <nav>         
                    <ul id="MenuItems">                               
                        <li><a href=".\P_Details\products.php">All Products</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="https://snirajsingh678.github.io/NikkuBoss.github.io/">About</a></li>    
                    </ul>

                    <ul id="MenuItems">
                        <li> <a class="nav-link" href="logout.php" title="Log Out"> <i class="fa fa-sign-out" style="font-size:22px;color:red"></i> <?php echo " " . $_SESSION['username'] ?></a></li> 
                    </ul>
                </nav>          
                    <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">
           
                </div>
        <?php echo "Welcome &#128525; ". $_SESSION['username']?> <h5 style="color :#555"; > You are sucessfully Login.</h5>
       
        <!-----------------ROW AND COL-2-------------------> 
            <div class="row">
                <div class="col-2">
                    <h2 style="color:rgb(53, 53, 155);">Give Your<br> A New Style!</h2>
                     <p>Success isn't always about greatness consistency. Consistent <br>hard work gains success. Greatness will come.</p>
                    <a href="https://snirajsingh678.github.io/NikkuBoss.github.io/" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="image/image1.png">
                 </div>

                </div>
            </div>
        </div>
      <!------------------------featured categories------------------------->
            <div class="categories">             
                <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <img src="image/category-1.jpg">
                        </div>
                        <div class="col-3">
                            <img src="image/category-2.jpg" >
                        </div>
                        <div class="col-3">
                            <img src="image/category-3.jpg" >
                        </div>
                    </div>
                </div>
            </div>
 <!-----------------------FEATURED PRODUCT-------------------------->
        <div class="small-container">
            <h2 class="title">Latest Products</h2>
            <div class="row">
               <!--Product 1--->
            <div class="col-4">
                   <a href=".\P_Details\detail1.php"><img src="Products\P1.1.jpg"></a> 
                    <a href=".\P_Details\detail1.php"><h4><u>AutoKraftZ Most Popular Sun UV Protection Arm Sleeves for Men Women Cycling Gloves  (Black)</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 100.00</p>
                </div>
                <!--Product 2-->
            <div class="col-4">
                    <a href=".\P_Details\detail2.php"><img src="Products\P2.1.jpg"></a>
                    <a href=".\P_Details\detail2.php"> <h4><u>DIZO Watch D 1.8 inch Dynamic display with 550nits brightness (by realme techLife)</u></h4></a>
                <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       <i class="fa-regular fa-star"></i>
                </div>
                        <p>&#8377; 2499.00</p>
            </div>
                 <!--Product 3-->
                <div class="col-4">
                     <a href=".\P_Details\detail3.php"> <img src="Products\P3.1.jpg"></a>
                     <a href=".\P_Details\detail3.php"> <h4><u>NIVIA Storm Football - Size: 5  (Pack of 1, Multicolor)</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 419.00</p>
                </div>
                 <!--Product 4-->
                <div class="col-4">
                    <a href=".\P_Details\detail4.php"> <img src="Products\P4.1.jpg"></a>
                     <a href=".\P_Details\detail4.php">  <h4><u>Solid Men Multicolor Regular Shorts</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 413.00</p>
                </div>
                 <!--Product 5-->
                <div class="col-4">
                        <a href=".\P_Details\detail5.php"><img src="Products\5.1.jpg"></a>
                        <a href=".\P_Details\detail5.php"><h4><u>Cello Puro Sports Set of 2 Assorted 900 ml Bottle  (Pack of 2, Multicolor, Plastic)</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>                    
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 299.00</p>
                </div>
                 <!--Product 6-->
                <div class="col-4">
                        <a href=".\P_Details\detail6.php"><img src="Products\6.1.jpg"></a>
                        <a href=".\P_Details\detail6.php"><h4><u>VEGA Crux OF Motorbike Helmet  (Black)</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 856.00</p>
                </div>
                 <!--Product 7-->
                <div class="col-4">
                        <a href=".\P_Details\detail7.php"> <img src="Products\7.1.jpg"></a>
                        <a href=".\P_Details\detail7.php"> <h4><u>NIKE Downshifter 11 Running Shoes For Men  (Black) </u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 2397.00</p>
                </div>
                 <!--Product 8-->
                <div class="col-4">
                        <a href=".\P_Details\detail8.php"> <img src="Products\8.1.jpg"></a>
                         <a href=".\P_Details\detail8.php">  <h4><u>METRONAUT By NikkuStore Applique Men Dark Blue Track Pants</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 499.00</p>
                </div>
                 <!--Product 9-->
                <div class="col-4">
                        <a href=".\P_Details\detail9.php"> <img src="Products\9.1.jpg"></a>
                         <a href=".\P_Details\detail9.php"> <h4><u>Strauss Adjustable Hand Grip Strengthener Hand Exerciser Forearm & Hand Gripper Hand Grip/Fitness Grip  (Blue)</u></h4></a>
                    <div class="rating">                     
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                         <i class="fa-regular fa-star"></i> 
                    </div>
                    <p>&#8377; 249.00</p>
                </div>
                 <!--Product 10-->
                <div class="col-4">
                     <a href=".\P_Details\detail10.php"> <img src="Products\10.1.jpg"></a>
                     <a href=".\P_Details\detail10.php"> <h4><u>Delta-20 White Sports,Casual,Walking,Gym, Running Shoes For Men  (White)</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 749.00</p>
                </div>
                 <!--Product 11-->
                <div class="col-4">
                     <a href=".\P_Details\detail11.php"> <img src="Products\11.1.jpg"></a>
                      <a href=".\P_Details\detail11.php"> <h4><u>HIGHLANDER Solid Men Beige Regular Shorts</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 499.00</p>
                </div>
                 <!--Product 12-->
                <div class="col-4">
                        <a href=".\P_Details\detail12.php"> <img src="Products\12.1.jpg"></a>
                        <a href=".\P_Details\detail12.php"> <h4><u>HRX by Hrithik Roshan Printed Men Round Neck Red T-Shirt</u></h4></a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 399.00</p>
                </div>
            </div>
        </div>

<!------------------------Latest Products--------------------------------->

            <h2 class="title">New Arrivals..</h2>
           <a href=".\P_Details\products.php"> <h4 style="text-align:right;color:carbon; font-size:20px;"><u>See more...</u></h4></a>     
                <div class="row">   
                     <!--Product 1-->  
                    <div class="col-4">
                        <img src="image/product-1.jpg">
                        <h4><u>PUMA Red Printed T-shirt</u></h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p>&#8377; 499.00</p>
                    </div>
                     <!--Product 2-->
                    <div class="col-4">
                        <img src="image/product-2.jpg">
                        <h4><u>HRX Black Shoe for Man</u></h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                           <i class="fa-regular fa-star"></i>
                        </div>
                        <p>&#8377; 749.00</p>
                    </div>
                     <!--Product 3-->
                    <div class="col-4">
                        <img src="image/product-3.jpg">
                        <h4><u>BENETTON Track Pant</u></h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>                          
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>&#8377; 1199.00</p>
                    </div>
                     <!--Product 4-->
                    <div class="col-4">
                    <img src="image/product-4.jpg">
                    <h4><u>PUMA Polo Neck Black T-shirt</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 1499.00</p>
                </div>
            </div>
        </div>
    <!--OFFERS-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="image/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on <b><a href="index.php">RedStore</a></b></p>
                    <h1>Smart Band 4</h1>
                    <small>The <b>Mi Smart Band 4</b> features a 39.9% larger (then Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small><p>
                    <a href="https://www.mi.com/in/mi-smart-band-4/" class="btn"><span  id="ofr">Buy Now &#8594;</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------TESTIMONIAL------------------------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Love it! Really happy with this Site, I use it Always for my Shopping.❣️🤟👌</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="image/user2.jpeg">
                    <h3>Niraj Kr. Singh</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Very Disappointed. Some times the site server is slow Or the Server is Down.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i> 
                    </div>
                    <img src="image/user-1.png">
                    <h3>Shalvi</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Excellent!, this site saves my money. in this site the price of Products are too less in comprasion to others.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <img src="image/user3.jpeg">
                    <h3>Rahul Raj</h3>
                </div>
         </div>
    </div>
<!-----------------------------BRANDS------------------------------------>
    <div class="brands">
        <div class="small-container">
             <div class="row">
                    <div class="col-5">
                        <a href="https://en.wikipedia.org/wiki/Godrej_Group"> <img src="image/logo-godrej.png"></a>
                    </div>
                    <div class="col-5">
                        <a href="https://en.wikipedia.org/wiki/Oppo"> <img src="image/logo-oppo.png"></a>
                    </div>
                    <div class="col-5">
                        <a href="https://en.wikipedia.org/wiki/Coca-Cola"> <img src="image/logo-coca-cola.png"></a>
                    </div>
                    <div class="col-5">
                        <a href="https://en.wikipedia.org/wiki/PayPal">  <img src="image/logo-paypal.png"></a>
                    </div>
                    <div class="col-5">
                        <a href="https://en.wikipedia.org/wiki/Philips"><img src="image/logo-philips.png"></a>
                    </div>                  
            </div>
        </div>
    </div>
<!---------------------------FOOTER-------------------------------------->
     
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                       <h3>Download our App</h3>
                        <p>Download App for Android and ios mobile Phone.</p>
                        <div class="app-logo">
                           <a href="https://m.apkpure.com/red-shop-india/com.wRedShop_9333876/download?from=details"> <img src="image/play-store.png"></a>
                           <a href="https://m.apkpure.com/red-shop-india/com.wRedShop_9333876/download?from=details"> <img src="image/app-store.png" alt=""></a>
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
                     </div>
                </div>
                <hr>
                    <p class="copyright">&copy; Copyright <?php echo date('Y')?> - Nikku</p>
            </div>
     </div>
            <!---Script for Android Menu Items-->
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