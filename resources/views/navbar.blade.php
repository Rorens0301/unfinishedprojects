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
<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="icon" href="{{ asset('img/pcusolo.png') }}">
<!--External JS-->
<script src="{{ asset('js/dismain.js') }}"></script>
</head>

<body class="">
 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top" >
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:askpcucavite@pcu.edu.ph"  >askpcucavite@pcu.edu.ph</a>
      <i class="fa fa-phone" aria-hidden="true"></i> <a href="" >(046) 416-3705</a>
    </div>
    <div class="social-links">
      <a href="https://twitter.com/pcudasma?lang=en" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.facebook.com/pcu.dasmacavite" class="facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="#" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <!--
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        -->
    </div>
  </div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">
       <p class="logo mr-auto"><a href="/"><span><img src="{{ asset('img/pculogowhite.png') }}" alt="Logo"></span></a></p>
       <a class="menubar" style="margin-top: -20px;" href=""> <i class="fa fa-bars" aria-hidden="true"></i></a>
       <nav class="nav-menu d-none d-lg-block">
         <ul>
           <li class=""><a href="/">HOME</a></li>
           <li class="drop-down"><a href="#about">ABOUT  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
             <ul>
               <li><a href="history">History</a></li>
               <li><a href="#">Borad Of Trustees</a></li>
               <li><a href="#">Administration</a></li>
               <li><a href="#">Administration's Message</a></li>
               <li><a href="#">Awards & Accreditations</a></li>
               <li><a href="#">University Council & Commitees</a></li>
               <li><a href="#">Vision & Mission</a></li>
             </ul>
           </li>
           <li class="drop-down"><a href="#services">SERVICES   <i class=" fa fa-caret-down" aria-hidden="true"></i></a>
             <ul>
               <li><a href="#">E-PORTAL</a></li>
               <li><a href="#">E-RESOURCES</a></li>
               <li><a href="#">BLUEBOOK</a></li>
               <li class="drop-down"><a href="#">ANOTHER DROPDOWN <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                 <ul>
                   <li><a href="#">Deep Drop Down 1</a></li>
                   <li><a href="#">Deep Drop Down 2</a></li>
                   <li><a href="#">Deep Drop Down 3</a></li>
                   <li><a href="#">Deep Drop Down 4</a></li>
                   <li><a href="#">Deep Drop Down 5</a></li>
                 </ul>
               </li>
             </ul>
           </li>
         
           <li><a href="#portfolio">GALLERY</a></li>
         
           <li class="drop-down"><a href="#admission">ADMISSION  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
             <ul>
               <li class="drop-down"><a href="#">Deep Drop Down <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                 <ul>
                   <li><a href="#">Deep Drop Down 1</a></li>
                   <li><a href="#">Deep Drop Down 2</a></li>
                   <li><a href="#">Deep Drop Down 3</a></li>
                   <li><a href="#">Deep Drop Down 4</a></li>
                   <li><a href="#">Deep Drop Down 5</a></li>
                 </ul>
               </li>
               <li><a href="#">Drop Down 1</a></li>
               <li><a href="#">Drop Down 2</a></li>
               <li><a href="#">Drop Down 3</a></li>
               <li><a href="#">Drop Down 4</a></li>
             </ul>
           </li>
           <li><a href="payment" target="_blank">PAYMENT</a></li>
           <li>
             <a href="#footer">CONTACT</a>
           </li>
         </ul>
       </nav>
     
       <!--MOBILE NAV-->
       <nav class="mobile-nav d-lg-none">

         <ul>
           <li class=""><a href="/">HOME</a></li>
           <li><a href="#about" >ABOUT  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
           <li><a href="#services">SERVICES <i class=" fa fa-caret-right" aria-hidden="true"></i></a></li>
           <li class="drop-down"><a href="#admission">ADMISSION  <i class="fa fa-caret-right " aria-hidden="true"></i></a>
           <li><a href="#portfolio">GALLERY</a></li>
           <li><a href="payment" target="_blank">PAYMENT</a></li>
          
           <li class="drop-down"><a href="">Drop Down</a>
             <ul>
               <li class="drop-down"><a href="#">Deep Drop Down</a>
                 <ul>
                   <li><a href="#">Deep Drop Down 1</a></li>
                   <li><a href="#">Deep Drop Down 2</a></li>
                   <li><a href="#">Deep Drop Down 3</a></li>
                   <li><a href="#">Deep Drop Down 4</a></li>
                   <li><a href="#">Deep Drop Down 5</a></li>
                 </ul>
               </li>
             
               <li><a href="#">Drop Down 1</a></li>
               <li><a href="#">Drop Down 2</a></li>
               <li><a href="#">Drop Down 3</a></li>
               <li><a href="#">Drop Down 4</a></li>
             </ul>
           </li>
         
           <li><a href="#footer">CONTACT</a></li>
         
         </ul>
       </nav>
     <!-- .nav-menu -->
     </div>
   </header>

   <!-- End Header -->

  @yield('content')

   <!-- ======= Footer ======= -->

    <footer id="footer">
       <div class="footer-newsletter">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-lg-6">
               <h4>Join Our Newsletter</h4>
               <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
               <form action="" method="post">
                 <input type="email" name="email"><input type="submit" value="Subscribe">
               </form>
             </div>
           </div>
         </div>
       </div>
     
     
     <div class="footer-top">
       <div class="container">
         <div class="row">
          
           <div class="col-lg-4 col-md-6 footer-contact">
             <h3>Philippine Christian University<span></span></h3>
             <p style="padding-bottom: 5%;">
               Sampaloc 1
               Emilio Aguinaldo Highway<br>
               Dasmariñas City, Cavite 4114<br>
               Philippines<br><br>
               <strong>Phone:</strong> (046) 416-3705<br>
               <strong>Email:</strong> admission.pcucavite@pcu.edu.ph<br>
             </p>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.3875574318786!2d120.96158091431705!3d14.288900388471056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d58cc7060449%3A0xba193d41bd00d36b!2sPCU%20Dasmari%C3%B1as%20College%20Building!5e0!3m2!1sen!2sph!4v1617857747235!5m2!1sen!2sph" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
         
           <div class="col-lg-2 col-md-6 footer-links">
             <h4>Useful Links</h4>
             <ul>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
             </ul>
           </div>
         

         
           <div class="col-lg-3 col-md-6 footer-links">
             <h4>Our Social Networks</h4>
             <p>For more updates, Follow us on : </p>
             <div class="social-links mt-3">
               <a href="https://twitter.com/pcudasma?lang=en" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="https://www.facebook.com/pcu.dasmacavite" class="facebook" target="_blank"><i class="fa fa-facebook-official"></i></a>
               <a href="#" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
             </div>
           </div>
         
           <div class="col-lg-3 col-md-6 footer-links">
             <h4>Our Services</h4>
             <ul>
               <li><i class="bx bx-chevron-right"></i> <a href="#"><img style="height: 60px;" src="{{ asset('img/deped.png') }}" alt=""></a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#"><img style="height: 115px;" src="{{ asset('img/ched.png') }}" alt=""></a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#"><img style="height: 115px;" src="{{ asset('img/ascu.png') }}" alt=""></a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#"><img style="height: 145px;" src="{{ asset('img/ncaa.png') }}" alt=""></a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#"><img style="height: 90px;" src="{{ asset('img/tuv.png') }}" alt=""></a></li>
             </ul>
           </div>
         
         </div>
       </div>
     </div>
   

     <div class="container-fluid ">
       <div class="copyright">
         &copy; Copyright <strong><span>Philippine Christian University</span></strong>. All Rights Reserved
       </div>
     
     </div>
    </footer>
    <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#home" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</body>