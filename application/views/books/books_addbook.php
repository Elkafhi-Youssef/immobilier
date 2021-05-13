<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
<!-- Begin Page Content -->
                <!-- search by isbn -->
                 <!-- search by isbn -->
                 <div class="row d-flex justify-content-between " >
                    <!-- Page Heading -->
                    <div class="col-4 col-sm-4">
                        <div class="row">
                            <div class="dropdown ml-3">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    Categorie
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="<?= URLROOT.DS.'books'.DS.'getCate' ?>">Info</a>
                                    <a class="dropdown-item" href="#">info1</a>
                                    <a class="dropdown-item" href="#">info2</a>
                                </div>
                            </div>
                            <div class="col">
                                <a class="ml-md-4 btn btn-primary" href="<?= URLROOT.DS.'books'.DS.'addbook' ?>" role="button">Ajouter livre </a>
                            </div>
                        </div>
                        
                        
                    </div>
                    <form class="row col-6 form-inline navbar-search d-flex justify-content-between">

                            <div class=" dropdown ">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class=" input-group col">
                                <input type="text" class="form-control  border-1 border-primary"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append ">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="container">
                    <hr class="sidebar-divider my-0">
                    <h2 class="ml-3">Ajouter livre</h2>
                    <hr class="sidebar-divider my-0">
                </div>
                
                <div class="container d-flex justify-content-center align-items-center mt-4">
                    <div>
                        <p class="font-weight-bolder p-0 m-0 mr-3">Si l'ouvrage déja exist entrer le isbn : </p>
                    </div>
                    <div>
                        <form class="form-inline navbar-search d-flex justify-content-between">
                                <div class="input-group  ">
                                    <input type="text" class="form-control   "
                                        placeholder="Entrer isbn..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append ">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div> <!-- / end search by isbn -->
                 
                <div class="container mt-4">
                    <form action="" class="container">
                       <div class="row">
                            <div class="mt-2 col-md-6">
                                <input required type="number" class="form-control"
                            placeholder="Entrer isbn" 
                            aria-describedby="basic-addon2">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Entrer titre de l'ouvrage" 
                            aria-describedby="basic-addon2">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Entrer le nom de l'auteur" 
                            aria-describedby="basic-addon2">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Entrer le categorie de l'louvrage" 
                            aria-describedby="basic-addon2">
                            </div>
                            <div class="mt-2 col">
                                <input required type="number" class="form-control"
                            placeholder="Entrer le nombre de copy a inserer" 
                            aria-describedby="basic-addon2">
                            </div>
                            <div class="mt-2 col-md-2">
                                <input required type="submit" class="btn btn-success form-control"
                            value="Inserer"
                            aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <!-- /.container-fluid -->
            </div>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
