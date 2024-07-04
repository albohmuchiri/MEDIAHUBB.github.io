<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDIAHUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/jobsConnect.svg" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="mcss/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="mcss/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php include 'mainNavbar.php'; ?>
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/web background.jpeg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best top-tier talent for your next perfect project collaboration</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Mediahub seamlessly connects a diverse range of creative talents, with advertisers, clients, and collaborators,
									streamlining the entire creative journey, fostering unprecedented collaboration and efficiency.</p>
                                    <a href="jobs.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Creatives</a>
                                    <a href="jobs.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Collaborators</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/web background2.jpeg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best top-tier talent for your next perfect project collaboration</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Mediahub seamlessly connects a diverse range of creative talents, with advertisers, clients, and collaborators,
									streamlining the entire creative journey, fostering unprecedented collaboration and efficiency.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Creatives</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Collaborators</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Category Start -->
        <section id="category" class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Creators Gallery</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Photography</h6>
                            <p class="mb-0">gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Cinematography</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Event Management</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Co-oporate Events</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Documentaries</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Film production</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">Gallery</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category End -->


        <!-- About Start -->
	
<div>
  <main>
    <h1>Photographs of Nairobi	<span>by Albert Muchiri</span></h1>
    <input type="radio" name="size" id="large">
   
   <label for="large"></label>
    <input type="radio" name="size" id="large">
    <label for="large">CO-OPORATES PHOTOGRAPHY</label>
    <input checked type="radio" name="size" id="medium">
    <label for="medium">STUDIO PHOTOGRAPHY</label>
    <input type="radio" name="size" id="small">
    <label for="small">EVENT PHOTOGRAPHY</label>
    <div class="grid">
      
  <figure class="landscape">
    <a href="#a-classic" id="a-classic-thumb">
      <img class="open" loading="lazy" width="980" height="665" src="img/john-margolies/A classic.jpg" alt="A classic">
    </a>
    <figcaption>A classic</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#apple-pie-exit" id="apple-pie-exit-thumb">
      <img class="open" loading="lazy" width="983" height="668" src="img/john-margolies/Apple pie exit.jpg" alt="Apple pie exit">
    </a>
    <figcaption>Apple pie exit</figcaption>
  </figure>
  
  <figure class="portrait">
    <a href="#a-taste-of-italy" id="a-taste-of-italy-thumb">
      <img class="open" loading="lazy" width="661" height="974" src="img/john-margolies/A taste of Italy.jpg" alt="A taste of Italy">
    </a>
    <figcaption>A taste of Italy</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#aztec-motel" id="aztec-motel-thumb">
      <img class="open" loading="lazy" width="966" height="640" src="img/john-margolies/Aztec motel.jpg" alt="Aztec motel">
    </a>
    <figcaption>Aztec motel</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#ballroom-entrance" id="ballroom-entrance-thumb">
      <img class="open" loading="lazy" width="973" height="656" src="img/john-margolies/Ballroom entrance.jpg" alt="Ballroom entrance">
    </a>
    <figcaption>Ballroom entrance</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#best-of-both-worlds" id="best-of-both-worlds-thumb">
      <img class="open" loading="lazy" width="977" height="656" src="img/john-margolies/Best of both worlds.jpg" alt="Best of both worlds">
    </a>
    <figcaption>Best of both worlds</figcaption>
  </figure>
  
  <figure class="portrait">
    <a href="#censored-king-kong" id="censored-king-kong-thumb">
      <img class="open" loading="lazy" width="649" height="948" src="img/john-margolies/Censored King Kong.jpg" alt="Censored King Kong">
    </a>
    <figcaption>Censored King Kong</figcaption>
  </figure>
  
  <figure class="portrait">
    <a href="#chicken-sign" id="chicken-sign-thumb">
      <img class="open" loading="lazy" width="662" height="961" src="img/john-margolies/Chicken sign.jpg" alt="Chicken sign">
    </a>
    <figcaption>Chicken sign</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#concert-venue" id="concert-venue-thumb">
      <img class="open" loading="lazy" width="950" height="639" src="img/john-margolies/Concert venue.jpg" alt="Concert venue">
    </a>
    <figcaption>Concert venue</figcaption>
  </figure>
  
  <figure class="landscape">
    <a href="#webackground" id="web background">
      <img class="open" loading="lazy" width="992" height="675" src="img/web background.jpeg" alt="book now">
    </a>
    <figcaption>book now</figcaption>
  </figure>
 
      </div>
    <div class="lightbox">
      
  <figure tabindex="0" id="a-classic" class="landscape">
    <a tabindex="-1" href="#a-classic" class="image">
      <img loading="lazy" width="980" height="665" src="img/john-margolies/A classic.jpg" alt="A classic">
    </a>
    <a tabindex="-1" href="#a-classic-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="apple-pie-exit" class="landscape">
    <a tabindex="-1" href="#apple-pie-exit" class="image">
      <img loading="lazy" width="983" height="668" src="img/john-margolies/Apple pie exit.jpg" alt="Apple pie exit">
    </a>
    <a tabindex="-1" href="#apple-pie-exit-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="a-taste-of-italy" class="portrait">
    <a tabindex="-1" href="#a-taste-of-italy" class="image">
      <img loading="lazy" width="661" height="974" src="img/john-margolies/A taste of Italy.jpg" alt="A taste of Italy">
    </a>
    <a tabindex="-1" href="#a-taste-of-italy-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="aztec-motel" class="landscape">
    <a tabindex="-1" href="#aztec-motel" class="image">
      <img loading="lazy" width="966" height="640" src="img/john-margolies/Aztec motel.jpg" alt="Aztec motel">
    </a>
    <a tabindex="-1" href="#aztec-motel-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="ballroom-entrance" class="landscape">
    <a tabindex="-1" href="#ballroom-entrance" class="image">
      <img loading="lazy" width="973" height="656" src="img/john-margolies/Ballroom entrance.jpg" alt="Ballroom entrance">
    </a>
    <a tabindex="-1" href="#ballroom-entrance-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="best-of-both-worlds" class="landscape">
    <a tabindex="-1" href="#best-of-both-worlds" class="image">
      <img loading="lazy" width="977" height="656" src="img/john-margolies/Best of both worlds.jpg" alt="Best of both worlds">
    </a>
    <a tabindex="-1" href="#best-of-both-worlds-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="big-fish" class="landscape">
    <a tabindex="-1" href="#big-fish" class="image">
      <img loading="lazy" width="961" height="649" src="img/john-margolies/Big fish.jpg" alt="Big fish">
    </a>
    <a tabindex="-1" href="#big-fish-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="budget-knight" class="landscape">
    <a tabindex="-1" href="#budget-knight" class="image">
      <img loading="lazy" width="993" height="673" src="img/john-margolies/Budget knight.jpg" alt="Budget knight">
    </a>
    <a tabindex="-1" href="#budget-knight-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="buffalo" class="landscape">
    <a tabindex="-1" href="#buffalo" class="image">
      <img loading="lazy" width="990" height="659" src="img/john-margolies/Buffalo.jpg" alt="Buffalo">
    </a>
    <a tabindex="-1" href="#buffalo-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="car-wash" class="portrait">
    <a tabindex="-1" href="#car-wash" class="image">
      <img loading="lazy" width="672" height="985" src="img/john-margolies/Car wash.jpg" alt="Car wash">
    </a>
    <a tabindex="-1" href="#car-wash-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="censored-king-kong" class="portrait">
    <a tabindex="-1" href="#censored-king-kong" class="image">
      <img loading="lazy" width="649" height="948" src="img/john-margolies/Censored King Kong.jpg" alt="Censored King Kong">
    </a>
    <a tabindex="-1" href="#censored-king-kong-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="chicken-sign" class="portrait">
    <a tabindex="-1" href="#chicken-sign" class="image">
      <img loading="lazy" width="662" height="961" src="img/john-margolies/Chicken sign.jpg" alt="Chicken sign">
    </a>
    <a tabindex="-1" href="#chicken-sign-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="concert-venue" class="landscape">
    <a tabindex="-1" href="#concert-venue" class="image">
      <img loading="lazy" width="950" height="639" src="img/john-margolies/Concert venue.jpg" alt="Concert venue">
    </a>
    <a tabindex="-1" href="#concert-venue-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="concrete-teepees" class="landscape">
    <a tabindex="-1" href="#concrete-teepees" class="image">
      <img loading="lazy" width="992" height="675" src="img/john-margolies/Concrete teepees.jpg" alt="Concrete teepees">
    </a>
    <a tabindex="-1" href="#concrete-teepees-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="dinosaur-village" class="landscape">
    <a tabindex="-1" href="#dinosaur-village" class="image">
      <img loading="lazy" width="977" height="661" src="img/john-margolies/Dinosaur village.jpg" alt="Dinosaur village">
    </a>
    <a tabindex="-1" href="#dinosaur-village-thumb" class="close">Close</a>
  </figure>
  
  <figure tabindex="0" id="whale-garage" class="lan
     
      <div class="counter"></div>        
    </div> 
  </main>
  <footer>
    This <a target="_blank" rel="noopener" >THIS PHOTO PORTFOLIO</a> was generated on 3rd july 2024 BY Albert </footer>
  <script>
  // show lightbox
  document.addEventListener('click', function(event) {
    if (!event.target.matches('.open')) return;
    document.querySelector('body').classList.add('fixed')
  }, false);

  document.addEventListener(
    "keydown", (e) => {
      if (e.keyCode == 13) {
        document.activeElement.click();
        document.querySelector('body').classList.add('fixed')
      }
    }, false);

  // hide lightbox
  document.addEventListener('click', function(event) {
    if (!event.target.matches('.close')) return;
    document.querySelector('body').classList.remove('fixed')
  }, false);

  // esc key to close
  document.addEventListener(
    "keydown", (e) => {
      if (e.keyCode == 27) {
        document.activeElement.querySelector('.close').click();
        document.querySelector('body').classList.remove('fixed');
      }
    }, false);

  </script>
</div>
        
         <!-- Category End -->


        <!-- About Start -->
		
		
        <section id="about" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/don01.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/don02.jpeg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/don03.jpeg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/don04.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">UPCOMING EVENTS SCREEN</h1>
                        <p class="mb-4">Reach Millions of Media partners</p>
                        <p><i class="fa fa-check text-primary me-3"></i>ENGAGE</p>
                        <p><i class="fa fa-check text-primary me-3"></i>INTERACT</p>
                        <p><i class="fa fa-check text-primary me-3"></i>IMPACT</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Testimonial Start -->
		<body>
  <center>
    <h1>
      Our Videos Here
    </h1>
    <div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/NPkPtu61yV4" title="YouTube video player" 
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
      <h3>Responsive Div Layout using FLEX</h3>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/byTOONVJn-k" title="YouTube video player" 
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
      <h3>🔴 Complete Bootstrap 5 in Hindi 🔥</h3>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TwUxk7RffCE" title="YouTube video player"
       frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    <h3>🔴 Photo Shop Full Course Gfx Mentor</h3>
  </div>
  </center>
</body>
        <!-- About End -->

        <!-- Testimonial Start -->
		
		
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Our Top Collaborators</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <p>lets take your film project in the next commerial step</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">A MEDIA</h5>
                                <small>COLLABORATOR</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <p>We collaborate with the best TV commercials experts</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">MOONBEAM</h5>
                                <small>COLLABORATOR</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <p>collaborate with the largest film hub in africa</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">FILM LIFE AFRICA</h5>
                                <small>COLLABORATOR</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <p>Music is power lets collaborate your music project</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">C MEDIA</h5>
                                <small>COLLABORATOR</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <?php include 'mainFooter.php'; ?>

        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>