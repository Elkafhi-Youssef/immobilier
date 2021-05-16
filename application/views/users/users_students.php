<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>




  <!-- Begin Page Content -->
  <div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-7">
                        <div class="row">
                            <div class="dropdown mr-1">
                                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    Etudiants<span>(GI)</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="<?= URLROOT.DS.'users'.DS.'getStudentByDiv' ?>">GI</a>
                                    <a class="dropdown-item" href="#">GIM</a>
                                    <a class="dropdown-item" href="#">TMQ</a>
                                </div>
                            </div>
                            <div class="col">
                                <a class="ml-md-4 btn btn-primary" href="students.html" role="button">Enseignants </a>
                            </div>
                            <div class="col">
                                <a class="ml-md-4 btn btn-primary" href="students.html" role="button">Vacataires</a>
                            </div>
                            <div class="col">
                                <a class="ml-md-4 btn btn-primary" href="students.html" role="button">Employers </a>
                            </div>
                        </div>
                        
                        
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
                   <div class="mx-auto border-primary mr-4" style="width: 15%;">
                        <h2 class="text-dark text-nowrap  h2 pl-4">Les Etudiants<span>(GI)</span></h2>
  
                   </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Non</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Img</th>
                                            
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>jilali</td>
                                            <td>karoe</td>
                                            <td>j@gmail.com</td>
                                            <td> <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png'?>"alt="" style="width: 40px;"></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>jilali</td>
                                            <td>karoe</td>
                                            <td>j@gmail.com</td>
                                            <td> <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png'?>" alt="" style="width: 40px;"></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>jilali</td>
                                            <td>karoe</td>
                                            <td>j@gmail.com</td>
                                            <td> <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png'?>" alt="" style="width: 40px;"></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>jilali</td>
                                            <td>karoe</td>
                                            <td>j@gmail.com</td>
                                            <td> <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png'?>" alt="" style="width: 40px;"></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>jilali</td>
                                            <td>karoe</td>
                                            <td>j@gmail.com</td>
                                            <td> <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'ests.png'?>"  alt="" style="width: 40px;"></td>
                                            
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                       
                    
                
                  
            </div> 
            <!-- End of Main Content -->












<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>