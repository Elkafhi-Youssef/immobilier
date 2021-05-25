<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>biblio ests</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <!-- <link href="/fontawesome-free-5.15.3-web/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo URLROOT.DS.'public/bootstrap/bootstrap.min1.css'; ?>" rel="stylesheet">

    
    <link href="<?php echo URLROOT.DS.'public/bootstrap/fontawesome-free/css/fontawesomeUser.css'; ?>" rel="stylesheet">
  </head>
  <body style="overflow-x: hidden;">
    <!-- strt nav bare  -->
    <nav
      class="
        navbar navbar-expand-lg navbar-light
        shadow
        p-3
        mb-3
        bg-body
        rounded
      "
      style="background-color: #1c1e21
      ;"
    >
    
      <div class="container">
          <div class="">
            <img src="ests.png" class="" style="width: 50px;height: auto;margin-right: 15px;" alt="">
            <a class=" navbar-brand" href="#">Biblio</a>
          </div>
         <div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <div class=""> -->
                <ul class="  navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/login.html">Log-in</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Sing in</a>
                    </li>
                </ul>
            <!-- </div> -->
        </div>
        </div>
      </div>
    </nav>
    <!-- end nav  -->