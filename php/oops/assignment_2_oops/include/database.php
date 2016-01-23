<html>
    <body>
        <?php
        /*
         *
         * mysql database;  only one connection is allowed;
         *
         */
        class Database
        {
            public $connnection;
            private $data = array();

            /*
             * connection to database
             */

            public function __construct(){
                $this->connnection = mysqli_connect('localhost','root','prafful','assignment2');

                if(mysqli_connect_error()){
                    trigger_error("database connection failed" .  mysqli_connect_error(),E_USER_ERROR);
                }
            }
           /*
            * query for list data
            */
            public function list_query($sql_query){

                $res= $this->connnection->query($sql_query);
                while($result = $res->fetch_assoc()){
                    $this->data[]= $result;
                } return $this->data;
            }
            /*
             * query for details of student
             */
            public function view_query($sql_query){


                $res = $this->connnection->query($sql_query);
                while($result = $res->fetch_assoc()){
                    $this->data[]= $result;

                } return $this->data;
            }

            /*
             * query for insertion
             */
            public function insert($sql){

                $this->connnection->query($sql);
                header("location: index.php");
            }
        }



        ?>
    </body>
</html>