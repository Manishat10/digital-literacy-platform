<?php

// Check if the user is already logged in
if (isset($_POST['email'])) {
    // The user is already logged in, redirect them to the dashboard
    header('Location: http://127.0.0.1:5502/index.html');
    exit;
}

// Establish a database connection
$conn = mysqli_connect('localhost', 'root', '', 'feedback');

if (!$conn) {
    // Handle connection error
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the user exists in the database
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // The user exists, log them in
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $user['email'];
        header('http://127.0.0.1:5502/index.html');
        exit;
    } else {
        // The user does not exist, show an error message
        echo 'Invalid credentials. Please try again.';
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page</title>
    <link rel="stylesheet" href="signin.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="formbox">
                <h1 style="color:white; text-decoration: double;text-decoration-line: inherit;">SIGN IN
                </h1>
                <form action="#" method="POST">
                    <div class="main">
                        <input type="email" name="email" id="email" placeholder="email">
                    </div>
                    <div class="main">
                        <input type="password" name="password" id="password" placeholder="password">
                    </div>
                    <input type="submit" name="submit" id="submit" value="SUBMIT">
                    <p style="margin-top: 9px; color: white;">Don't have an account?<a style="color: blue;"
                            href="http://localhost/DigitalLiteracyPlatform/signup.php#"> sign up</a></p>

                </form>
            </div>
        </div>
    </center>

</body>

</html>