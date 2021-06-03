<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
<!-- Begin Page Content -->
<div class="container">
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
                        <h2 class="ml-3" id="title">List des clients</h2>
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">
                        <div class="row">
                            <div>
                                <select class="filter-option form-control border-primary">
                                    <option value="id" class="option_id">identifiant</option>
                                    <option value="first_name">nom</option>
                                    <option value="last_name">prenom</option>
                                    <option value="phone">phone</option>
                                    <option value="email">email</option>
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
                                    <thead class="table_head">
                                        <!--  -->
                                    </thead>
                                    <tbody class="table_body">
                                        <!--   -->
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
            </div> 
            <!-- End of Main Content -->
            <script type="module" src="<?=URLROOT.'/public/js/data/users.js'?>"></script>

<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>





