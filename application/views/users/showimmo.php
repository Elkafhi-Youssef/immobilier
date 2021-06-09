<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'user.nav.php'; ?>





<!-- slid start -->
<section class="container">
  <div class="container mt-5 p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
      <?php $arr = explode(" ", $data['img']); ?>
        <div class="carousel-item active">
          <img src="<?php echo URLROOT . DS . 'public/upload/' . $arr[0]; ?>" style="object-fit: cover; height: 450px;" class="border d-block w-100" alt="...">
        </div>
        <?php for ($i = 1; $i < count($arr); $i++) { ?>
          <div class="carousel-item ">
            <img src="<?php echo URLROOT . DS . 'public/upload/' . $arr[$i]; ?>" style="object-fit: cover; height: 450px;" class="d-block w-100" alt="...">
          </div>
        <?php } ?>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
</section>
<!-- slid fin -->
<!-- stsrt bar info for immobilier  -->
<section class="container mt-5 mb-3">
  <!--  start sentence  -->
  <div class="info text-center d-flex justify-content-center bg-light shadow">
    <p class="w-75 " style="font-family: 'Courier New', Courier, monospace; color: rgb(49, 44, 44);">Lorem ipsum dolor
      sit amet consectetur adipisicing elit. Rerum exercitationem reprehenderit maxi</p>
  </div>
  <!--  end sentence  -->
  <div class="container w-75 ms-0">
    <!-- start type immobilier and btn demande  -->
    <div class="mt-4 d-lg-flex justify-content-between d-sm-block">

      <div>
        <h3><?php echo $data['type_immobilier']." ".$data['type_operation'] ; ?> </h3>
      </div>
      
      
      <div class="">

        <!-- modal for inter date ans time for demande  -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Demande Visite
        </button>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?= URLROOT . DS . 'demandes/adddemande' ?>" method="post">
                <!-- input for date  -->
                  <label for="date">entrer date de visite</label>
                  <input  name="date" class="form-control form-control-lg" type="date" id="date" form-control-lg" aria-label=".form-control-lg example" required>
                  <!-- input for time  -->
                  <label for="time">entrer temps de visite</label>
                  <input name="time" class="form-control form-control-lg" type="time" id="time" placeholder=".form-control-lg" aria-label=".form-control-lg example" required>
                  <!-- get id user  -->
                  <input name="user_id" value="<?php echo $_SESSION['user_id'] ;?>" class="visually-hidden" type="number">
                  <!-- get id immmobilier  -->
                  <input name="id_immobilier" value="<?php echo $data['id_immobilier'] ;?>" class="visually-hidden" type="text">
              <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Refuse</button>
                <button class="btn btn-primary $blue-100" name="submit" type="submit">Términer</button>
              </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- modal for inter date ans time for demande  -->

        <a class="btn" href="#"><i class="fab fa-facebook-square  " style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>
        <a class="btn" href="#"><i class="fab fa-whatsapp-square " style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>
        <a class="btn" href="#"><i class="fas fa-envelope-square " style="color: rgb(116, 185, 197);font-size: 30px;"></i> </a>

      </div>
    </div>
    <hr class="bg-primary">
    <!-- end type immobilier and btn demande  -->
    <!-- start adress  -->
    <div class="mt-4  d-flex ">
      <div class="d-flex">
        <i class="fas fa-map-marker-alt " style="color: red;font-size: 30px;"></i>
        <h4 class="ms-3 pt-1"><?php echo $data['adresse']; ?></h4>
      </div>
    </div>

    <!-- end adress  -->

    <hr class="bg-primary">

    <!-- start price && distace-->

    <div class="mt-4  d-flex  justify-content-between">
      <div class="d-flex">
        <i class="fas fa-money-bill-alt " style="color: red;font-size: 30px;"></i>
        <h6 class="ms-3 pt-1 border-bottom h5"><?php echo $data['prix']; ?><span class="p-2 ">DH</span></h6>
      </div>
      <div class="d-flex me-5 ">
        <i class="fas fa-expand-alt" style="color: red;font-size: 30px;"></i>
        <h6 class="ms-3 pt-1 border-bottom h5 "><?php echo $data['surface']; ?><span class="p-2">m²</span></h6>
      </div>

    </div>
    <!-- end price && distace-->

    <hr class="bg-primary">
    <!-- start description-->

    <div class="mt-4   justify-content-between">
      <div class="w-75">
        <h5>Descripttion</h5>
        <p><?php echo $data['description']; ?>

        </p>
      </div </div>
      <!-- end description-->
    </div>

</section>

<!-- start  footer  -->
<!-- Footer -->
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'user.footer.php'; ?>
