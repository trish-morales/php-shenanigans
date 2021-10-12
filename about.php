<?php
//query
include_once 'includes/connect.php';
?>
<?php
include_once 'sections/header.html';
?>
<?php
include_once 'sections/main-nav.html';
?>

<!-- begin content -->
<body>

<div class="wrapper">
<!-- wrapper begins -->
<section id="about">
        <h1 class="hello-title">About Me</h1>
        <div class="intro-changing-text">
<h3 class="about-title">
        <?php 
        $items = Array( 'Howdy howdy howdy &#129312;','"Cool. Cool cool cool."','Hello world. &#129302;','[[REDACTED]]','"Stay a while and listen."', '"Hey! Listen!"', '"Good news, everyone!"','"Is mayonnaise an instrument?"', '"Streets ahead!"','"Its my whole i-DEAN-tity!"');
        echo $items[array_rand($items)]; ?>
</h3>
        </div>
        <div class="about-photo"><img src="img/about-me.jpg" alt="About me!"></div>
        <div class="about-text">Small about me blurb.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend ex hendrerit elementum tristique. Sed at ultrices lacus. Donec a nibh velit. Morbi egestas magna nunc, quis gravida mi ornare quis. Donec id nulla dui. Vivamus mollis euismod nisi, a consequat urna ullamcorper sed. Aenean ultricies fringilla orci, vel fringilla tortor accumsan hendrerit. Integer eu neque vitae risus dignissim posuere in quis turpis. Morbi vel consequat neque.</div>
        <a href="about.php" class="btn-about-link">
            <div class="about-btn ">RESUME</div>
        </a>
</section>

Title ideas (inspired by buzzfeed) <br><br>
Cool And Random Facts About Me That Happen To Be True

10 Arguably true Facts About Me

10 Facts About Me That Reveal How Old I Am

9 Facts And A Lie. (Just kidding, they're all true)

10 Facts About me That Tells You Which Type of Bread I am.

Read These Facts To Find out What Pizza I am.
<section id="about-facts">
        <h1 class="hello-title">Some Fun facts</h1>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend ex hendrerit elementum tristique. Sed at ultrices lacus. Donec a nibh velit. Morbi egestas magna nunc, quis gravida mi ornare quis. Donec id nulla dui. </p>
        </div>
</section>


<!-- wrapper ends -->
</div>


<section id="about-me-cta">
        <h1 class="hello-title">Interested in working together?</h1>
        <div class="about-fact-box">
                <p class="about-fact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend ex hendrerit elementum tristique. Sed at ultrices lacus. Donec a nibh velit. Morbi egestas magna nunc, quis gravida mi ornare quis. Donec id nulla dui. </p>
                <a href="about.php" class="btn-about-link">
            <div class="about-btn ">contact</div>
        </a>
        </div>
</section>


<?php
include_once 'sections/footer.php';
?>


</body>

<script src="js/lightbox.js"></script>
<script src="js/hamburger.js"></script>


</html>





