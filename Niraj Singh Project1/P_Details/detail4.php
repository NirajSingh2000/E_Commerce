<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details - RedStore</title>
    <link rel="stylesheet" href="style.css">
     <!--------------------------------------------Google Fonts Link Named-Poppins--------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--------------------------------------------Rating font cdn Link----------------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
   <!---------------------------------CONTAINER CLASS-------------------------------------->
    <div class="container">
 <!----------------------------------------------------------NAVBAR---------------------------------------------------->
        <div class="navbar">
            <div class="logo">
              <a href="index.php">  <img src="image/NikkuLogo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="..\index.php">Home</a></li>
                    <li><a href="..\P_Details\products.php">Product</a></li>
                    <li><a href="https://snirajsingh678.github.io/NikkuBoss.github.io/">About</a></li>    
                    <li><a href="..\contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- <a href="cart.php"> <img src="image/cart.png" width="30px" height="30px"></a> -->
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">
        </div> 
    </div>

<!--------------------------------------------SINGLE PRODUCT DETAILS--------------------------------------------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="Products/P4.1.jpg" width="100%" id="ProductImg">
                <div class="small-img-row" >
                    <div class="small-img-col">
                        <img src="Products/P4.1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="Products/4.2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="Products/4.3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="Products/4.4.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Pants</p>
                <h1>Solid Men Multicolor Regular Shorts</h1>
                <h5>&#8377; 413.00</h5>
                <select class="Size" >
                   <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>  
                </select>
                    <input type="number" value="1">
                    <a href="..\checkout.php" class="btn">Buy Now</a>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>Give your Summer wardrobe a style upgrade with the HRX men's Active T-Shirt.</p>
            </div>
        </div>
    </div>
<!---------------------------------------------TITLE-------------------------------------------------------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
<!--------------------------------------------FEATURED PRODUCT--------------------------------------------------------->
<div class="small-container">
            <div class="row">
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

                <div class="col-4">
                    <img src="image/product-5.jpg">
                    <h4><u>HRX Boot Shoe for Man</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>                    
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 1399.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-6.jpg">
                    <h4><u>PUMA Stylish T-shirt for Men Round Neck</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 549.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-7.jpg">
                    <h4><u>HRX Combo Shocks for Men/Women </u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 199.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-8.jpg">
                    <h4><u>FOSSIL Black Watch for Men/Women</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 14999.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-9.jpg">
                    <h4><u>RODASTER Watch for Men</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                         <i class="fa-regular fa-star"></i> 
                    </div>
                    <p>&#8377; 699.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-10.jpg">
                    <h4><u>HRX Sport Shoe for Men/Women</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 1799.00</p>
                </div>
                
                <div class="col-4">
                    <img src="image/product-11.jpg">
                    <h4><u>RODASTER Stylish Shoe for Man/Women</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>&#8377; 549.00</p>
                </div>

                <div class="col-4">
                    <img src="image/product-12.jpg">
                    <h4><u>NIKE Track Pant For Men</u></h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>&#8377; 2199.00</p>
                </div>
            </div> 
        </div>
        

<!-------------------------------------------------FOOTER------------------------------------------------------------------->
     
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
                            <a href="https://snirajsingh678.github.io/NikkuBoss.github.io/" class="fa fa-google"></a>
                        </ul>
                     </div>
                </div>
                <hr>
                <p class="copyright">&copy; Copyright <?php echo date('Y')?> - Nikku</p>
            </div>
     </div>
     <!---------------------------------------JS FOR TOOGLE MENU------------------------------------------------>  
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
     <!--------------------------------------JS FOR PRODUCT GALLARY------------------------------------->
     <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }
        SmallImg[4].onclick = function(){
            ProductImg.src = SmallImg[4].src;
        }
     </script>
</body>
</html>