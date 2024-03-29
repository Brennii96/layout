<?php
//https://stackoverflow.com/questions/6287903/how-to-properly-add-csrf-token-using-php

//set token
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

//verify token
if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
        // Proceed to process the form data
    } else {
        // Log this as a warning and keep an eye on these attempts
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="flickity.min.css"/>
    <title>Book Printing UK | We make Book Printing and Publishing Simple</title>
</head>
<body>
<div class="global-container">
    <div class="preheader">
        <div class="pre-item right">Request Free Quote Now</div>
        <div class="pre-item right desktop">Call Us Now: <a href="tel:01733898102">01733 898102</a></div>
        <div class="pre-item right desktop">Request Free Quote Now</div>
    </div>
    <nav class="flex-container sticky desktop">
        <div class="logo">
            <a href="#">
                <img class="lazy" data-src="//s3-eu-west-1.amazonaws.com/bonacia-sites/book-printing-uk/logos/bpuk-logo.svg" alt="Book Printing UK"/>
            </a>
        </div>
        <ul class="navigation">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Products</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="mobile">
        <header class="header">
            <div class="burger">
                <div class="burger_patty"></div>
                <div class="burger_patty"></div>
                <div class="burger_patty"></div>
            </div>
            <nav class="menu">
                <div class="menu_brand">
                    <a href="">
                        <img class="lazy" data-src="//s3-eu-west-1.amazonaws.com/bonacia-sites/book-printing-uk/logos/bpuk-logo.svg" alt="Book Printing UK"/>
                    </a>
                </div>
                <ul class="menu_list">
                    <li class="menu_item">
                        <a href="" class="menu_link">Home</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu_link">About</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu_link">Products</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu_link">Services</a>
                    </li>
                    <li class="menu_item">
                        <a href="https://twitter.com/ettrics" target="_blank" class="menu_link menu_link--social">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="https://dribbble.com/ettrics" target="_blank" class="menu_link menu_link--social">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <main class="page-container">
        <section class="hero">
            <div class="hero-image">
                <div class="hero-text">
                    <h1>Welcome to Book Printing UK</h1>
                    <p>
                        We make book printing simple and stress free. With Book Printing
                        UK you are guaranteed great quality printed books, with an
                        exceptional personal service at an excellent price.
                    </p>
                    <p class="light">
                        Unlike other printers, there's no waiting - our free instant quote calculator will give you a
                        quote, well... instantly. Just answer a few questions for an instant quote.
                    </p>
                    <button class="cta-green">FREE QUOTE</button>
                </div>
            </div>
        </section>
        <section class="page-content">
            <article>
                <h2>Why Book Printing UK?</h2>
                <div class="header-seperator"></div>
                <p>
                    At Book Printing UK we don't just want to print your book, we want to get to
                    know the person behind it and give them the best print journey along the way!
        
                    You are as important to us as your print project and that's why we will adjust our service to best suit you
                    and your requirements. <em>"Do your best for every customer...and then do more"</em>, and that's what we aim
                    to achieve at Book Printing UK.
                </p>
            </article>
            <div class="awards-container">
                <div class="box">
                    <div class="content">
                        <h2>Digital Printing Award</h2>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2>Digital Printing Award</h2>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2>Digital Printing Award</h2>
                    </div>
                </div>
            </div>
            <div class="main-gallery">
                    <div class="gallery-cell">
                      <div class="testimonial">
                          <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Joe Smith, CEO of Cubix</span>
                      </div>
                    </div>
                    <div class="gallery-cell">
                       <div class="testimonial">
                          <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/chexee/128.jpg">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Lisa Jones, Freelance Web Developer</span>
                      </div>
                    </div>
                    <div class="gallery-cell">
                          <div class="testimonial">
                          <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/andretacuyan/128.jpg">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
                      </div>
                    </div>
                  </div>                
        </section>
    </main>
    <div id="cookieConsent">
        <div id="closeCookieConsent">x</div>
        This website is using cookies.
        <a href="/cookies/" target="_blank">More info</a>.
        <a class="cookieConsentOK">That's Fine</a>
    </div>
    <footer id="footer">
        <div class="copyright">
            <p>
                BookPrintingUK.com Copyright © |
                <a href="/privacy-policy/">Privacy Policy</a> |
                <a href="/terms-conditions/">Terms and Conditions</a> | All Rights
                Reserved.
            </p>
        </div>
    </footer>
</div>
<script src="flickity.min.js"></script>
<script src="script.js"></script>
<script src="lazy.js"></script>
</body>
</html>
