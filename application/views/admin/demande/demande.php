<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
 <!-- Begin Page Content -->
 <div class="container">
                <div class="alert alert-dismissible fade show d-none" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                </div>
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading --> 
                 </div>
              </div>
                    <!-- DataTales Example -->
                <div class="card- shadow- mb-4">
                    <hr class="sidebar-divider my-0">
                        <div class="row">

                            <div class="col">
                            <h2 class="text-dark h2 pl-4">List des demande</h2>
                            </div>
                            <form class="col-4 form-inline navbar-search d-flex justify-content-between">
                                <div class="row">
                                    <div>
                                        <select class="filter-option form-control border-primary">
                                            <option value="all">Tous</option>
                                            <option value="isbn">ISBN</option>
                                            <option value="title">Titre</option>
                                            <option value="fullname">Auteur</option>
                                            <option value="cat_name">Categorie</option>
                                        </select>
                                    </div>
                                    <div class="col input-group">
                                        <input type="text" class="filter-input form-control  border-1 border-primary"
                                            placeholder="Rechercher..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="search-submit input-group-append ">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>

                    <hr class="sidebar-divider my-0">
                 
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom Pr??nom</th>
                                            <th>Type Immobilier</th>
                                            <th>Date/Heur</th>
                                            <th>.....</th>
                                            <th>D??cision</th>
                                            
                                        </tr>
                                    </thead>
                                  
                                    <tbody class="table_body">
                                        <!-- data will be displayed using javascript -->
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

            </div>
            <script type="module" src="<?=URLROOT.'/public/js/data/home.js'?>"></script>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
