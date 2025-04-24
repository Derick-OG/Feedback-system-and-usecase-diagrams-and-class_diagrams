<?php
session_start();
if (isset($_SESSION['signin'])){
    header("Location:colorarray.php");
    exit();
}
$passwordMessage="";
if (isset($_POST['signin'])) {
    $password = $_POST['password'];
    $passwordChar = strlen($password);
    if($passwordChar === 0) {
        $passwordMessage = "<p style='color:red'>Password is Required</p>";
    } else if($passwordChar < 8) {
        $passwordMessage = "<p style='color:red'>Password must be at least 8 characters</p>";
    }else if(!preg_match('/[A-Z]/', $password)){
        $passwordMessage = "<p style='color:red'>Password must contain at least an Uppercase</p>";
    }else if(!preg_match('/[0-9]/', $password)){
        $passwordMessage= "<p style='color:red'>Password must contain a number</p>";
    } else if(!preg_match('/[\W_]/', $password)){
        $passwordMessage ="<p style='color:red'>Password must contain a special character</p>";
    } else {
        $passwordMessage = "<p style='color:green'>Password is valid</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link rel="stylesheet" href="css/authen.css">
</head>

<body>
    <div class="signin-form">
        <form action="authentication.php" method="post">
            <h2>Sign In</h2>
            <p>Enter your matricule number and password in the fields below to sign in</p>
            <input type="text" name="matricule" class="matricule" placeholder="Matricule">
            <br><br>
            <input type="password" name="password" placeholder="Password" class="password">
            <br>
            <?php
            echo $passwordMessage;
            ?><br>
            <input type="checkbox" name="checkbox" class="checkbox">Remember Me
            <a class="fgtpassword" href="#"> Forgot Password?</a><br>
            <br>
            <button class="btn" name="signin">Sign in</button>
            <h5>Not a student, click here to <a class="apply" href="#">Apply</a></h5>
        </form>

    </div>
</body>

</html>