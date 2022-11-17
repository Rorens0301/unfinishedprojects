<html id="home">
@extends('navbar')

@section('content')

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
@endsection

</html>