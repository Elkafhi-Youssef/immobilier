<?php


    class Books extends Controller{


        public function __construct(){

        }
        //  function index call of all books
        public function index(){
            $this->loadView('books'.DS.'books_list',[]);

        }

        public function addbook(){
            $this->loadView('books'.DS.'books_addbook',[]);
        }

        /**
         * 
         * Get books based on a given filter  or all books if no filter specified
         *  
         * @param string $filterBy isbn|category|title|author
         * @param string $params filter value
         * 
         */

         public function getBooksList($filterBy = null,$params = []){
            // Load and instatiate the book model
            $this->setModelInstance('book');

            // Convert params to array
            if(!is_null($filterBy)){
                $params = explode('/',trim($params,'/'));
                $books = $this->modelInstance->filterBooks($filterBy,$params);
            }else {
                $books = $this->modelInstance->getBooks($filterBy,$params);
            }

            $this->jsonPrepare($books);
        }

        /**
         * 
         * Ordred books
         * 
         */
        public function toGive($filterBy = null,$data = []){
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
            $this->jsonPrepare($data);
        }

        /**
         * 
         * Books should be given back
         * 
         */
        public function toGiveBack($filterBy = null,$data = []){
            $data = [
                [
                    "id" => 1001,
                    "title" => "JavaScript alogorithems",
                    "user_id" => "152",
                    "user_name"=> "Elkafhi Youssef",
                    "termination_date" => "2011/04/25",
                    "left_time" => 12
                ],
                [
                    "id" => 93,
                    "title" => "PHP Ajax",
                    "user_id" => "1550",
                    "user_name"=> "Gassai Hamza",
                    "termination_date" => "2011/04/25",
                    "left_time" => 15
                ],
                [
                    "id" => 2005,
                    "title" => "Carbone 17",
                    "user_id" => "1521",
                    "user_name"=> "Beddiaf amal",
                    "termination_date" => "2011/04/25",
                    "left_time" => 20
                ]
            ];
            $this->jsonPrepare($data);
        }

        /**
         * 
         * Books should be given back and late
         * 
         */
        public function booksLate($filterBy = null,$data = []){
            $data = [
                [
                    "id" => 1001,
                    "title" => "JavaScript alogorithems",
                    "user_id" => "152",
                    "user_name"=> "Elkafhi Youssef",
                    "termination_date" => "2011/04/25",
                    "duration_late" => 12,
                    "user_email" => "user@gmail.com",
                    "user_phone" => "+212 686321458"
                ],
                [
                    "id" => 93,
                    "title" => "PHP Ajax",
                    "user_id" => "1550",
                    "user_name"=> "Gassai Hamza",
                    "termination_date" => "2011/04/25",
                    "duration_late" => 15,
                    "user_email" => "user@gmail.com",
                    "user_phone" => "+212 686321458"
                ],
                [
                    "id" => 2005,
                    "title" => "Carbone 17",
                    "user_id" => "1521",
                    "user_name"=> "Beddiaf amal",
                    "termination_date" => "2011/04/25",
                    "duration_late" => 20,
                    "user_email" => "user@gmail.com",
                    "user_phone" => "+212 686321458"
                ]
            ];
            $this->jsonPrepare($data);
        }

    }