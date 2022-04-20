<?php 


include("test.php"); 
//print_r($row); 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Treats | Order food online</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="menu_style.css">-

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Tasty Treats</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">speciality</a>
            <a href="#popular">popular</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#speciality">order</a>
            <a href="subscribe.html">subscription</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>food made with love</h3>
            <p>“food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.”</p>
            <a href="#speciality" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- speciality section starts  -->

    <section class="speciality" id="speciality">

        <h1 class="heading"> <span>Categories</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="images/s-img-1.jpg" alt="" onclick="window.location='burgers.html'" ;>
                <div class="content">
                    <img src="images/s-1.png" alt="">
                    <h3>tasty burger</h3>
                    <p>Choose from a large variety of 'Burgers'</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/fish-thali.jpg" alt="" onclick="window.location='lunch.html'" ;>
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>lunch</h3>
                    <p>Feeling hungry? </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/icecream.webp" alt="" onclick="window.location='icecream.html'" ;>
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>cold ice-cream</h3>
                    <p>Real IceCream for the real IceCream lovers..</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.jpg" alt="" onclick="window.location='softDrink.html'" ;>
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>cold drinks</h3>
                    <p>Just Chill!!!!</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-5.jpg" alt="" onclick="window.location='Sweets.html'" ;>
                <div class="content">
                    <img src="images/s-5.png" alt="">
                    <h3>tasty sweets</h3>
                    <p>Designed To Be Sweet, Made For Your Palate.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.jpg" alt="" onclick="window.location='Breakfast.html'" ;>
                <div class="content">
                    <img src="images/s-6.png" alt="">
                    <h3>healty breakfast</h3>
                    <p>Get cracking healthy breakfast every morning here. Ready, set, breakfast!</p>
                </div>
            </div>

        </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

            <?php

                require "test.php";
                $query = "SELECT * FROM products";
                $query_run = mysqli_query($con,$query);
                $check_products = mysqli_num_rows($query_run) > 0;
                
                if($check_products){
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                            <div class="box">
                <span class="price">₹<?php echo $row['price']; ?></span>
                <img src="uploaded_img/<?php echo $row['image']; ?>" alt="product Image">
                <h3><?php echo $row['name']; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a onClick="window.location.href='<?php echo $row['link'] ?>';" class="btn">order now</a>
            </div>
                        <?php
                       
                    }
                }
                else{
                    echo "not found";
                }

            ?>

            
            <!-- <div class="box">
                <span class="price">₹170</span>
                <img src="images/fish-thali.jpg" alt="">
                <h3>Goan Fish Thaali</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a onClick="window.location.href='https://rzp.io/l/k6ClYKS7yt';" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹45</span>
                <img src="images/mint.webp" alt="">
                <h3>Mint Chocolate Chip</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a onClick="window.location.href='https://rzp.io/l/YGgC0t9';" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹30</span>
                <img src="images/juice.jpg" alt="">
                <h3>Fruit Juice</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="https://rzp.io/l/SqAMzntUyA" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹110</span>
                <img src="images/Mango Dessert.jpg" alt="">
                <h3>Mango Dessert</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="https://rzp.io/l/i3RZKNV" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹150</span>
                <img src="images/masala.jpg" alt="">
                <h3>Masala Bhindi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="https://rzp.io/l/nwNdgOx" class="btn">order now</a>
            </div> -->

        </div>

    </section>

    <!-- popular section ends -->

    <!-- steps section starts  -->

    <div class="step-container">

        <h1 class="heading">how it <span>works</span></h1>

        <section class="steps">

            <div class="box">
                <img src="images/step-1.jpg" alt="">
                <h3>choose your favorite food</h3>
            </div>
            <div class="box">
                <img src="images/step-2.jpg" alt="">
                <h3>free and fast delivery</h3>
            </div>
            <div class="box">
                <img src="images/step-3.jpg" alt="">
                <h3>easy payments methods</h3>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>and finally, enjoy your food</h3>
            </div>

        </section>

    </div>

    <!-- steps section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading"> our food <span> gallery </span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/fish-thali.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>“Food Is Not Simply Organic Fuel To Keep Body And Soul Together, It Is A Perishable Art That Must Be Savoured At The Peak Of Perfection.”</p>

                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>Parishram Naik</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service.</p>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>Yash FalDessai</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>The food was excellent and so was the service. I had the Chilli Burger With Pepper Relish which was awesome. My girlfriend had a Stuffed Bean Burger which was also very good.</p>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>Gaurav Dhamsekar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>We enjoyed the Dahi Chicken and Paneer achaari. Perfect service.</p>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>Rishikesh Salunke</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>This has been a very easy and convinient application to use</p>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>Manthan Gaonkar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Love the APP- very well laid out,easy to navigate and intuitive.</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- order section starts  -->



    <!-- order section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="lol.html" class="btn">facebook</a>
            <a href="lol.html" class="btn">twitter</a>
            <a href="lol.html" class="btn">instagram</a>
            <a href="lol.html" class="btn">pinterest</a>
        </div>

        <h1 class="credit"> created by <span>Revengers</span> | all rights reserved! </h1>

    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>


    <script src="script.js"></script>


</body>

</html>