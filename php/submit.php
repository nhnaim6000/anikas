<?php

if(isset($_POST['submit_btn'])){
   $user_email = $_POST['user_email'];

   $conn = mysqli_connect('localhost', 'fnmaster', 'anantanaim%', 'fnmaster_wp763') ;
 
   $query = " INSERT INTO `anikas` (`email`) VALUE ('$user_email') ";

   $submit_done = mysqli_query($conn, $query);

   

}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Message</title>
  </head>
  <body class=" d-flex  justify-content-center align-items-center min-vh-100">
    <div class="container">
<div class="row">

<div class="col-12">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><?php if($submit_done){echo "Message Send Successfully";}?></h4>
  <p><?php if($submit_done){echo "Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.";}?></p>
  <hr>
  <p class="mb-0"><?php if($submit_done){echo "Whenever you need to, be sure to use margin utilities to keep things nice and tidy.";}?></p>
</div>

</div>



<div class="col-12">
<div <?php if(!$submit_done){echo 'class="alert alert-danger"';}?> role="alert">
  <h4 <?php if(!$submit_done){echo 'class="alert-heading"';}?> > <?php if(!$submit_done){echo "Message Send Failed";}?></h4>
  <p><?php if(!$submit_done){echo "Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.";}?></p>
  
  <p class="mb-0"><?php if(!$submit_done){echo "Whenever you need to, be sure to use margin utilities to keep things nice and tidy.";}?></p>
</div>

</div>


</div>
  
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>