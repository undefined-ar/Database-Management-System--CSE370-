<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HMS | Welcome</title>
    </head>     
    <body >
        <div class="home">
        <nav class="navbar">
            <h1>HMS</h1>
            <p>Hotel Managemnt System</p>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
         </nav>
         <div class="right">
    <form action="submit.php" class="form_design" method="post">
            <fieldset>
                <legend>Personal Details: </legend>
                <label for="name">Username: </label><input type="name" name="username" id="name" required autofocus placeholder="Your username" pattern="[a-zA-Z]{3,}" title="Please enter more than three letters"><br>
                <label for="password">Password: </label><input type="password" name="password" id="password" required autofocus placeholder="Password"  title="Please enter more than three letters"><br>
                <label for="email">Email: </label><input type="email" name="email" id="email" required placeholder="Your Email"  title="Please enter a valid Email address"><br>
                <label for="mobile">Mobile: </label><input type="mobile" id="number" name="phone" required placeholder="Please enter your mobile number" title="Please enter your mobile number in this format:#### ### ###"><br>
            </fieldset>
            <br>
            <fieldset>
                <legend>Booking Details: </legend>
                <label for="date">Booking date: </label><input type="date" id="date" name="date" min="2021-03-09"><br>
                <label for="numberofguests">Number of Guests:</label><input id="numberofguests" type="number" name="number_of_guest" min="1" max="5"><br>
                <p>Do you need food service?</p>
                <label for="yes">Yes </label><input id="yes" type="radio" name="food_service" value="yes"><br>
                <label for="no">No: </label><input id="no" type="radio" name="food_service" value="no"><br>
                <button class="btn" id="modalBtn">Submit</button>
            </fieldset>
</div>
        </form>
</div>
    </body> 
</html>        