<!DOCTYPE html>
<html lang="en">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <head>
      <title>Events</title>
      <style>
         table, th, td {
         border: 3px solid black;
         border-collapse: collapse;
         padding: 5px;
         }		
         * {
         box-sizing: border-box;
         }
         .column {
         float: left;
         width: 40%;
         padding: 2px;
         }
         .row::after {
         content: "";
         clear: both;
         display: table;
         }
         .container {
         position: relative;
         }
         .container .btn {
         position: absolute;
         top: 130%;
         left: 50%;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #bcdde3;
         color: white;
         font-size: 16px;
         padding: 15px 22px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
         text-align: center;
         }
         .container .btn:hover {
         background-color: #555;
         }
         .center {
         position: absolute;
         top: 8px;
         left: 200px;
         font-size: 18px;
         }
         img { 
         width: 100%;
         height: auto;
         opacity: 100%;
         }
         .column2 {
         float: left;
         width: 60%;
         }
         .column3 {
         float: right;
         width: 60%;
         padding: 2px;
         }
         .column4 {
         float: left;
         width: 100%;
         padding: .5px;
         }
         .center2 {
         position: absolute;
         top: 10px;
         left: 50px;
         font-size: 18px;
         }
         font-family: Arial;
         margin: 0;
         }
         .cursor {
         cursor: pointer;
         }
         .text {
         color: #f2f2f2;
         font-size: 15px;
         padding: 8px 12px;
         position: absolute;
         top: 8px;
         width: 100%;
         text-align: center;
         }
         <!-- slide --> 
         body {
         font-family: Verdana, sans-serif;
         }
         img {
         vertical-align: middle;				
         }
         .mySlides {
         display: none;				
         }
         <!-- Slideshow container  -->
         .slideshow-container {
         max-width: 1000px;
         position: relative;
         margin: auto;
         }
         .numbertext {
         color: #f2f2f2;
         font-size: 12px;
         padding: 8px 12px;
         position: absolute;
         top: 0;
         }
         .dot {
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
         }
         .active {
         background-color: #717171;
         }
         <!-- fading animation -->
         .fade {
         -webkit-animation-name: fade;
         -webkit-animation-duration: 1.5s;
         animation-name: fade;
         animation-duration: 1.5s;
         }
         @-webkit-keyframes fade {
         from {opacity: .4} 
         to {opacity: 1}
         }
         @keyframes fade {
         from {opacity: .4} 
         to {opacity: 1}
         }
         @media only screen and (max-width: 300px) {
         .text {font-size: 11px}
         }
		


      </style>
   </head>
   <body style="background-image: url('30.jpg'); margin:0;" >
      <div class="slideshow-container">
         <div class="text">
            <h2>
               <marquee behavior="scroll" direction="left">Join our ongoing fair and Enjoy. Open to All </marquee>
            </h2>
         </div>
         <div class="mySlides fade">
            <img src="slide1.jpg" style="width:100%">
         </div>
         <div class="mySlides fade">
            <img src="slide2.jpg" style="width:100%">
         </div>
         <div class="mySlides fade">
            <img src="slide3.jpg" style="width:100%">
         </div>
         <div class="mySlides fade">
            <img src="slide4.jpg" style="width:100%">
         </div>
         <div class="mySlides fade">
            <img src="slide5.jpg" style="width:100%">
         </div>
      </div>
      </br>
      <div style="text-align:center">
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
      </div>
      <div class="row">
         <div class="column">
            <img src="27.jpg"  style="width:100%" >
         </div>
         <!-- Ongoing event -->
         <div class="column">
            <div class="container">
               <div class="center">
                  <table style="width:40%" align="center" color="#ffffff" >
                     <caption>
                        <h2>Ongoing Events</h2>
                     </caption>
                     <tr>
                        <th style="color:#40E0D0">ID</th>
                        <th style="color:#40E0D0">Event_Name</th>
                        <th style="color:#40E0D0">Venue_ID</th>
                        <th style="color:#40E0D0">Schedule</th>
                        <th style="color:#40E0D0">Attendee_Capacity</th>
                        <th style="color:#40E0D0">Date</th>
                     </tr>
                     <tr>
                        <td style="color:#7FFF00">1001</td>
                        <td style="color:#7FFF00">Birthday Party</td>
                        <td style="color:#7FFF00">H02</td>
                        <td style="color:#7FFF00">..</td>
                        <td style="color:#7FFF00">150</td>
                        <td style="color:#7FFF00">..</td>
                     </tr>
                     <tr>
                        <td style="color:#7FFF00">1002</td>
                        <td style="color:#7FFF00">Seminar</td>
                        <td style="color:#7FFF00">H01</td>
                        <td style="color:#7FFF00">..</td>
                        <td style="color:#7FFF00">200</td>
                        <td style="color:#7FFF00">..</td>
                     </tr>
                     <tr>
                        <td style="color:#7FFF00">1003</td>
                        <td style="color:#7FFF00">Fair</td>
                        <td style="color:#7FFF00">H03</td>
                        <td style="color:#7FFF00">..</td>
                        <td style="color:#7FFF00">180</td>
                        <td style="color:#7FFF00">..</td>
                     </tr>
                  </table>
                  <button class="btn"><a href="form.php" target="_blank">Join Fair</a></button>
               </div>
            </div>
            <img src="102.jpg" alt="Snow" style="width:150%">
         </div>
      </div>
      <!--  -->
      <div class="row">
         <div class="column">
            <img src="rsz_222.jpg" alt="Snow" style="width:140%" >
         </div>
         <div class="column2" align="right">
            <table style="width:73%" >
               <caption>
                  <h3>Venue 1</h3>
               </caption>
               <tr>
                  <th style="padding:15px">Venue_ID</th>
                  <th style="padding:15px">Venue_Name</th>
                  <th style="padding:15px">Address</th>
                  <th style="padding:15px">Description</th>
                  <th style="padding:15px">Capacity</th>
                  <th style="padding:15px">Rate</th>
               </tr>
               <tr>
                  <td style="padding:15px">H01</td>
                  <td style="padding:15px">Marcury Hall</td>
                  <td style="padding:15px">First Floor, East Side</td>
                  <td >
                     <ul>
                        <li>suitable for seminars and conferences</li>
                        <li>On-site parking available</li>
                        <li>Buffet Available</li>
                     </ul>
                  </td>
                  <td style="padding:15px">200</td>
                  <td style="padding:15px">450</td>
               </tr>
            </table>
         </div>
      </div>
      </br>
      <!--  -->	
      <div class="row">
         <div class="column">
            <div class="column4" align="left">
               <table style="width:100%" align="left">
                  <caption>
                     <h2>Venue 2</h2>
                  </caption>
                  <tr>
                     <th>Venue_ID</th>
                     <th>Venue_Name</th>
                     <th>Address</th>
                     <th>Description</th>
                     <th>Capacity</th>
                     <th>Rate</th>
                  </tr>
                  <tr>
                     <td>H02</td>
                     <td>The Party Hall</td>
                     <td>First Floor, West Side</td>
                     <td>
                        <ul>
                           <li>Any kind of Birthday parties or Anniversaries</li>
                           <li>Customized Decoration</li>
                           <li>Buffet Available</li>
                        </ul>
                     </td>
                     <td>150</td>
                     <td>350</td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="column3">
            <img src="rsz_209.jpg" style="width:100%" >
         </div>
      </div>
      <!--  -->
      <div class="row">
         <div class="column">
            <img src="23.jpg" style="width:140%" >
         </div>
         <div class="column3" align="left">
            <table style="width:73%" align="right">
               <caption>
                  <h2>Venue 3</h2>
               </caption>
               <tr>
                  <h4>
                     <th style="padding:15px">Venue_ID</th>
                  </h4>
                  <h4>
                     <th style="padding:15px">Venue_Name</th>
                  </h4>
                  <h4>
                     <th style="padding:15px">Address</th>
                  </h4>
                  <h4>
                     <th style="padding:15px">Description</th>
                  </h4>
                  <h4>
                     <th style="padding:15px">Capacity</th>
                  </h4>
                  <h4>
                     <th style="padding:15px">Rate</th>
                  </h4>
               </tr>
               <tr>
                  <h5>
                     <td >H03</td>
                  </h5>
                  <h5>
                     <td >Maroon</td>
                  </h5>
                  <h5>
                     <td >Top Floor</td>
                  </h5>
                  <h5>
                     <td > ..</td>
                  </h5>
                  <h5>
                     <td >..</td>
                  </h5>
                  <h5>
                     <td >400</td>
                  </h5>
               </tr>
            </table>
         </div>
      </div>
      </br>
      <script>
         var slideIndex = 0;
         showSlides();
         
         function showSlides() {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           var dots = document.getElementsByClassName("dot");
           for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
           }
           slideIndex++;
           if (slideIndex > slides.length) {slideIndex = 1}    
           for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" active", "");
           }
           slides[slideIndex-1].style.display = "block";  
           dots[slideIndex-1].className += " active";
           setTimeout(showSlides, 3000); 
         }
         
         
      </script>
   </body>
</html>

