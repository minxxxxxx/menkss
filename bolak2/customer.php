<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function confirmAction(){
            if (window.confirm("Are you sure you want to log out?")){
                console.log("User confirmed logout");

                window.location.href ="logout.php";
            }else{
                console.log("User cancelled logout");
            }
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/rose.png">
    <!--Style Css Link-->
    <link rel="stylesheet" href="css/style.css">

    <!--Font Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Niels Bulakan</title>
</head>
<body>
<style>
        header .icons button{
            font-size:2.5rem;
            color:var(--black);
            margin-left:1.5rem;
        }

        header .icons button:hover{
            color:var(--pink);
        }
    </style>
    <!--header Start-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
         <a href="#" class="logo">Flower Puff<span> Girls</span></a>
    <nav class="navbar">
        <a href="head.html">home</a>
        <a href="#about">about</a>
        <a href="#products">product</a>
        <a href="#review">review</a>
        <a href="#others">others</a>
    </nav>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <button type="button" class="fa fa-sign-out" onclick="confirmAction()"></button>
    </div>
    </header>
    <!--=========================header End=============================-->

    <!--==============Home Section Starts===========================-->
    <section class="home" id="home">
        <div class="content">
            <h3>fresh flowers</h3>
            <span> natural & beautiful flowers </span>
            <p>Introducing the exquisite and captivating beauty of our flower! This stunning creation boasts vibrant and bold petals that are sure to catch the eye of anyone who sets their gaze upon it. Its gentle fragrance fills the air with a refreshing aroma that invigorates the senses and brings a sense of tranquility to any space.</p>
            <a href="#products" class="btn">shop now</a>
        </div>
    </section>
     <!--==============Home Section Ends=============================-->

      <!--==============About section start=============================-->
    <section class="about" id="about"> 
        <h1 class="heading"><span> about </span> Us </h1>
        <div class="row">
            <div class="video-container">
                <video src="images/walkingpov.mp4" loop autoplay muted></video>
                <h3> best flower seller</h3>
            </div>
            <div class="content">
                <h3> why <span> choose us </span> </h3>
                <p> Looking for the perfect flowers for any occasion? Look no further than Flower Puff Girls! Our shop offers a wide variety of fresh flowers and arrangements, all handpicked and carefully arranged by our talented team of florists.</p>
                <p>Whether you're looking for a stunning bouquet to brighten someone's day, or you need beautiful floral arrangements for a wedding or special event, we've got you covered. We also offer delivery services to make it easy to send your loved ones the perfect gift. </p>
                <a href="#" class="btn"> learn more </a>
            </div>
        </div>
    </section>
      <!--==============About section end=============================-->

      <!--==============Icons section start=============================-->
    <section class="icons-container">
        <div class="icons">
            <img src="images/truck.png">
            <div class="info">
                <h3> free delivery </h3>
                <span> on all orders </span>
            </div>
        </div>

        <div class="icons">
            <img src="images/return-of-investment.png">
            <div class="info">
                <h3> 10days return  </h3>
                <span> moneyback guarantee  </span>
            </div>
        </div>

        <div class="icons">
            <img src="images/gift-card.png">
            <div class="info">
                <h3> offer & gifts </h3>
                <span> on all orders </span>
            </div>
        </div>

        <div class="icons">
            <img src="images/card.png">
            <div class="info">
                <h3> secure payments  </h3>
                <span>protected by paypal and visa</span>
            </div>
        </div>
    </section>
      <!--==============Icons section end=============================-->


      <!--==============Product section starts=============================-->
      <section class="product" id="products">
        <h1 class="heading"> latest <span>product</span></h1>
        <div class="box-container">

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img class="pic" src="images/yellowflower.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3> bundle 1</h3>
                    <p>hamot</p>
                    <div class="price">₱400 <span>₱500</span></div>
                </div>
            </div> 
            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img class="pic" src="images/pinkpurple.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>bundle 2</h3>
                    <p>hamot</p>
                    <div class="price">₱510 <span>₱600</span></div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-5%</span>
                <div class="image">
                    <img class="pic" src="images/tulips.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>red tulip</h3>
                    <p>hamot</p>
                    <div class="price">₱380 <span>₱400</span></div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-20%</span>
                <div class="image">
                    <img class="pic" src="images/whitetulip.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>white tulip</h3>
                    <p>hamot</p>
                    <div class="price">₱560 <span>₱700</span></div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-25%</span>
                <div class="image">
                    <img class="pic" src="images/redrose.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>red rose</h3>
                    <p>hamot</p>
                    <div class="price">₱600 <span>₱800</span></div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img class="pic" src="images/sunflower.jpg">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>sunflower</h3>
                    <p>hamot</p>
                    <div class="price">₱315 <span>₱350</span></div>
                </div>
            </div>
        </div>
      </section>
      <!--==============Product section end=============================-->

       <!--==============Review section start=============================-->
     <section class="review" id="review">
        <h1 class="heading"> customer's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>i bought flowers for my self!</p>
                <div class="user">
                    <img src="images/kyedae1.jpg" alt="">
                    <div class="user-info">
                        <h3>kyedae</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>i can buy my self some flowers</p>
                <div class="user">
                    <img src="images/chae2.jpg" alt="">
                    <div class="user-info">
                        <h3>chaeyoung</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

             <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>self love because no one cares</p>
                <div class="user">
                    <img src="images/jihyo3.jpg" alt="">
                    <div class="user-info">
                        <h3>jihyo</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>the flowers are freshly picked from farm! will buy again soon!</p>
                <div class="user">
                    <img src="images/jeongyeon.jpg" alt="">
                    <div class="user-info">
                        <h3>jeongyeon</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Their flowers are pretty ok:))</p>
                <div class="user">
                    <img src="images/boy1.jpg" alt="">
                    <div class="user-info">
                        <h3>harold</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Good item</p>
                <div class="user">
                    <img src="images/tzuyu.jpg" alt="">
                    <div class="user-info">
                        <h3>tzuyu</h3>
                        <span>satisfied customer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>
        </div>
       </section>
 <!--==============Review section end=============================-->
 
<!--=====================FOOTER SECTION START===================================-->
       <section class="footer" id="others">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#products">product</a>
                <a href="#review">review</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my favorite</a>
                 <a href="#">my order</a>
            </div>
            <div class="box">
                <h3>location</h3>
                <a href="#">philippines</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#">09989356045</a>
                <a href="#">nielbhen.humpay.1@gmail.com</a>
                <img src="images/paypal.png">  <img src="images/visa.png"> 
            </div>    
        </div>
        <div class="credit"> ⓒ <span> Mr. Niel Bhen Humpay @2023 </span> | all rights reserved</div>
       </section>
 <!--=====================FOOTER SECTION END===================================-->
    
</body>
</html>