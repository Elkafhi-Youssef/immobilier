<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->

<link href="<?php echo URLROOT.DS.'public/bootstrap/bootstrap.min1.css'; ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  
    <div class=" d-flex justify-content-center">
      <main class="form-signin container d-flex justify-content-center">
        <form class="w-50" action="<?=URLROOT.DS.'Users'.DS.'login' ?>" method="POST" >
        
          <img class="mb-4" src="<?php echo URLROOT.DS.'public/images/ests.png'; ?>" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">CONNECTEZ-VOUS</h1>

          <div class="form-floating mb-4">
            <input type="email" class="form-control" name="email"  value="<?php echo $data['email']; ?>" id="floatingInput" placeholder="Password" >
            <span class="text-danger text-start"><?php echo $data['email_err'] ?></span>
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password"  name="password"  value="<?php echo $data['password']; ?>" class="form-control" id="floatingPassword" placeholder="Password">
            <span class="text-danger text-start"><?php echo $data['password_err']?></span> 
            <label for="floatingPassword">Mot de passe</label>
          </div>

          <div class="checkbox mb-3">
          
          </div>
          <button class="w-100 btn btn-lg $blue-100" name="submit" type="submit">CONNECTEZ-VOUS</button>
          
        </form>
      </main>
   </div>

    
  </body>
</html>
