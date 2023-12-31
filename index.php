<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">


<link rel="stylesheet" href="style.css">

</head>
<body>



<header class="header fixed-top">

    <div class="container">

        <div class ="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental<span>Care.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

        <a href="#contact" class="link-btn">make appointment</a>
        
        <div id="menu-btn" class="fas fa-bars"></div>

        <div id="menu-btn" class="fa-bars"></div>

        </div>

</header>



<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-left">
                <h3>Let Us Brighten Your Smile </h3>
                <p> Gustavo Gustavo Gustavo Gustavo Gustavo </p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>

    </div>
    


</section>
    

<section class="about" id="about">
    
    <div class="container">

        <div class="row align-items-center">

            <div class="azaleiabaquis">
                <img src="img/fg227813.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum soluta vitae</p>
                dolores at molestiae accusantium deleniti enim facilis modi nostrum.</p>
                <a href="contact" class="link-btn">make appointment</a>
            </div>
        </div>

    </div>

</section>


<section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="img/blood-transfusion.png" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
        </div>

        <div class="box">
            <img src="img/donation.png" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
        </div>

    </div>
</section>


<!-- header section ends -->


</body>



<script src="js/script.js"></script>
</head>
</html><!-- home section starts -->
</div>

</div>
    
</section>   

<!--about section ends -->

<!--services section starts -->

<section class="services" id="services">

<h1 class="heading">our services</h1>

<div class="box-container container">



    <section class="process">
        
        <h1 class="heading">work process</h1>

        <div class="box-container contaienr"></div>

        <div class="box">
            <img src="img/Blood donation-amico.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
        </div>

    <div class="box">
        <img src="img/Blood donation-bro.png" alt="">
        <h3>Pediatric Dentistry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
    </div>

    <div class="box">
        <img src="img/Blood donation-cuate (1).png" alt="">
        <h3>Dental Implants</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
    </div>


    <div class="box">
        <img src="img/Blood donation-pana.png" alt="">
        <h3>Cosmetic dentistry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
    </div>

    
    <section class="reviews" id="reviews">

        <h1 class="heading"> satisfied clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>

            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>



            </div>
        </div>
    </section>







</div>


</section>
        </div>
    </div>

</div>
</section>






<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
         if(isset($message)){
            foreach($message as $message){
                echo'<p class="message">'.$message.'</p>';
            }
        }
        ?>
       <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>

</section>


</body>


<section class="footer">

<div class="box-container container">

  <div class="box">
    <i class="fas fa-phone"></i>
    <h3>phone number</h3>
    <p>+123-456-7890</p>
    <p>+123-222-3333-</p>
    </div>

    <div class="box">
    <i class="fas fa-map-marker"></i>
    <h3>our address</h3>
    <p>mumbai, india - 400104</p>
    <p>anasbhai@gmail.com</p>
    </div>

    <div class="box">
    <i class="fas fa-clock"></i>
    <h3>opening hours</h3>
    <p>00:07am to 10:00pm</p>
    <p>anasbhai@gmail.com</p>
    </div>

    <div class="box">
        <i class="fas fa-envelope-open"></i>
        <h3>email address</h3>
        <p>shaikhannas@gmail.com</p>
        <p>anasbhai@gmail.com</p>
    </div>

</div>

<script src="js/script.js"></script>
</head>
</html><!-- home section starts -->


<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> <span>mr. web designer</span> </div>
