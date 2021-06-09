<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'aside.php'; ?>
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'nav.php'; ?>
<div class="container">
    <div class="mb-4">
        <div class="row-cols-2 d-flex justify-content-between mb-4">
            <!-- Page Heading -->
            <div class="col-8">
                <a class="btn btn-primary" href="<?= URLROOT . DS . 'immobiliers' . DS . 'index' ?>">List des immobiliers</a>
                <a class="ml-md-4 btn btn-primary" href="<?= URLROOT . DS . 'immobiliers' . DS . 'addimmobilier' ?>" role="button">Ajouter immobilier </a>
                <a class="ml-md-4 btn btn-primary" href="<?= URLROOT . DS . 'immobiliers' . DS . 'addimmobilier' ?>" role="button">Modifier immobilier </a>
            </div>
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
        <h2 class="text-dark h2 pl-4">Modifier immobilier</h2>
        <hr class="sidebar-divider my-0">
    </div>



    <div class=" mt-4">
        <form action="<?= URLROOT . DS . 'Immobiliers/editImmobilier' ?>" method="POST" class="container" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-2 col-md-6">
                    <select name="type_immobilier" class="form-control border-gray me-2" id="s" aria-label="Disabled select example">
                        <option value="<?php echo $data['type_immobilier']; ?>" selected><?php echo $data['type_immobilier']; ?></option>
                        <option value="appartement">Appartement</option>
                        <option value="villa">Villa</option>
                        <option value="magasin">Magasin</option>
                    </select>
                </div>

                <!-- input for type operation  -->
                <div class="mt-2 col-md-6">
                    <select name="type_operation" class="form-control border-gray me-2" id="s"  aria-label="Disabled select example">
                        <option value="<?php echo $data['type_operation']; ?>" selected><?php echo $data['type_operation']; ?></option>
                        <option value="a vendre">A vendre</option>
                        <option value="a louer">A louer</option>

                    </select>
                </div>
                <!-- input for @@@@@ immobilier  -->
                <div class="mt-2 col-md-6">
                  <input required type="text" value="<?php echo $data['adresse']; ?>" class="form-control" placeholder="Entrer l'adresse d'immobilier" name="adresse" aria-describedby="basic-addon2">
                </div>

                <!-- input for descreption  -->
                <div class="mt-2 col-md-6">
                    <input required type="text" class="form-control" placeholder="Entrer la descreption d'immobilier" name="descreption" value="<?php echo $data['descreption']; ?>" aria-describedby="basic-addon2">
                </div>

                <!-- input for images  -->
                <div class="mt-2 col-md-6">

                    <input type="file" name="file[]" id="img" class="form-control" value="<?php echo $data['img']; ?>" multiple="multiple" />

                </div>



                <!-- input for suface  -->
                <div class="mt-2 col-md-6">
                    <input required type="number" class="form-control" placeholder="Entrer la surface d'immobilier" name="surface" value="<?php echo $data['surface']; ?>" aria-describedby="basic-addon2">
                </div>
                <!-- input for price  -->
                <div class="mt-2 col-md-6">
                    <input required type="number" class="form-control" placeholder="Entrer le prix" value="<?php echo $data['prix']; ?>" name="prix" aria-describedby="basic-addon2">
                </div>
               
                <!-- input for submit  -->
                <div class="mt-2 col-md-6">
                    <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Modifier</button>                    
                </div>
                <div class="mt-2 col-md-6">
                    <input required type="number" class="invisible" value="<?php echo $data['id_immobilier']; ?>" name="id" aria-describedby="basic-addon2">
                </div>
                <?php echo $data['id_immobilier']; ?>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<?php require_once VIEWS_PATH . DS . 'views.inc' . DS . 'footer.php'; ?>
