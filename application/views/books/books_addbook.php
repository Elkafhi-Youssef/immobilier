<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
<div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="<?= URLROOT.DS.'books' ?>" role="button">List des livres</a>
                        <a class="ml-md-4 btn btn-primary" href="<?= URLROOT.DS.'books'.DS.'addbook' ?>" role="button">Ajouter livre </a>
                    </div>
                    <div class="col-4 d-none">
                    </div>
                   
                 </div>
              </div>
    
                    <hr class="sidebar-divider my-0">
                    <h2 class="text-dark h2 pl-4">Ajouter livre</h2>
                    <hr class="sidebar-divider my-0">

                
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
