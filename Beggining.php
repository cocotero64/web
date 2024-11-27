<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    session_destroy();
    exit();
    die();
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HackMond Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">






  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/logitoo.png" alt="" class="img-fluid " style="width: 350px; ">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">

      <h1 class="sitename" style="color: white;" style="text-decoration: none;">Hackmond</h1>
    </a>


    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active" style="text-decoration: none;"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about" style="text-decoration: none;"><i class="bi bi-search"></i><span style="margin-left: 8px;"> About</span></a></li>
        <li><a href="#resume" style="text-decoration: none;"><i class="bi bi-controller"></i><span style="margin-left: 8px;">Video Game</span></a></li>
        <li><a href="#portfolio" style="text-decoration: none;"><i class="bi bi-mortarboard"></i></i><span style="margin-left: 8px;"> Courses</span></a></li>
        <li class="dropdown"><a href="ProcPHP/close_session.php" style="text-decoration: none;"><i class="bi bi-menu-button navicon"></i> <span>Log out</span></a>

        </li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <section id="hero" class="hero section dark-background">

      <video autoplay muted loop class="hero-video">
          <source src="assets/img/ma2.mp4" type="video/mp4">
      </video>
  
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <h2>HackMond</h2>
          <p><span class="typed" data-typed-items="Videogames, Courses, Information, Certifications"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>
  
  </section>

    
    <section id="about" class="about section dark-background">  

      
      <div class="container section-title" data-aos="fade-up">
        <h2>HackMond</h2>
        <p>Hackmond is a cybersecurity company that uses educational video games, courses, and quizzes to teach interactively. It also offers a unique evaluation and certification system.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/hackLOGO.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Habilities that &amp; you are going to learn</h2>
            <p class="fst-italic py-3">
              Benefits you get from hackmon which help the user develop their skills.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>learning</strong> <span>You will get a lot of knolege</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Efficient</strong> <span>Quick and concise information</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Dinamic</strong> <span>learn in a different way!</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Easy to learn</strong> <span>Easy mechanics for learn</span></li>
                </ul>
              </div>
              
            </div>
            <p class="py-3">
              Hackmond blends education and fun to make learning about cybersecurity both engaging and effective. 
              Through interactive tools like video games, courses, and quizzes, it offers a fresh approach to building skills. Its unique certification and evaluation system ensures users gain knowledge and credible recognition. By combining modern technology and education, Hackmond helps users stay ahead in cybersecurity. It stands out as an innovative leader in digital learning.
            </p>
          </div>
        </div>

      </div>

    </section>
  

    <section id="portfolio" class="portfolio section dark-background">

     
      <div class="container section-title" data-aos="fade-up">
        <h2>A little bit of Hackmond</h2>
        <p>Take a look at our advices!</p>
      </div>
    
      <div class="container">
    
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    
         
          <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="200">
          
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
    
            
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <div class="portfolio-content h-100">
                  <video autoplay loop muted><source src="assets/img/UplinkOS - Launch Trailer.mp4" type="video/mp4"></video>
                  <div class="portfolio-info">
                    <h4>Hackmond</h4>
                    <a href="assets/videos/coursera.mp4" title="Hackmond" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-controller"></i></a>
                  </div>
                </div>
              </div>
    
              
              <div class="carousel-item">
                <div class="portfolio-content h-100">
                  <video autoplay loop muted><source src="assets/img/Matrix.mp4" type="video/mp4"></video>
                  <div class="portfolio-info">
                    <h4>League of leguends</h4>
                    <a href="assets/videos/coursera.mp4" title="League of leguends" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-controller"></i></a>
                  </div>
                </div>
              </div>
    
              
              <div class="carousel-item">
                <div class="portfolio-content h-100">
                  <video autoplay loop muted>
                    <source src="assets/img/ma2.mp4" type="video/mp4">
                  </video>
                  <div class="portfolio-info">
                    <h4>Eve</h4>
                    <a href="assets/videos/coursera.mp4" title="Eve" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-controller"></i></a>
                  </div>
                </div>
              </div>
            </div>
    
 
    
        </div>
    
      </div>
    
    </section>
    
    

    
    <section id="services" class="services section dark-background">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Online courses</h2>
        <p>Start your cybersecurity journey with our beginner course to learn the basics and build a strong foundation. Advance to the intermediate level to deepen your understanding and tackle real-world challenges. Finally, master complex techniques in the advanced course and become a certified expert ready to protect the digital world!</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-lightbulb-fill"></i></div>
            <div>
              <h4 class="title"><a href="quizBeing.html" class="stretched-link" style="color: white; text-decoration: none;">Beginner</a></h4>
              <p class="description">The beginner course introduces fundamental concepts, ideal for those new to cybersecurity.
              </p>
            </div>
          </div>
          

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-clipboard-data-fill"></i></div>
            <div>
              <h4 class="title"><a href="quiz.html" class="stretched-link" style="color: white; text-decoration: none;">Intermediate</a></h4>
              <p class="description">The intermediate course focuses on practical applications and problem-solving for real-world scenarios.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bug-fill"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link" style="color: white; text-decoration: none;">Complex</a></h4>
              <p class="description">The advanced course delves into complex techniques and strategies for mastering cybersecurity challenges.</p>
            </div>
          </div>

        </div>

      </div>

    </section>

  
  </main>

  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <div id="preloader"></div>

  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>