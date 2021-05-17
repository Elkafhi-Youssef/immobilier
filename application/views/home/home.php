<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
 <!-- Begin Page Content -->
    <div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                        <!-- Page Heading -->
                        <div class="col-8">
                            <a id="to_give" class="btn btn-primary" href="#" role="button">Á donner <span class="badge badge-light badge-counter">11</span></a>
                            <a id="to_give_back" class="ml-md-4 btn btn-primary" href="#" role="button">Á rendre <span class="badge badge-light badge-counter">20</span></a>
                            <a id="late" class="ml-md-4 btn btn-primary" href="#" role="button">En retard <span class="badge badge-light badge-counter">2</span></a>
                        </div>
                        <form class="col-4 form-inline navbar-search d-flex justify-content-between">
                                <div class="row">
                                    <div>
                                        <select class="form-control border-primary" name="selected" id="select">
                                            <option value="isbn">ISBN</option>
                                            <option value="title">Titre</option>
                                            <option value="author">Auteur</option>
                                            <option value="category">Categorie</option>
                                        </select>
                                    </div>
                                    <div class="col input-group">
                                        <input type="text" class="form-control  border-1 border-primary"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append ">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                   
                    </div>
                </div>
                <!-- DataTales -->
                <div class="card- shadow- mb-4">
                    <hr class="sidebar-divider my-0">
                    <h2 class="text-dark h2 pl-4" id="title">A donner</h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <tbody class="table_body">
                                        <!-- Data will be displayed using JavaScript -->
                                    </tbody>
                                </table>                       
                            </div>
                        </div>
                </div>
                <script type="module" src="<?=URLROOT.'/public/js/data/home.js'?>"></script>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
