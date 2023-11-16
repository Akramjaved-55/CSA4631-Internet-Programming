<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            padding-left: 550px;
            padding-top:280px;
        }
        .jo{
            font-size:30px;
            padding-left:50px;
        }
           
        a{
        background-color: red;
            width: 50px;
            padding: 1px;
            margin: 60px;
            border-radius:15px;
            color:white;
            padding-left:10px;
            padding-right:10px;
    }
    a:hover{
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
            <h1>Mode Of Payment</h1>
            <br>
            <div class="jo">
            <input type="radio"><label>gpay</label>
            <br>
            <input type="radio"><label>Phonepay</label>
            <br>
            <input type="radio"><label>Patym</label>
</div>
<br>
         <a href="pay.php" class="co">Pay Now</a>
</body>
</html>