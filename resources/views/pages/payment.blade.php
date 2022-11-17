<html id="home">
  
@extends('navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/payments.css') }}">

    <div class="container">
        <img src="{{ asset('img/dragonpay.png') }}" alt="" style="padding-left: 5%;width: 70vw;">
        <img src="{{ asset('img/Banks.png') }}" alt="" style="padding-left: 5%; width: 65vw; padding-top: 20px; padding-bottom: 5vw;">
        <hr class="rounded">
    </div>
    
    <div class="container" style="text-align: center; padding-top: 3vw; padding-bottom: 5vw;">
        <div class="section-title">
            <h2>STEPS</h2>
            <h3><span>READ</span> CAREFULLY</h3>
          </div>
        <!-- Trigger the Modal -->
        <img id="Img" src="{{ asset('img/Steps_1.png') }}" alt="Logo" style="width:100%;max-width:300px">
        <img id="Img1" src="{{ asset('img/Steps_2.png') }}" alt="Logo" style="width:100%;max-width:300px">
        <img id="Img2" src="{{ asset('img/Steps_3.png') }}" alt="Logo" style="width:100%;max-width:300px;">
        <!-- The Modal -->
        <div id="Modal" class="modal">
        <!-- The Close Button -->
        <span class="close">&times;</span>
        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">
        <img class="modal-content" id="img02">
        <img class="modal-content" id="img03">
        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
        </div>
            <h3 style="padding-top: 16px;"> STEP 1:<h3>
            <h6>Click the fees that you're going to pay.
                Choos accordingly if you're going to pay for a
                Down payment, Partial payment or Full payment.
                Please makge sure that you click on the program that you'r enrolled in
                (e.g. Elementary students or theier parenst should click the buutons intended for Elementary Students).
                This is to ensure that the payments are credited to your studen ledger.</h6><br>
            <h3>STEP 2:<h3>
            <h6>After clicking the correct button, you will be directed to the Dragonpay payment page.
                Fill in all the necessary field. After filling in the information, click PAY</h6><br>
            <h3>Takte note of the following:<h3>
            <h6>- For the Invoice No. Field, input your Student Number.
                For new students, please secure your student number first before proceeding with your payment 
                to ensure that your payment will be credited to your account at
                accounting.dasma@pcu.edu.ph(Regular/On-campus Classes) or at
                online.educ@pcu.ph(TNEEP/Global Education/Extension Classes)</h6><br>
            <h6>- For the e-mail fiel, use your official PCU EMAIL(@pcu.du.ph) provided by the Information Technology Department (ITD).
                New/Incoming students may use their personal email, Acknowledgement of payment will be sen to the e-mail privded.</h6><br>
            <h3>STEP 3:<h3>
            <h6>You will be directed to another Dragonpay payment page wherein you will select your preffered payment option.
                You can choose to pay thru Online Banking, Over-the-counter of banks or Over-the-counter- payment Centers.</h6><br>
            <h3>STEP 4:<h3>
            <h6>Tick the box to Agree to the Terms and Conditions, then click Select.
                Important note: If you choos the online banking/e-wallet or over-the-counter option, the payment instructions can be sent to your e-mail.
                follow the instruction in proceeding with the payment.
                </h6><br>
            <h3>STEP 5:<h3>
            <h6>Remember your REFERENCE NUMBER and keep the acknowledgement e-mail for reference. No need to send the reference number to PCU and your Officeial Receipts shall be issued to your e-mail in 2-3 days
                upon acknowledgement of payments</h6><br>
            <p>Note: Payments via Dragonpay are subject to P20.00 transaction charge.</p>
    </div>

    <div class="container">
        <hr class="rounded">
    </div>

    <!-- ======= kiddie Section ======= -->
    <section id="payments" class="about section-bg">
        <div class="container payments" data-aos="fade-up">
          <div class="section-title">
            <h2>Payments</h2>
            <h3><span>KIDDE</span>COLLEGE</h3>
          </div>
          
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                <h3>Kiddie Kollege</h3>
                <h6> Down payment – Click this button to pay a fixed amount of Php 7,000 as down payment after you settled any remaining balances from previous school years.</h6><br>
                <h6>Partial payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
                <h6>Full Payment – Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
                <ul>
                  <li>
                    <a href="" style="padding-right: 33px;">DOWN PAYMENT</a>
                  </li>
                  <li>
                    <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
                  </li>
                  <li>
                    <a href="" style="padding-right: 52px;">FULL PAYMENT</a>
                  </li>
                  </ul>
            </div>
          </div> 
        </div> 
      </section>
      <!--kiddie Section -->
        
    <div class="container">
        <hr class="rounded">
    </div>


    <!-- ======= Sped Section ======= -->
    <section id="payments" class="about section-bg">
        <div class="container payments" data-aos="fade-up">
          <div class="section-title">
            <h2>Payments</h2>
            <h3><span>Special</span> Education(SPED)</h3>
          </div>
          
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                <h3>Special Education (SPED)</h3>
                <h6> Down payment – Click this button to pay a fixed amount of Php 17,000 as down payment after you settled any remaining balances from previous school years.</h6><br>
                <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
                <h6>Full Payment – Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
              <ul>
                <li>
                  <a href="" style="padding-right: 33px;">DOWN PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 52px;">FULL PAYMENT</a>
                </li>
              </ul>
            </div>
          </div> 
        </div> 
      </section>
      <!--Sped Section -->
        
    <div class="container">
        <hr class="rounded">
    </div>

     <!-- ======= Elem Section ======= -->
     <section id="payments" class="about section-bg">
        <div class="container payments" data-aos="fade-up">
          <div class="section-title">
            <h2>Payments</h2>
            <h3><span>Elementary</span></h3>
          </div>
          
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                <h3>Elementary</h3>
                <h6> Down payment -Click this button to pay a fixed amount of Php 5,000 as down payment after you settled any remaining balances from previous school years.</h6><br>
                <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
                <h6>Full Payment -Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
              <ul>
                <li>
                  <a href="" style="padding-right: 33px;">DOWN PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 52px;">FULL PAYMENT</a>
                </li>
              </ul>
            </div>
          </div> 
        </div> 
      </section>
      <!--Elem Section -->
        
    <div class="container">
        <hr class="rounded">
    </div>


    <!-- ======= HighSchool Section ======= -->
    <section id="payments" class="about section-bg">
        <div class="container payments" data-aos="fade-up">
          <div class="section-title">
            <h2>Payments</h2>
            <h3><span>High</span> School</h3>
          </div>
          
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                <h3>Junior High School</h3>
                <h6>Down Payment – Click this button to pay a fixed amount of Php 5,000 as down payment after you settled any remaining balances from previous school years.</h6><br>
                <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
                <h6>Full Payment -Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
            </div>
            

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
              <ul>
                <li>
                  <a href="" style="padding-right: 33px;">DOWN PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
                </li>
                <li>
                  <a href="" style="padding-right: 52px;">FULL PAYMENT</a>
                </li>
              </ul>

              
            </div>
          </div> 
        </div> 
      </section>
      <!--HighSchool Section -->
        
    <div class="container">
        <hr class="rounded">
    </div>

     <!-- ======= College Section ======= -->
     <section id="payments" class="about section-bg">
      <div class="container payments" data-aos="fade-up">
        <div class="section-title">
          <h2>Payments</h2>
          <h3><span>College</span> School</h3>
        </div>
        
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
              <h3>College</h3>
              <h6>Down payment – Click this button to pay a fixed amount of Php 5,000 as down payment after you settled any remaining balances from previous school years.</h6><br>
              <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
              <h6>Full Payment – Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
          </div>
          

          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
            <ul>
              <li>
                <a href="" style="padding-right: 33px;">DOWN PAYMENT</a>
              </li>
              <li>
                <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
              </li>
              <li>
                <a href="" style="padding-right: 52px;">FULL PAYMENT</a>
              </li>
            </ul>

            
          </div>
        </div> 
      </div> 
    </section>
    <!--College Section -->
      
  <div class="container">
      <hr class="rounded">
  </div>

  <!-- ======= Master's Section ======= -->
  <section id="payments" class="about section-bg">
    <div class="container payments" data-aos="fade-up">
      <div class="section-title">
        <h2>Payments</h2>
        <h3><span>Master’s</span> (including Extension)</h3>
      </div>
      
      <div class="row">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <h3>Masters</h3>
            <h6>Down payment – Click this button to pay a fixed amount of Php 5,500 as down payment after you settled any remaining balances from previous school years.</h6><br>
            <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
            <h6>Full Payment – Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
            <h6>Comprehensive Review & Exam – Click this button to pay for the Comprehensive Review and Exam. Please ensure to coordinate with your corresponding department to secure clearance before payment of this fee.</h6><br>
        </div>
        

        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
          <ul>
            <li>
              <a href=""  style="padding-right: 33px;">DOWN PAYMENT</a>
            </li>
            <li>
              <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
            </li>
            <li>
              <a href="" style="padding-right: 51px;">FULL PAYMENT</a>
            </li>

            <li>
              <a href="" style="padding-right: 42px;">EXAM PAYMENT</a>
            </li> 
          </ul>

          
        </div>
      </div> 
    </div> 
  </section>
  <!--Master's Section -->
    
<div class="container">
    <hr class="rounded">
</div>

<!-- ======= Doctoral Section ======= -->
<section id="payments" class="about section-bg">
  <div class="container payments" data-aos="fade-up">
    <div class="section-title">
      <h2>Payments</h2>
      <h3><span>Doctoral</span> (including Extension)</h3>
    </div>
    
    <div class="row">
      <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
          <h3>Masters</h3>
          <h6>Down payment – Click this button to pay a fixed amount of Php 5,500 as down payment after you settled any remaining balances from previous school years.</h6><br>
          <h6>Partial Payment – Click this button to partially pay your balances. Just input the amount that you will pay.</h6><br>
          <h6>Full Payment – Click this button to fully pay your balances. Kindly coordinate with the accounting department first before paying to ensure that you will pay the exact amount.</h6><br>
          <h6>Comprehensive Review & Exam – Click this button to pay for the Comprehensive Review and Exam. Please ensure to coordinate with your corresponding department to secure clearance before payment of this fee.</h6><br>
          <h6>Dissertation Fee – Php 18,000</h6><br>
      </div>
      

      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" style="align-items: center;">
        <ul>
          <li>
            <a href=""  style="padding-right: 33px;">DOWN PAYMENT</a>
          </li>
          <li>
            <a href="" style="padding-right: 15px;">PARTIAL PAYMENT</a>
          </li>
          <li>
            <a href="" style="padding-right: 51px;">FULL PAYMENT</a>
          </li>
          <li>
            <a href="" style="padding-right: 42px;">EXAM PAYMENT</a>
          </li> 
          <li>
            <a href="" style="padding-right: 55px;">DISSERTATION</a>
          </li> 
        </ul>

        
      </div>
    </div> 
  </div> 
</section>
<!--Doctoral Section -->
  
<div class="container">
  <hr class="rounded">
</div>




    <script>
        var modal = document.getElementById("Modal");
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("Img");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("Img1");
        var modalImg = document.getElementById("img02");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("Img2");
        var modalImg = document.getElementById("img03");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
    </script>

@endsection

</html>