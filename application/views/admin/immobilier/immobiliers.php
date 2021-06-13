<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'aside.php'; ?>
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'nav.php'; ?>
<!-- Begin Page Content -->
<div class="container">

<?php if (isset($_SESSION['addImmobilier'])) { ?>
        <div class=" alert alert-success" role="alert">
            <?php echo $_SESSION['addImmobilier'];  ?>
        </div>
        <?php unset($_SESSION['addImmobilier']); ?>
    <?php  } ?>
    <?php if (isset($_SESSION['editImmobilier'])) { ?>
        <div class=" alert alert-success" role="alert">
            <?php echo $_SESSION['editImmobilier'];  ?>
        </div>
        <?php unset($_SESSION['editImmobilier']); ?>
    <?php  } ?>
    <?php if (isset($_SESSION['deleteimmobilier'])) { ?>
        <div class=" alert alert-success" role="alert">
            <?php echo $_SESSION['deleteimmobilier'];  ?>
        </div>
        <?php unset($_SESSION['deleteimmobilier']); ?>
    <?php  } ?>
    <!-- DataTales Example -->
    <div class="row-cols-2 d-flex justify-content-between mb-2">
        <!-- Page Heading -->
        <div class="col-8">
            <a class="btn btn-primary" href="<?= URLROOT . DS . 'immobiliers' . DS . 'index' ?>" role="button">List des immobiliers</a>
            <a class="ml-md-4 btn btn-primary" href="<?= URLROOT . DS . 'immobiliers' . DS . 'addimmobilier' ?>" role="button">Ajouter immobilier </a>
        </div>
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
                    <input type="text" class="filter-input form-control  border-1 border-primary" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="search-submit input-group-append ">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>
        <hr class="sidebar-divider my-0">
        <h2 class="text-dark h2 pl-4">Les listes des immobilier</h2>
        <hr class="sidebar-divider my-0">
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Type immobilier</th>
                        <th>Type opération</th>
                        <th>Adresse</th>
                        <th>Le prix</th>
                        <th>Le surface</th>
                        <th>Option</th>
                    </tr>
                </thead>

                <tbody class="table_body">
                    <!-- data will be displayed using javascript -->

                    <!-- <div class="alert-no-data  alert-info fade show text-center d-none" role="alert">
                                            <strong>Vide</strong>
                                        </div> -->

                </tbody>
            </table>


        </div>

    </div>
</div>

<!-- End of Main Content -->
<script type="module" src="<?= URLROOT . '/public/js/data/immobiliers.js' ?>"></script>

<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'footer.php'; ?>