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
                  <a href="..\checkout.php"> <div class="checkout">Checkout</div></a>
        
                </div>
              </div>
            <!-- </header> -->
    </div>
    </div>
  
    <section class="shop-section">
      
      <div class="small-container">
            <div class="row row-2">
              <h2>All Products | Page-3 <hr color="red"></h2>
            
                  <select>
                      <option >Default Shorting</option>
                      <!-- <option>Short by Price</option>  -->
                  </select>
            </div>
        <div class="row">
        <div class="card-wrapper">
        
             <!-- product 17 -->
        <div class="col-4">
            <div data-id="17" class="card-item">
              <img src="Products\5.1.jpg" />
              <div class="details">
                <h3>Bottle</h3>
                <p>
                  <span
                    >Cello Puro Sports Set of 2 Assorted 900 ml Bottle (Pack of 2, Multicolor, Plastic)</span
                  >
    
                  <span class="price">Price: $299.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 18 -->
        <div class="col-4">
            <div data-id="18" class="card-item">
              <img src="Products\6.1.jpg" />
              <div class="details">
                <h3>Helmet</h3>
                <p>
                  <span >VEGA Crux OF Motorbike Helmet (Black)</span>
                  <span class="price">Price: $856.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 19 -->
        <div class="col-4">
            <div data-id="19" class="card-item">
              <img src="Products\7.1.jpg" />
              <div class="details">
                <h3>Running Shoes</h3>
                <p>
                  <span>NIKE Downshifter 11 Running Shoes For Men (Black)</span>
                  <span class="price">Price: $2397.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
            </div>
        </div>

             <!-- product 20 -->
        <div class="col-4">
            <div data-id="20" class="card-item">
              <img src="Products\8.1.jpg" />
              <div class="details">
                <h3>Track Pant</h3>
                <p>
                  <span>METRONAUT By NikkuStore Applique Men Dark Blue Track Pants</span>   
                  <span class="price">Price: $499.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
           </div>
        </div>

             <!-- product 21 -->
        <div class="col-4">
            <div data-id="21" class="card-item">
              <img src="Products\9.1.jpg" />
              <div class="details">
                <h3>Hand Exerciser</h3>
                <p>
                  <span>Strauss Adjustable Hand Grip Strengthener Hand Exerciser Forearm & Hand Gripper Hand Grip/Fitness Grip (Blue)</span>
                  <span class="price">Price: $249.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
            </div>
          </div>

             <!-- product 22 -->
        <div class="col-4">
            <div data-id="22" class="card-item">
              <img src="Products\10.1.jpg" />
              <div class="details">
                <h3>Running Shoes</h3>
                <p>
                  <span>Delta-20 White Sports,Casual,Walking,Gym, Running Shoes For Men (Black)</span>
                  <span class="price">Price: $749.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
            </div>
          </div>

             <!-- product 23 -->
        <div class="col-4">
            <div data-id="23" class="card-item">
              <img src="Products\11.1.jpg" />
              <div class="details">
                <h3>Regular Shorts</h3>
                <p>
                  <span>HIGHLANDER Solid Men Beige Regular Shorts</span >
                  <span class="price">Price: $499.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
              </div>
            </div>

             <!-- product 24 -->
        <div class="col-4">
            <div data-id="24" class="card-item">
              <img src="Products\12.1.jpg" />
              <div class="details">
                <h3>T-Shirt</h3>
                <p>
                  <span>HRX by Hrithik Roshan Printed Men Round Neck Red T-Shirt</span>
                  <span class="price">Price: $399.00</span>
                  <span class="add-to-cart-btn">Add To Cart</span>
                </p>
              </div>
           </div>
          </div>
<!---Next Page-->
          <div class="page-btn">
            <a href="..\P_Details\products.php"><span>1</span></a>
            <a href="..\Next_Page\page2.php"><span>2</span></a> 
            <span>...</span>
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