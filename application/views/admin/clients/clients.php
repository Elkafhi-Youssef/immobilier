<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
<!-- Begin Page Content -->
<div class="container">

                    <!-- DataTales Example -->
            <div class="row-cols-2 d-flex justify-content-between mb-2" >
                 <!-- Page Heading -->
                 <div class="col-7">
                     <a class="btn btn-primary" href="<?= URLROOT.DS.'clients'.DS.'index' ?>" role="button">List des clients</a>
                     <a class="ml-md-4 btn btn-primary" href="<?= URLROOT.DS.'clients'.DS.'register' ?>" role="button">Ajouter client</a>
                 </div>
                 <div class="col">
                 <form class=" form-inline navbar-search d-flex justify-content-between">
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
            </div>
                    <div>
                    <hr class="sidebar-divider my-0">
                     <h2 class="text-dark h2 pl-4">Liste des clients</h2>
                    <hr class="sidebar-divider my-0">
                    </div>


                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead class="">
                                        <tr>
                                            <th>CIN</th>
                                            <th>Nom Prénom</th>
                                            <th>Gmail</th>
                                            <th>Telephone</th>
                                            <th>Adresse</th>
                                            <th>Image</th>



                                        </tr>
                                    </thead>

                                    <tbody class="table_body">
                                        <!-- data will be displayed using javascript -->



                                    </tbody>
                                </table>


                            </div>

                        </div>
            </div>
            <!-- End of Main Content -->
            <script type="module" src="<?=URLROOT.'/public/js/data/clients.js'?>"></script>

<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
