<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <!--fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Find Your Dream Job! at JobSeeker</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar">
        <h2 class="navbar-logo"><a href="#">JobSeeker</a></h2>
        <div class="navbar-menu">
            <a href="index1.php">Jobs</a>
            <a href="#companies">Companies</a>
            <a href="#testimonial">Testimonial</a>
            <a href="#blog">Blogs</a>
            <a href="application.php">Applications</a>
            <a href="logout.php">Logout</a>
        </div>
        <div class="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!--header-->
    <header>
        <img src="images/header_fub.jpg" width="100%" height="80%">
        <h1 class="header-title">
            FIND YOUR <br><span>PERFECT JOB</span><br>EASILY
        </h1>
        
        
    </header>
   
    <!--join-->
    <section class="join">
        <div class="join-detail">
            <h1 class="section-title">LETS START YOUR NEW JOB WITH US</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla accusantium, a nobis ipsum quisquam temporibus velit aperiam distinctio consequatur </p>
        </div>
        <button class="join-button" onclick="location.href='index1.php'">Find Now</button>
    </section>
    <!--featured company-->
    <section class="featured" id="companies">
        <h1 class="section-title">Featured Companies</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nulla quis reiciendis veritatis! Praesentium minima reiciendis magni dolor voluptas alias</p>
        <div class="featured-wrapper">
            <div class="featured-card">
                <img class="featured-image" src="images/ebaylogo.png">
                <p>Ebay</p>
                <button class="featured-button">View Jobs</button>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="images/Google-logo.png">
                <p>Google</p>
                <button class="featured-button">View Jobs</button>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="images/youtubelogo.png">
                <p>YouTube</p>
                <button class="featured-button">View Jobs</button>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="images/Tesla_logo.png">
                <p>Tesla</p>
                <button class="featured-button">View Jobs</button>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="images/Instagram_logo_2016.svg.webp">
                <p>Instagram</p>
                <button class="featured-button">View Jobs</button>
            </div>
            <!--<div class="featured-card">
          <img class="featured-image" src="images/applelogo.png">
          <p>Apple</p>
          <button class="featured-button">View Jobs</button>
        </div>-->
        </div>
    </section>
    <section class="testimonial" id="testimonial">
        <h1 class="section-title">Testimonial</h1>
        <p>Lets see what our clients say about us</p>
    </section>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <i class="fas fa-quote-left"></i>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates harum delectus a reiciendis maiores voluptatibus natus nostrum quae corrupti odit!</h3>
                <div class="testimoni-pic">
                    <img src="images/profile-pic-1.png">
                    <p>Taylor Swift</p>
                    <span>Data Analyst</span>
                </div>
            </div>

            <div class="swiper-slide">
                <i class="fas fa-quote-left"></i>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates harum delectus a reiciendis maiores voluptatibus natus nostrum quae corrupti odit!</h3>
                <div class="testimoni-pic">
                    <img src="images/profile-pic-2.jpg">
                    <p>John Terry</p>
                    <span>Product Analyst</span>
                </div>
            </div>
            <div class="swiper-slide">
                <i class="fas fa-quote-left"></i>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates harum delectus a reiciendis maiores voluptatibus natus nostrum quae corrupti odit!</h3>
                <div class="testimoni-pic">
                    <img src="images/profile-pic-3.avif">
                    <p>John Cena</p>
                    <span>Business Development</span>
                </div>
            </div>
            <div class="swiper-slide">
                <i class="fas fa-quote-left"></i>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates harum delectus a reiciendis maiores voluptatibus natus nostrum quae corrupti odit!</h3>
                <div class="testimoni-pic">
                    <img src="images/profile-pic-4.png">
                    <p>Andrew Smith</p>
                    <span>Android Developer</span>
                </div>
            </div>
            <div class="swiper-slide">
                <i class="fas fa-quote-left"></i>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates harum delectus a reiciendis maiores voluptatibus natus nostrum quae corrupti odit!</h3>
                <div class="testimoni-pic">
                    <img src="images/profile-pic-5.jpg">
                    <p>Franklin Clinton</p>
                    <span>Business Development</span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!--blog-->
    <section class="blog" id="blog">
        <h1 class="section-title">Career Advices</h1>
        <p>Learn more career tips from companies recruiter</p>
        <div class="blog-wrapper">
            <div class="blog-card">
                <img class="blog-image" src="images/blogimg1.webp">
                <div class="blog-detail">
                    <span>29 Aug 2022</span>
                    <h4>How to enjoy your work</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <hr class="divider">
                    <a href="https://www.indeed.com/career-advice/career-development/how-to-enjoy-work" class="blog-more">Read</a>
                </div>
            </div>
            <div class="blog-card">
                <img class="blog-image" src="images/blogimg2.jpg">
                <div class="blog-detail">
                    <span>19 Sep 2022</span>
                    <h4>10 tips for technical interview</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <hr class="divider">
                    <a href="https://www.monster.com/career-advice/article/ten-interviewing-rules" class="blog-more">Read</a>
                </div>
            </div>
            <div class="blog-card">
                <img class="blog-image" src="images/blogimg3.png">
                <div class="blog-detail">
                    <span>16 Oct 2022</span>
                    <h4>Managing Time Effectively</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <hr class="divider">
                    <a href="https://corporatefinanceinstitute.com/resources/management/time-management-list-tips/" class="blog-more">Read</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-wrapper">
            <h3>JobSeeker</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consequatur? Ex placeat porro perferendis</p>
            <div class="social-media">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-wrapper">
            <h4>Explore</h4>
            <a href="#companies">Top Companies</a>
            <a href="#">Terms of Service</a>
            <a href="#">Podcast</a>
            <a href="#">Careers</a>
        </div>
        <div class="footer-wrapper">
            <h4>About</h4>
            <a href="#">FAQs</a>
            <a href="#">Get Inspired</a>
            <a href="#">Blog</a>
        </div>
        <div class="footer-wrapper">
            <h4>Support</h4>
            <a href="#">Customer Service</a>
            <a href="#">Trust & Safety</a>
            <a href="#">Partnership</a>
        </div>
        <div class="footer-wrapper">
            <h4>Community</h4>
            <a href="#">Community</a>
            <a href="#">Invite a friend</a>
            <a href="#">Other Links</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="app.js"></script>
</body>

</html>