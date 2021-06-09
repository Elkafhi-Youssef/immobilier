
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php'; ?>
 
 

 
 
<!-- slid start -->

 <div class="container mt-5 p-0" >
 <div class="container w-50"> 
 <!-- message for if add demande or no  -->
    <?php if (isset($_SESSION['status'])) { ?>
        <div class=" alert alert-success" role="alert">
            <?php echo $_SESSION['status'];  ?>
        </div>
        <?php unset($_SESSION['status']); ?>
    <?php  } ?>
 </div>
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
          <img src="<?php echo URLROOT.DS.'public/images/ests.png';?>" class="d-block w-100 border shadow" style="height: min-content;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo URLROOT.DS.'public/images/cover.png';?>" class="d-block w-100" alt="...">
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
              <a href="#" class="btn btn-outline-primary my-3">A vendre</a>
              <a href="#" class="btn btn-outline-primary my-3">A louer</a>
              
            </p>
          </div>
        </div>
      </section>


      
      <section class="d-flex justify-content-center" >
       <!-- father card  -->
        <div class=" container row mt-5 d-flex justify-content-center">
          <?php foreach($data as $data){?>
          <!-- start card  -->
          <div class="m-3  card col-4 p-0 " style="width: 18rem;height:auto ;">
              <div class="" style="height: 200px;">
              <?php $arr = explode(" ", $data['img']); ?>
              <img src="<?php echo URLROOT . DS . 'public/upload/' . $arr[0]; ?>" class=" card-img-top  h-100 w-100 of" style="object-fit: cover;"alt="...">
              </div>
              <div class="card-body  p-0 m-2 ">
                <h4 class="card-title  "><?php echo $data['type_immobilier']; ?></h4>
                <div class="row">
                  <p style="font-size: 13px; font-family: 'Courier New', Courier, monospace;"><?php echo $data['description']; ?></p>
              </div>
              <hr class="border-1">
                <div class="text-center d-flex ">
                  <h6 class="mt-3 border-bottom border-primary" style="font-size: larger;font-family: 'Courier New', Courier, monospace;"><?php echo $data['prix']; ?><span class="p-2 ">DH</span></h6>
                  <div class="w-100 d-flex justify-content-end me-0">
                    <a href="<?=URLROOT.DS.'Immobiliers'.DS.'showimmobilier'.DS.$data['id_immobilier']?>" class="btn btn-outline-primary mt-2 me-1 ms-4 px-4  ">voir</a>
                    <a href="immobilier.html" class="btn btn-outline-primary mt-2 px-4 me-3 ">visit</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- card end  -->
            <?php } ?>
            
        </div>
        <!-- father card end  -->
        
     </section>
    </main>



        <?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'user.footer.php'; ?>
