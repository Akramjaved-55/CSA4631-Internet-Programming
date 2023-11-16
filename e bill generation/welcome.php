<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            padding-top:230px;
            font: 20px 'Times New Roman', Times, serif;
            text-align: center; }
        .do{
            background-color: red;
            width: 50px;
            padding: 10px;
            margin: 20px;
            border-radius: 10px;
            color:white;
            padding-right:30px;
            padding-left:30px;
        }
        .do:hover{
            color:black;
            text-decoration:none;
        }
        
        .co{
            background-color: red;
            width: 50px;
            padding: 10px;
            margin: 20px;
            border-radius: 10px;
            padding-right:20px;
            padding-left:20px;
            text-decoration: none;
            color:white;

        }
        .co:hover{
            color:black;
            text-decoration:none;
        }

    
html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
    </style>
</head>
<body>
    
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the ebill.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <br>
        <br>
        <br>
        <b><h2>Select the option to calculate the bill</h2></b>
        <br>
        <br>
        <a href="domestic.php" class="do">Domestic</a>
        <a href="commercial.php" class="co">Commercial</a>
    </p>
</body>
</html>