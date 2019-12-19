<?php 
   //session_start();
    if($data['status'] === false){
        echo "<script>
        alert('Login Failrure, Please Try Again')
        </script>";
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/main.css">
    <title>SEVVA.ID | <?= $data['title'] ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?=BASEURL;?>" width="30" height="30" class="d-inline-block align-top" alt=""> SEVVA.ID
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-1">
                    <a class="nav-item nav-link" href="<?=BASEURL;?>">Home</a>
                    <a class="nav-item nav-link" href="#">About Us</a>
                    <a class="nav-item nav-link" href="#">Motorbikes</a>
                    <a class="nav-item nav-link" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
<br><br>
<div class="container">
    <h1>Login into Sevva Account</h1>
    <form method="POST" action="<?=BASEURL;?>/login/cekUser">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br><br>
  <p>or <a href="<?=BASEURL;?>/register/index">Sign Up</a></p>
</form>
</div>