
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php'; ?>
 
<div class="w-50 container-sm mt-5">
    <div class="row">
        <div class="col-4">
            <select class="form-select border-primary" aria-label="Default select example">
                <option selected>Choisi une categorie</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-8">
            <form class="d-flex border-primary">
                <input class="form-control me-2 border-primary" type="search" placeholder="Search" aria-label="Search" />

                <button class="btn btn-outline-primary" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</div>

<section class=" d-flex justify-content-center mt-5" style="background-color: #F0F2F5;">
    <!-- start group cards  -->
    <div class=" row mt-5 mb-5 justify-content-around container ">
        <!-- card start  -->
        <div class=" card col-3 p-0 mt-3 " style="width: 18rem;         height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="<?=URLROOT.DS.'Users'.DS.'commandUser/'.$_SESSION['user_id'].'/2'?>" class="btn btn-primary mt-2  ">Commander ici</a>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start  -->
        <div class=" card col-3 p-0 mt-3 " style="width: 18rem;         height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="#" class="btn btn-primary mt-2  ">Commander ici</a>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start  -->
        <div class=" card col-3 p-0 mt-3 " style="width: 18rem;         height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="#" class="btn btn-primary mt-2  ">Commander ici</a>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start  -->
        <div class=" card col-3 p-0 mt-3 " style="width: 18rem;         height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="#" class="btn btn-primary mt-2  ">Commander ici</a>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start  -->
        <div class=" card col-3 p-0  mt-3" style="width: 18rem;height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="#" class="btn btn-primary mt-2  ">Commander ici</a>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start  -->
        <div class=" card col-3 p-0 mt-3 " style="width: 18rem;height:auto ;">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png' ?>" class=" card-img-top " alt="...">
            <div class="card-body ">
                <h4 class="text-center card-title  ">JavaScript</h4>
                <div class="d-flex justify-content-around">
                    <span class="">Categorie</span>
                    <span>Auteur</span>
                </div>
                <hr class="border-1">
                <div class="text-center">
                    <a href="#" class="btn btn-primary mt-2  "> <?php echo'<p>'. $_SESSION['user_id'] .'</p>' ?></a>
                </div>
            </div>
        </div>
        <!-- card end -->


    </div>
    <!-- end group cards  -->

</section>





        <?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'user.footer.php'; ?>
