<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
 <!-- Begin Page Content -->
 <div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="#" role="button">À donner <span class="badge badge-light badge-counter">11</span></a>
                        <a class="ml-md-4 btn btn-primary" href="#" role="button">Á rendre <span class="badge badge-light badge-counter">20</span></a>
                        <a class="ml-md-4 btn btn-primary" href="#" role="button">En retard <span class="badge badge-light badge-counter">2</span></a>
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">

                            <div class="dropdown mr-1">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="input-group  ">
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
                    <h2 class="text-dark h2 pl-4">A donner</h2>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Titre</th>
                                            <th>Authuer</th>
                                            <th>Commande par</th>
                                            <th>Date</th>
                                            <th  class="d-flex justify-content-center">Decesion</th>
                                        </tr>
                                    </thead>
                                    <!--tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot-->
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>JavaScript alogorithems</td>
                                            <td>G.Hamza</td>
                                            <td>Elkafhi Youssef</td>
                                            <td>2011/04/25</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#">Valider <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>93</td>
                                            <td>PHP Ajax</td>
                                            <td>G.Elkafhi</td>
                                            <td>Gassai Hamza</td>
                                            <td>2011/04/25</td>
                                            <td  class="d-flex justify-content-center"><a class="btn btn-success" href="#">Valider <i class="fa fa-arrow-alt-circle-right"></i> </a></td>
                                        </tr>
                                        <tr>
                                            <td>2005</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                            <td>Beddiaf amal</td>
                                            <td>2011/04/25</td>
                                            <td  class="d-flex justify-content-center"><a class="btn btn-success" href="#">Valider <i class="fa fa-arrow-alt-circle-right"></i> </a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                        <!-- table 2 -->
                        <h2 class="text-dark h2 pl-4">A rendre</h2>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Titre</th>
                                            <th>Id D'emprunteur</th>
                                            <th>Nom et prénom</th>
                                            <th>Date de reteur</th>
                                            <th>Duree</th>
                                            <th  class="d-flex justify-content-center">Decesion</th>
                                        </tr>
                                    </thead>
                                    <!--tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot-->
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>JavaScript alogorithems</td>
                                            <td>152</td>
                                            <td>Elkafhi Youssef</td>
                                            <td>2011/04/25</td>
                                            <td>12</td>
                                            <td class="d-flex justify-content-center"><a class="btn btn-success" href="#"><i class="fa fa-arrow-circle-left"></i> Valider</a></td>
                                        </tr>
                                        <tr>
                                            <td>93</td>
                                            <td>PHP Ajax</td>
                                            <td>1550</td>
                                            <td>Gassai Hamza</td>
                                            <td>2011/04/25</td>
                                            <td>15</td>
                                            <td  class="d-flex justify-content-center"><a class="btn btn-success" href="#"><i class="fa fa-arrow-circle-left"></i> Valider</a></td>
                                        </tr>
                                        <tr>
                                            <td>2005</td>
                                            <td>Carbone 17</td>
                                            <td>1256</td>
                                            <td>Beddiaf amal</td>
                                            <td>2011/04/25</td>
                                            <td>14</td>
                                            <td  class="d-flex justify-content-center"><a class="btn btn-success" href="#"><i class="fa fa-arrow-circle-left"></i> Valider</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                    </div>
                    <!-- end table 2-->
                    <!-- table 3-->
                    <h2 class="text-dark h2 pl-4">En retard</h2>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Titre</th>
                                            <th>Id D'emprunteur</th>
                                            <th>Nom et prénom</th>
                                            <th>Date de reteur</th>
                                            <th>Duree</th>
                                            <th  class="d-flex justify-content-center">Decesion</th>
                                        </tr>
                                    </thead>
                                    <!--tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot-->
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>JavaScript alogorithems</td>
                                            <td>152</td>
                                            <td>Elkafhi Youssef</td>
                                            <td>2011/04/25</td>
                                            <td>12</td>
                                            <td class="d-flex justify-content-center"><a class="btn" href="#"><i class="fa fa-envelope mx-2"></i></a>  <a href="#" class="btn"> <i class="fa fa-phone-alt mx-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>93</td>
                                            <td>PHP Ajax</td>
                                            <td>1550</td>
                                            <td>Gassai Hamza</td>
                                            <td>2011/04/25</td>
                                            <td>15</td>
                                            <td  class="d-flex justify-content-center"><a class="btn" href="#"><i class="fa fa-envelope mx-2"></i></a>  <a href="#" class="btn"> <i class="fa fa-phone-alt mx-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2005</td>
                                            <td>Carbone 17</td>
                                            <td>1256</td>
                                            <td>Beddiaf amal</td>
                                            <td>2011/04/25</td>
                                            <td>14</td>
                                            <td  class="d-flex justify-content-center"><a class="btn" href="#"><i class="fa fa-envelope mx-2"></i></a>  <a href="#" class="btn"> <i class="fa fa-phone-alt mx-2"></i></a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                    </div>
                </div>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'footer.php';?>
