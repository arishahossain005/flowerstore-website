<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/m12.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p> ‘Floweret’ is glad to give quality flowers and plants to our customers. Our retail online shop opened in early 2022 and since then has been leading in the business providing fresh and beautiful flowers for your home, special occasions and celebrations.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Propelled by our affection for flowers and energy about nature, it is our obsession to make creative and noteworthy plant and new flower courses of action. We trust that the best, freshest flowers deliver the most noteworthy presentations.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/m3.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/m11.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are few bunch of planners specialising in curating the best quality flowers along with a satisfactory service all around the town.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.jpg" alt="">
            <p>Provides good quality flower. Have great collection and responsive customer service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Karim Khan</h3>
        </div>

        <div class="box">
            <img src="images/pic2.jpg" alt="">
            <p>My go to flower shop. Ordered many times and always got top noth service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Sara Chy</h3>
        </div>

        <div class="box">
            <img src="images/pic3.jpg" alt="">
            <p>Satisfied with their quality and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3></h3>
        </div>

        <div class="box">
            <img src="images/pic4.jpg" alt="">
            <p>Highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ema Khan</h3>
        </div>

        <div class="box">
            <img src="images/pic5.jpg" alt="">
            <p>fresh beautiful flowers at a reasonable price.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Ifad Rahim</h3>
        </div>


    </div>

</section> 











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>