<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
         body {
         font-family: Arial, Helvetica, sans-serif;
         background-color: black;
         }
		 
         * {
         box-sizing: border-box;
         }
		         
         .container {
         padding: 16px;
         background-color: white;
         }
         
         input[type=text], input[type=password] {
         width: 100%;
         padding: 15px;
         margin: 5px 0 22px 0;
         display: inline-block;
         border: none;
         background: #f1f1f1;
         }
		 
         input[type=text]:focus, input[type=password]:focus {
         background-color: #ddd;
         outline: none;
         }
		          
         hr {
         border: 1px solid #f1f1f1;
         margin-bottom: 25px;
         }
         
         .registerbtn {
         background-color: #04AA6D;
         color: white;
         padding: 16px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 100%;
         opacity: 0.9;
         }
		 
         .registerbtn:hover {
         opacity: 1;
         }
         
         a {
         color: dodgerblue;
         }
        
      </style>
   </head>
   <body>
      <form action="google.com">
         <div class="container">
            <h1>Join</h1>
            <p>Please fill up this form to join.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>
            <label for="contact"><b>Contact Number</b></label>
            <input type="password" placeholder="Contact Number" name="contact" id="contact" required>
            <hr>
            <p>By joining the fair you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Join</button>
         </div>
      </form>
   </body>
</html>