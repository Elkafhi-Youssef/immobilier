<?php


    class Books extends Controller{


        public function __construct(){

        }
        //  function index call of all books
        public function index(){
            $this->loadView('books'.DS.'books_home',[]);

        }

        public function addbook(){
            $this->loadView('books'.DS.'books_addbook',[]);
        }

        // books to give
        public function toGive(){
            $data = [
                [
                    "id" => 1,
                    "title" => "Javascript algorithms",
                    "author" => "G.Hamza",
                    "orderedby"=> "elkafhi youssef",
                    "date" => "2011/04/25"
                ],
                [
                    "id" => 2,
                    "title" => "Cpp",
                    "author" => "G.Hamza",
                    "orderedby"=> "elkafhi youssef",
                    "date" => "2011/04/25"
                ],
                [
                    "id" => 3,
                    "title" => "PHP Ajax",
                    "author" => "G.Hamza",
                    "orderedby"=> "elkafhi youssef",
                    "date" => "2011/04/25"
                ]
            ];
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            http_response_code(200);
            echo json_encode($data);
            exit;
        }

    }