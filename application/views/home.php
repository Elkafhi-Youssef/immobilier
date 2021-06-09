<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.83.1" />
    <title>Immobliler safi</title>

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="/css/style.css"> -->

    <link href="<?php echo URLROOT.DS.'public/css/bootstrap.min22.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT.DS.'public/css/style.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT.DS.'public/fontawesome-free-5.15.3-web/css/all.css'; ?>" rel="stylesheet" >
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
  </head>
  <body>
  
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="col-2 ms-5">
          <a class="navbar-brand" href="#">
            <img src="/vector/default-monochrome.svg" alt="" width="150" height="35">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">partager</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?php echo URLROOT.DS.'Users'.DS.'login'?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo URLROOT.DS.'Users'.DS.'register'?>">Sing in</a>
            </li>
          </ul>
          
        
          <form class="d-flex">
            
            <select class="form-control border-primary me-2 w-25" name="selected" id="s" aria-label="Disabled select example" >
              <option value="isbn">ISBN</option>
              <option value="title">Titre</option>
              <option value="author">Auteur</option>
              <option value="category">Categorie</option>
          </select>
            <input class="form-control me-2 w-75" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        
        </div>
      </div>
    </nav>

    <!-- slid start -->
<div class="container mt-5 p-0" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo URLROOT.DS.'public/images/cover.png';?>" class="d-block w-100 " style=";" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo URLROOT.DS.'public/images/cover.png';?>" class="d-block w-100 " style=";" alt="...">     
         </div>
        <div class="carousel-item">
        <img src="<?php echo URLROOT.DS.'public/images/cover.png';?>" class="d-block w-100 " style=";" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   
</div>
       <!-- slid fin -->

    <main class=" container mb-3"  style="background-color: #F0F2F5;">
      <section class=" text-center container ">
        
        <div class="row pt-3 m-0 text-center">
         
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Veuillez chisi votre choit</h1>
            
            <p>
              <a href="#" class="btn btn-primary my-3">A vendre</a>
              <a href="#" class="btn btn-primary my-3">A louer</a>
              <a href="#" class="btn btn-primary my-3">A ch i7aja</a>
            </p>
          </div>
        </div>
      </section>


      
      <section class="d-flex justify-content-center" >
       <!-- father card  -->
        <div class=" container row mt-5 d-flex justify-content-center">
          
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
              <div class="" style="height: 200px;">
              <img src="<?php echo URLROOT.DS.'public/images/cover.png';?>" class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
              </div>
              <div class="card-body  p-0 m-2 ">
                <h4 class="card-title  ">Appartement</h4>
                <div class="row">
                  <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
              <hr class="border-1">
                <div class="text-center d-flex ">
                  <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                  <div class="w-100 d-flex justify-content-end me-0">
                    <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                    <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- card end  -->
            <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
            <div class="" style="height: 200px;">
            <img src="<?php echo URLROOT.DS.'public/images/cover.png';?> " class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"   alt="...">
            </div>
            <div class="card-body  p-0 m-2 ">
              <h4 class="card-title  ">Appartement</h4>
              <div class="row">
                <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <hr class="border-1">
              <div class="text-center d-flex ">
                <h6 class="mt-3" style="font-size: larger;font-family: 'Courier New', Courier, monospace;">prix</h6>
                <div class="w-100 d-flex justify-content-end me-0">
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 me-1 px-4  ">voir</a>
                  <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                </div>
              </div>
            </div>
          </div>
          <!-- card end  -->
        </div>
        <!-- father card end  -->
        
     </section>
    </main>

   <!-- start  footer  -->
  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center  p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 pt-3 d-lg-block">
      <span class="pt-2">Se connecter avec nous sur le réseau social pour plus d'informations:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
     
          <a class="btn" href="#"><i class="fab fa-facebook-square  "
              style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>
          <a class="btn" href="https://wa.me/qr/Y57TAEINV2TTF1"><i class="fab fa-whatsapp-square "
              style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>
          <a class="btn" href="mailto:elkafhiyoussef@gmail.com"><i class="fas fa-envelope-square "
              style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <a href="mailto:elkafhiyoussef@gmail.com"> <i class="fas fa-envelope me-3"></i> info@example.com</a>
           
           
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <!-- end  footer  -->

    
    <script src="<?php echo URLROOT.DS.'public/js/bootstrap.bundle.min.js'; ?>" ></script>

    


          <!-- </div> -->
  </body>




</html>
