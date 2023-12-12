<?php
if(isset($_POST['submit'])) 
{
    $NAME=$_POST['NAME'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];

    $host="localhost";
    $username="root";
    $password="";
    $dbname="feedback";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $sql="INSERT INTO feedback(NAME,email,phone,feedback) values('$NAME','$email','$phone','$feedback')";
    mysqli_query($conn,$sql);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <header>
        <h1>Digital Enlightenment
          <p id="quote">Access to everything <br>for everyone</p>
        </h1>
      </header>
      <nav>
       <a href="http://127.0.0.1:5502/Home.html">Home</a>
       <a href="http://127.0.0.1:5502/Tutorials.html">Tutorials</a>

       <a href="http://127.0.0.1:5502/About.html">About Us</a>
       <a href="http://127.0.0.1:5502/Contactus.html">Contact us</a>
       <a href="http://127.0.0.1:5502/feedback.html">Feedback</a>
      </nav>
    
      <div id="google_element" style="text-align: center;"></div>
      <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
      <script>
        function loadGoogleTranslate(){
          new google.translate.TranslateElement("google_element");
        }
      </script>
      <h2>
        <strong>Feedback Form</strong>
      </h2>
      <div class="store">
        <p id="details">Enter your details here....</p>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="NAME" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Enter E-mail">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter Phone No.">
            </div>
            <div>
                <label id="textbox" for="freeform">Drop your feedback:</label>
                <!-- <br> -->
                <textarea id="freeform" name="feedback" rows="4" cols="50" maxlength="300" placeholder="Max Allowed Characters :300">
                </textarea>
            </div>
           <br><br><input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
    <footer class="foot">
        <a id="privacy" href="//Privacy.com">Privacy Policy & terms</a>
        <a id="help" href="//HelpCenter.com">Help</a></li>
    </footer>
</body>
</html>