<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
 <!-- Begin Page Content -->
 <div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="<?= URLROOT.DS.'books'?>" role="button">List des livres</a>
                        <a class="ml-md-4 btn btn-primary" href="<?= URLROOT.DS.'books'.DS.'addbook' ?>" role="button">Ajouter livre </a>
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">

                            <div class=" dropdown mr-1">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="col input-group  ">
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
              </div>
                    <!-- DataTales Example -->
                <div class="card- shadow- mb-4">
                    <hr class="sidebar-divider my-0">
                    <h2 class="text-dark h2 pl-4">List des livre</h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ISBN</th>
                                            <th>NV</th>
                                            <th>Titre</th>
                                            <th>Categorer</th>
                                            <th>Authuer</th>
                                            <th  class="d-flex justify-content-center">Etat</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>23</td>
                                            <td>cpp</td>
                                            <td>info</td>
                                            <td>x</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">A donner <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>23</td>
                                            <td>cpp</td>
                                            <td>info</td>
                                            <td>x</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">A donner <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>23</td>
                                            <td>cpp</td>
                                            <td>info</td>
                                            <td>x</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">A donner <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>23</td>
                                            <td>cpp</td>
                                            <td>info</td>
                                            <td>x</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">A donner <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>23</td>
                                            <td>cpp</td>
                                            <td>info</td>
                                            <td>x</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">A donner <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                       
                    
                
                  
            </div> 
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
