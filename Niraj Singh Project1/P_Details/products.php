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
  <div id="preloader"></div>
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
              <!-- <h1>Shop Online</h1> -->
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
          <h2>All Products <hr color="red"></h2>
         
          <select>
              <option>Default Shorting</option>
              <option>Short by Price</option> 
              <option>Short by Rating</option>
             
          </select>
         </div>
        <div class="row">
      <div class="card-wrapper">
        <!-- item 1 -->
        <div class="col-4">
        <div data-id="1" class="card-item">
          <img class="img" src="img/pic1.jpeg" />
          <div class="details">
            <h3>T-Shirt</h3>
            <p>
              <span>PUMA Red Printed T-shirt</span>
              <span class="price">Price: $499.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
        </div>
        <!-- item 2 -->
        <div class="col-4">
        <div data-id="2" class="card-item">
          <img src="img/pic2.jpg" />
          <div class="details">
            <h3>Shoes</h3>
            <p>
              <span> HRX Black Shoe for Man</span>
              <span class="price">Price: $749.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 3 -->
        <div class="col-4">
        <div data-id="3" class="card-item">
          <img src="img/pic3.jpg" />
          <div class="details">
            <h3>Track Pant</h3>
            <p>
              <span>BENETTON Track Pant</span>
              <span class="price">Price: $1199.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 4 -->
        <div class="col-4">
        <div data-id="4" class="card-item">
          <img src="img/pic4.jpg" />
          <div class="details">
            <h3>T-shirt</h3>
            <p>
              <span>PUMA Polo Neck Black T-shirt</span>
              <span class="price">Price: $1499.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 5 -->
        <div class="col-4">
        <div data-id="5" class="card-item">
          <img src="img/pic5.jpg" />
          <div class="details">
            <h3>Shoes</h3>
            <p>
              <span>HRX Boot Shoe for Man</span>
              <span class="price">Price: $1399.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 6 -->
        <div class="col-4">
        <div data-id="6" class="card-item">
          <img src="img/pic6.jpg" />
          <div class="details">
            <h3>T-shirt</h3>
            <p>
              <span>PUMA Stylish T-shirt for Men Round Neck</span>
              <span class="price">Price: $549.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 7 -->
        <div class="col-4">
        <div data-id="7" class="card-item">
          <img src="img/pic7.jpg" />
          <div class="details">
            <h3>Shocks</h3>
            <p>
              <span>HRX Combo Shocks for Men/Women</span>
              <span class="price">Price: $199.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

        <!-- product 8 -->
        <div class="col-4">
        <div data-id="8" class="card-item">
          <img src="img/pic8.jpg" />
          <div class="details">
            <h3>Watch</h3>
            <p>
              <span>FOSSIL Black Watch for Men/Women</span>
              <span class="price">Price: $14999.00</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>

          <div class="page-btn">
            <span>...</span></a>
           <a href="..\Next_Page\page2.php"><span>2</span> </a>
            <a href="..\Next_Page\page3.php"><span>3</span></a>
            <a href="index.php"> <span>&#8594;</span></a>
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