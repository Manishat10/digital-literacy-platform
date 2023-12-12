
<?php
if(isset($_POST['submit'])) 
{
    $NAME=$_POST['NAME'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $host="localhost";
    $username="root";
    $password="";
    $dbname="feedback";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $sql="INSERT INTO signup(NAME,email,password) values('$NAME','$email','$password')";
    mysqli_query($conn,$sql);
} 
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="formbox">
                <h1 style="color:white; text-decoration:double;text-decoration-line: none;">SIGN UP
                </h1>
                <form action="#" method="POST">
                    <div class="main">
                        <input type="text" name="NAME" id="name" placeholder="name">
                        
                    </div>
                    <div class="main">
                        <input type="email" name="email" id="email" placeholder="email">
                    </div>
                    <div class="main"><input type="password" name="password" id="password" placeholder="password">
                    </div>
                    <br><br><input type="submit" name="submit" id="submit" value="SUBMIT">
                    <input type="hidden" name="redirect" value="http://localhost/DigitalLiteracyPlatform/signin.php">
                    <p style="margin-top: 9px; color: white;">Already have an account?<a style="color: blue;"
                            href="http://localhost/DigitalLiteracyPlatform/signin.php" > sign in</a></p>

                </form>
            </div>
    </center>
    </div>

</body>

</html>