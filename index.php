<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Gateway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .grad1{
    height:250px;
    width: 100%;
    background-color: red;
    background-image: linear-gradient(red,yellow,grey);
    text-align:center;
    border-color:black;

  }
  .grad2{
    height:250px;
    width:100%;
    margin-top:50px;
    background-color: red;
    background-image: linear-gradient(grey,yellow,red);
    text-align:center;

  }
  h1{
    text-shadow : 2px 2px black;
    text-align:center;
    margin-top:50px;
  }
  </style>
</head>
<body>

<div class="container-fluid">

<div  class="grad1">
       <h1 style="color:green;font-size:50px;text-align:center;padding-top:70px;"> PAYPAL PAYMENT INTEGRATION GATEWAY </h1>
</div>
<div  class="grad2">
      <button class="button" style="border-radius:5px;margin-top:100px;color:white;width:150px;height:70px;font-size:40px;background-color:blue;" onclick="location.href='main.php'">Donate</button>
 </div>     
</div>

</body>
</html>
