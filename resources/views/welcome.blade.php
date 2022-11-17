<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Philippine Christian University Dasma</title> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- External CSS-->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="icon" href="{{ asset('img/pcusolo.png') }}">
<!--External JS-->
<script src="{{ asset('js/dismain.js') }}"></script>
</head>

<body class="">

  @extends('navbar')

  @section('content')
 

  <!-- ======= Hero Section ======= -->
  <div id="home">
    <section id="hero" class="d-flex align-items-center" style="background-image: url(img/cover.jpg);">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Philippine Christian University</span>
          </h1>
          <h2 style="font-size: 2vw">A learning community enriched by Christian values 
          The Philippine Christian University (PCU) is a dynamic community of learning enriched by 
          Christian values and the many and varied perspectives, experiences and traditions of our students, faculty, and staff.</h2>
          <div class="d-flex">
          <a href="#services" class="btn-get-started scrollto">Register Now</a>
        </div>
      </div>
    </section>
  </div>
  <!-- End Hero -->

  <main id="main">
     <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
          <h3 style="padding-bottom: 15px">Find Out More <span>About Us</span></h3>
          <video controls style="width: 100%;" class="w-full h-full" src="pcudrone.mp4" autoplay="" loop="" muted="" controlslist="nodownload"></video>
        </div>
        
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">

            <!--Carousel Wrapper-->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/Pre-Enrollment-ESD.png') }}"
                      alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/Pre-Enrollment-JHS.png') }}"
                      alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/Pre-Enrollment-SHS.png') }}"
                      alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/Pre-Enrollment-college.png') }}"
                      alt="4th slide">
                  </div>
                </div>
                <!--/.Slides-->

                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>  
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3> The Philippine Christian University</h3>
            <p class="font-italic">
              is about excellence in various fields and the application of Christian values in achieving total human and societal development. The University has two campuses in Manila and another in Dasmariñas, Cavite.
            </p>
            <ul>
              <li>
                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                <div>
                  <h3>Vission</h3>
                  <p>It is the University’s vision to become a “distinctively strong Christian University integrating faith, character, and service in building up and enhancing the quality of life.”</p>
                </div>
              </li>
              <li>
                <a href=""><i class="fa fa-bullseye" aria-hidden="true"></i></a>
                <div>
                  <h3>MISSION</h3>
                    <p>We, at Philippine Christian University, a church-related academic institution, commit ourselves to:</p>
                    <p>Provide an education that will enhance the development of Christian character;</p>
                    <p>Promote academic excellence and the highest quality education;</p>
                    <p>Be responsive to Philippine needs and conditions;</p>
                    <p>Become responsible stewards of God’s creation and resources;</p>
                    <p>Foster international understanding and goodwill;</p>
                    <p>Support the ecumenical movement.</p>
                </div>
              </li>
            </ul>
         
          </div>
        </div> 
      </div> 
    </section>
    <!-- End About Section -->

    <!-- ======= Featured Services Section ======= -->
    <section  class="featured-services" id="services">
    
      <div class="container" data-aos="fade-up" >
        <h4 class="title text-center ">
          <a href=""><strong style="font-size: 2vw ; font-weight: bolder;">SERVICES</strong></a>
        </h4>

 
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="https://bluebook.pcu.edu.ph/" target="_blank">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><img src="{{ asset('img/16x16_neo.ico') }}" alt=""></div>
                <h4 class="title"><a href="">BLUE BOOK</a></h4>
                <p class="description">
                  The power of Online Teaching and Learning
                  This is our E-learning portal,
                  powered by NEO</p>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="http://resources.pcu.edu.ph/" target="_blank">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><img style="height: 100px;" src="{{ asset('img/ask.jpg') }}" alt=""></div>
                <h4 class="title"><a href="">E-RESOURCES</a></h4>
                <p class="description">The e-Resources Library systematizes the search information to improve your learning experience.</p>
              </div>
            </a>
          </div>
        
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="http://portal-dasma.pcu.edu.ph/sias/" target="_blank">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><img style="height: 100px;" src="{{ asset('img/portalpc.png') }}" alt=""></div>
                <h4 class="title"><a href="">S I A S</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="" target="_blank">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><img style="height: 100px;" src="{{ asset('img/dolphins.png') }}" alt=""></div>
                <h4 class="title"><a href="">REGISTER NOW</a></h4>
                <p class="description">Register now and be a part of our PCU community, looking forward to see you.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Featured Services Section -->
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <h3><span>PCU</span> NCAA SOUTH </h3>
          <p>CHECK OUR GALLERY</p>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ asset('img/gallery/pcu1.jpg') }}" target="_blank">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('img/gallery/pcu1.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>PCU IMG</h4>
              <p>IMG</p> 
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href="{{ asset('img/gallery/pcu2.jpg') }}" target="_blank">
          <img src="{{ asset('img/gallery/pcu2.jpg') }}" alt="Logo" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p> 
          </div>
        </a>
        </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{ asset('img/gallery/pcu3.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu3.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="{{ asset('img/gallery/pcu4.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu4.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="{{ asset('img/gallery/pcu5.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu5.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('img/gallery/pcu6.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="{{ asset('img/gallery/pcu7.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu7.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>  
            </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="{{ asset('img/gallery/pcu8.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu8.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="{{ asset('img/gallery/pcu9.jpg') }}" target="_blank">
            <img src="{{ asset('img/gallery/pcu9.jpg') }}" alt="Logo" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>           
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->


  <!-- ======= admission Section ======= -->
  <section  class="admissions">
      
    <div class="container" data-aos="fade-up" id="admission">
      <h4 class="title text-center ">
        <a href="">
          <strong style="font-size: 2vw ; font-weight: bolder;">Admission</strong>
        </a>
      </h4>

      <div class="section-title">
        <p>The Philippine Christian University welcomes all students who meet its academic standards and are willing to abide by the rules and regulations of the University</p>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">FRESHMEN</a></h4>
            <p class="description">A freshmen student who wishes to enroll in college for a specific degree program for the first time must meet the following general qualifications.</p>
           
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">TRANSFEREE</a></h4>
            <p class="description">A transfer applicant should pass the CET, accomplish Student Information Sheet from the Guidance and Counselling Office and submit all the requriements. </p>
           
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">FOREIGN STUDENT</a></h4>
            <p class="description">Click here to see more about the process of admission for foreign students,A foreign student must submit the following to qualify for admission. </p>
            
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Admission -->

  @endsection

</body>
</html>