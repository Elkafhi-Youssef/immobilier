<?php


class Immobiliers extends Controller
{


    public function __construct()
    {
        // Load and instatiate the book model
        $this->setModelInstance('Immobilier');
    }
    //  function index call of all books
    public function index()
    {
        $this->loadView('admin' . DS . 'immobilier' . DS . 'immobiliers', []);
    }


    // get info immobiler exactly
    public function showimmobilier($id)
    {
        $data = $this->modelInstance->getImmobilier($id);


        if ($data) {

            $this->loadView('users' . DS . 'showimmo', $data);
            // $this->loadView('test', $data);
        }
    }



    //get all immobilier

    public function getAllImmob()
    {
        $data = $this->modelInstance->getImmobiliers();


        if ($data) {

            $this->loadView('users' . DS . 'home_user', $data);
        }
    }


    // get all immobliers fr admin
    public function getAllImmobilier()
    {
        $data = $this->modelInstance->getImmobiliers();
        if ($data) {

            // $this->loadView('users'.DS.'home_user', $data);
            $this->jsonPrepare($data);
        }
    }
    // function insert immobilier

    public function addImmobilier()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'type_immobilier' => $_POST['type_immobilier'],
                'type_operation' => $_POST['type_operation'],
                'adresse' => $_POST['adresse'],
                'descreption' => $_POST['descreption'],
                'adresse' => $_POST['adresse'],
                'surface' => $_POST['surface'],
                'prix' => $_POST['prix']

            ];
            // images

            // Looping all files
            $countfiles = count($_FILES['file']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $filename[] = $_FILES['file']['name'][$i];
            }
            print_r($filename);
            $images = implode(" ", $filename);

            // Upload file
            for ($i = 0; $i < $countfiles; $i++) {

                move_uploaded_file($_FILES['file']['tmp_name'][$i], ROOT . DS . 'public/upload/' . $filename[$i]);
            }
            // $query="insert into test (car_name,images) values('$name',' $images')";
            //$fire=mysqli_query($con,$query);
            // images

            echo  $_POST['type_immobilier'] . $_POST['type_operation'] . $_POST['adresse'] . $_POST['descreption'] . $_POST['adresse'], $_POST['surface'] . $_POST['prix'];
            if (1 == 1) {
                $dt = $this->modelInstance->addImmobilier('immobilier', ['type_immobilier', 'type_operation', 'adresse', 'description', 'surface', 'prix', 'img'], [
                    $data['type_immobilier'], $data['type_operation'], $data['adresse'], $data['descreption'], $data['surface'],
                    $data['prix'], $images
                ]);
                if ($dt) {
                    
                    $this->redirect(URLROOT . '/Immobiliers');
                } else {
                    die("something went wrong!!");
                }
            } else {
                //user register faild
                $this->loadView('admin' . DS . 'immobilier' . DS . 'addimmobilier', []);
            }
        } else {

            $data = [
                'type_immobilier' => '',
                'type_operation' => '',
                'adresse' => '',
                'descreption' => '',
                'adresse' => '',
                'surface' => '',
                'prix' => ''
            ];

            //load the register
            $this->loadView('admin' . DS . 'immobilier' . DS . 'addimmobilier', $data);
        }
    }




    // function for edite immobilier by id

    public function editImmobilier($id =null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'type_immobilier' => $_POST['type_immobilier'],
                'type_operation' => $_POST['type_operation'],
                'adresse' => $_POST['adresse'],
                'descreption' => $_POST['descreption'],
                'adresse' => $_POST['adresse'],
                'surface' => $_POST['surface'],
                'prix' => $_POST['prix'], 
                'id'    =>$_POST['id']
            ];
            // images
            // Looping all files
            $countfiles = count($_FILES['file']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $filename[] = $_FILES['file']['name'][$i];
            }
            $images = implode(" ", $filename);
            // Upload file
            for ($i = 0; $i < $countfiles; $i++) {
                move_uploaded_file($_FILES['file']['tmp_name'][$i], ROOT . DS . 'public/upload/' . $filename[$i]);
            }
            // $query="insert into test (car_name,images) values('$name',' $images')";
            //$fire=mysqli_query($con,$query);
            // images
            if (1 == 1) {
                $dt = $this->modelInstance->editimmobilier($data['descreption'] ,$data['adresse'],$data['type_immobilier'],$data['type_operation'],$data['prix'],$data['surface'],$images,$data['id']);
                if ($dt) {
                    $_SESSION['status']= 'immobilier bien modifier';
                    $this->redirect(URLROOT . '/Immobiliers');
                } else {
                    $_SESSION['status']= 'immobilier n a pas modifier';
                    $this->redirect(URLROOT . '/Immobiliers');
                }
            } else {
                //user register faild
                $this->loadView('admin' . DS . 'immobilier' . DS . 'editeimmobilier', []);
            }
        } else {
            // get info for immobilier by id
            $obj =$this->modelInstance->getImmobilier($id);
            $data = [
                'type_immobilier' => $obj['type_immobilier'] ,
                'type_operation' => $obj['type_operation'],
                'adresse' =>  $obj['adresse'],
                'descreption' =>  $obj['description'],
                'adresse' =>  $obj['adresse'],
                'surface' =>  $obj['surface'],
                'prix' =>  $obj['prix'],
                'img'=> $obj['img'],
                'id_immobilier'=> $obj['id_immobilier']
            ];
            //load the register
            $this->loadView('admin' . DS . 'immobilier' . DS . 'editeimmobilier', $data);
        }
    }
    // function delete Immobilier by id
    public function delete($id)
    {
        $this->modelInstance->deleteimmobilier($id);
        $this->loadView('admin' . DS . 'immobilier' . DS . 'immobiliers', []);
    }
}
