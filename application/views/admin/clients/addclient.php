<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'aside.php'; ?>
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'nav.php'; ?>
<div class="container">
    <div class="mb-4">
        <div class="row-cols-2 d-flex justify-content-between mb-4">
            <!-- Page Heading -->
            <div class="col-8">
                <a class="btn btn-primary" href="<?= URLROOT . DS . 'Clients' . DS . 'index' ?>">List des clients</a>
                <a class="ml-md-4 btn btn-primary" href="<?= URLROOT . DS . 'clients' . DS . 'addclient' ?>" role="button">Ajouter client </a>
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
    </div>
    <div>
        <!-- alert -->
        <?php if (isset($data['err'])) : ?>
            <div class="<?= $data['class-name'] ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Success!</strong> <?= $data['msg'] ?>
            </div>
        <?php endif; ?>
        <!-- / end alert -->
    </div>
    <div>
        <hr class="sidebar-divider my-0">
        <h2 class="text-dark h2 pl-4">Ajouter client</h2>
        <hr class="sidebar-divider my-0">
    </div>



    <div class=" mt-4">

        <!--start form testing  -->
        <form class="" action="<?= URLROOT . DS . 'Clients' . DS . 'register' ?>" method="POST">
            <div class="row">
                <div class="col">

                    <!-- input for CIN  -->
                    <div class="form-floating mb-4">
                        <label for="floatingInput">CIN</label>
                        <input type="text" class="form-control" name="CIN" value="<?php echo $data['CIN']; ?>" id="floatingInput" placeholder="CIN">
                        <span class="text-danger text-start"><?php echo $data['CIN_err'] ?></span>
                    </div>

                    <!-- input NOM Prenom  -->
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Nom Prenom</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" id="floatingInput" placeholder="Nom Prénom">
                        <span class="text-danger text-start"><?php echo $data['name_err'] ?></span>
                    </div>

                    <!-- input Email  -->
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" id="floatingInput" placeholder="Email">
                        <span class="text-danger text-start"><?php echo $data['email_err'] ?></span>
                    </div>

                  
                </div>
                <div class="col">

                      <!-- input Telephone  -->
                      <div class="form-floating mb-4">
                        <label for="floatingInput">Telephone</label>
                        <input type="text" class="form-control" name="tele" value="<?php echo $data['tele']; ?>" id="floatingInput" placeholder="Telephone">
                        <span class="text-danger text-start"><?php echo $data['tele_err'] ?></span>
                    </div>
                    <!-- input adresse  -->
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Adresse</label>
                        <input type="text" class="form-control" name="adresse" value="<?php echo $data['adresse']; ?>" id="floatingInput" placeholder="Adresse">
                        <span class="text-danger text-start"><?php echo $data['adresse_err'] ?></span>
                    </div>


                    <!-- iput password  -->
                    <div class="form-floating mb-4">
                        <label for="floatingPassword">Mot de passe</label>
                        <input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control" id="floatingPassword" placeholder="Password">
                        <span class="text-danger text-start"><?php echo $data['password_err'] ?></span>
                    </div>
                    <div class="form-floating  ">
            </div>
                   
                </div>
            <button class=" w-100 text-center btn btn-lg btn-primary mt-4 " name="submit" type="submit">Inscrire</button>
            </div>
        </form>


        <!-- end form testing  -->





    </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'footer.php'; ?>