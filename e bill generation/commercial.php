<!DOCTYPE HTML>
<html>
<head>
<title>Commercial</title>
<style>
    body{
        position: fixed;
    }
    .col-6{
        padding-left:550px;

    }
    h1{
        padding-top:270px;
        padding-left:400px;
    }
    button{
        margin-left:100px;
        background-color:red;
        color:white;
    }
    button:hover{
        color:black;
    }
    .ab{
        padding-left:580px;
        padding-right:700px;
        text-decoration:none;
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
    <h1>Enter the units to generate the Commercial bill.</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form method="post" action="">
<div class="form-group">
<label for="units"><b>Units:</b></label>
<input type="text" class="form-control" id="units" name="units"> </div>
<br>
<button type="submit" class="btn btn-primary" name='btn'>Get Bill</button>

</form>
</div>
<br>
<div class=ab>
<?php
   if(isset($_POST['btn']))
   {
   $units=$_POST['units'];
    $total=0;
    echo "<hr><h3>Bill details</h3><hr>";
    if($units>300){
        $u1 = 100*2;
        echo"100*2=$u1<br>";

        $u2 = 200*4.50;
        echo"200*4.50=$u1<br>";

        $rem=$units-300;
        $u3=$rem*6;
        echo"$rem*6=$u3<br>";

        $total=$u1+$u2+$u3;
        echo"<hr>Total bill=$total<hr>";
    }
    else if($units>100 && $units<=300)
    {
        $u1 = 100*1;
        echo"100*2=$u1<br>";

        $rem=$units-100;
        $u2=$rem*4.50;
        echo"$rem*4.50=$u2<br>";

        $total=$u1+$u2;
        echo"<hr>Total bill=$total<hr>";
    }
    else{
         $total=$units*6;
         echo "$units *6=$total<br>";
         echo"<hr>Total bill=$total<hr>";
    }
  
   }
?>
<br>
  <a href="payment.php" class="co">Pay Now</a>
</div>

</body>
</html>
