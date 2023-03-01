<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script
      src="https://kit.fontawesome.com/8f27d68390.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="cartStyle.css" />
    <title>Add To Cart | NikkuStore</title>
  </head>
  <body>
          <div class="preloader"></div>
          <div class="container">
          <div class="navbar">
            <div class="logo">
              <a href="..\index.php">  <img src="img/NikkuLogo.png" width="125px"></a>
            </div>

          <nav>
            <ul id="MenuItems">
                <li><a href="..\index.php">Home</a></li>
                <li><a href="https://snirajsingh678.github.io/NikkuBoss.github.io/">About</a></li>
                <li><a href="..\contact.php">Contact Us</a></li>
              
            </ul>
        </nav>
    <!-- <header> -->
              
              <div class="cart-box">
                <div class="cart-icon">
                  <i class="fas fa-cart-arrow-down fa-2x"></i>
                </div>
                <div class="whole-cart-window hide">
                  <h2>Shopping Bag</h2>
                  <div class="cart-wrapper">
                    
                  </div>
                  <div class="subtotal">Subtotal: $0.00</div>
                  <a href="..\checkout.php"><div class="checkout">Checkout</div></a>
        
                </div>
              </div>
            <!-- </header> -->
        </div>
    </div>
    
    
    <section class="shop-section">
      <div class="small-container">
        <div class="row row-2">
          <h2>All Products | Page-2 <hr color="red"></h2>
         
          <select>
              <option>Default Shorting</option>
              <!-- <option>Short by Price</option> 
              <option>Short by Rating</option> -->
          </select>
         </div>
        <div class="row">
      <div class="card-wrapper">
        
        <!-- product 9 -->
        <div class="col-4">
        <div data-id="9" class="card-item">
          <img src="img/pic9.jpg" />
          <div class="details">
            <h3>Analog Watch</h3>
            <p>
              <span>Rodaster Mens Analog Watch (Black).</span >
              <span class="price">Price: $36.22</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
          </div>
        </div>
         <!-- product 10 -->
         <div class="col-4">
          <div data-id="10" class="card-item">
            <img src="img/pic10.jpg" />
            <div class="details">
              <h3>Shoes</h3>
              <p>
                <span>HRX Sport Shoe for Men/Women</span>
                <span class="price">Price: $1799.00</span>
                <span class="add-to-cart-btn">Add To Cart</span>
              </p>
            </div>
          </div>
        </div>
           <!-- product 11 -->
        <div class="col-4">
          <div data-id="11" class="card-item">
            <img src="img/pic11.jpg" />
            <div class="details">
              <h3>RODASTER Shoes</h3>
              <p>
                <span>RODASTER Stylish Shoe for Man/Women</span>
                <span class="price">Price: $549.00</span>
                <span class="add-to-cart-btn">Add To Cart</span>
              </p>
            </div>
            </div>
          </div>
           <!-- product 12 -->
        <div class="col-4">
          <div data-id="12" class="card-item">
            <img src="img\pic12.jpg" />
            <div class="details">
              <h3>Track Pant</h3>
              <p>
                <span>NIKE Track Pant For Men</span>
                <span class="price">Price: $2199.00</span>
                <span class="add-to-cart-btn">Add To Cart</span>
              </p>
            </div>
           </div>
        </div>

           <!-- product 13 -->
        <div class="col-4">
            <div data-id="13" class="card-item">
              <img src="Products\P1.1.jpg" />
              <div class="details">
                <h3>Gloves</h3>
                <p>
                  <span>AutoKraftZ Most Popular Sun UV Protection Arm Sleeves for Men Women Cycling Gloves (Black)</span>
                  <span class="price">Price: $100.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 14 -->
        <div class="col-4">
            <div data-id="14" class="card-item">
              <img src="Products\P2.1.jpg" />
              <div class="details">
                <h3>DIZO Watch</h3>
                <p>
                  <span>DIZO Watch D 1.8 inch Dynamic display with 550nits brightness (by realme techLife)</span>
                  <span class="price">Price: $2499.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 15 -->
        <div class="col-4">
            <div data-id="15" class="card-item">
            <img src="Products\P3.1.jpg" />
              <div class="details">
                <h3>Football</h3>
                <p>
                  <span>NIVIA Storm Football - Size: 5  (Pack of 1, Multicolor)</span>
                  <span class="price">Price: $419.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 16 -->
        <div class="col-4">
            <div data-id="16" class="card-item">
              <img src="Products\P4.1.jpg" />
              <div class="details">
                <h3>Regular Shorts</h3>
                <p>
                  <span>Solid Men Multicolor Regular Shorts</span>
                  <span class="price">Price: $413.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

<!---Next Page-->
          <div class="page-btn">
            <a href="..\P_Details\products.php"><span>1</span></a>
           <span>...</span> 
            <a href="..\Next_Page\page3.php"><span>3</span></a>
            <a href="..\index.php"> <span>&#8594;</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>
    <!-- Footer -->
    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
               <h3>Download our App</h3>
                <p>Download App for Android and ios mobile Phone.</p>
                <div class="app-logo">
                    <img src="img/play-store.png">
                    <img src="img/app-store.png" >
                </div>
            </div>
            <div class="footer-col-2">
                <img src="img/NikkuLogo.png">
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
            <p class="copyright">&#169; Copyright 2022 - Nikku</p>
    </div>
</div>
    <script src="cartScript.js"></script>
    <!---Script for Preloader--->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function(){
                loader.style.display = "none";
        })
     </script>
  </body>
</html>