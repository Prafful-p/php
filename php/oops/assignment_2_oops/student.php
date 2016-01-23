<?php

    /*
     * required files
     */
    require_once('include/database.php');

/**
 * Student class to interfare between controller and database
 * User: nl
 * Date: 15/1/16
 * Time: 10:39 AM
 */



    class student
    {
        /*
         * get list data from database and
         * return to controller
         */
        public function getListData()
        {
            $sql_query  = 'SELECT id,firstname,lastname ';
            $sql_query .= 'FROM registration ';

            $db = new Database();
            $mysqli=$db->list_query($sql_query);
            if(!isset($mysqli)){
                trigger_error("something goes wrong to fatch data frome database.php". mysqli_connect_error(),E_USER_ERROR);
            }
            return $mysqli;
        }
        /*
         * get view data from database and
         * return to controller
         */
        public function getviewData($id){

            $sql_query = "SELECT * ";
            $sql_query .= "FROM registration ";
            $sql_query .= "WHERE id = '{$id}' ";
            $db= new Database();
            $result = $db->view_query($sql_query);
            return $result;
        }

        /*
         * validate the insert data which
         * is get from controller
         * and give data to database
         */
        public function Insertion($valuePost){
            echo "hello";

            if(!preg_match("/^[0-9]*$/",$valuePost['contact']) ){
                $error = "contact format is wrong";
            }elseif (!preg_match("/^[0-9.]*$/",$valuePost['secondary']) ) {
                $error = "Percentage format is wrong";

            }elseif(!preg_match("/^[0-9.]*$/",$valuePost['senior'])){
                $error = "Percentage format is wrong";
            }
            elseif($valuePost['fn'] != "jpg" && $valuePost['fn'] != "png" && $valuePost['fn'] != "jpeg"
                && $valuePost['fn'] != "gif" )
            {
                if(move_uploaded_file($_FILES['img']['tmp_name'],$valuePost['target']))
                {

                }else{
                    $error=  "Sorry Try Again";
                }
            }else{
                echo "SIZE | TYPE MISTMATCH :( Try Again";
            }


            if(isset($error)){
                return $error;
            }else{
                $firstname = $valuePost['firstname'];
                $lastname = $valuePost['lastname'];
                $fathername= $valuePost['fathername'];
                $dob = $valuePost['dob'];
                $sex = $valuePost['sex'];
                $contact = $valuePost['contact'];
                $email = $valuePost['email'];
                $secondary = $valuePost['secondary'];
                $senior = $valuePost['senior'];
                $fn=$valuePost['fn'];
                $sql="INSERT INTO registration (firstname,lastname,fathername,dob,sex,contact,email,secondary,senior,img)
                VALUES ('$firstname','$lastname','$fathername','$dob','$sex','$contact','$email','$secondary','$senior','$fn')";
                $db=new Database();
                $db->insert($sql);

            }
        }
    }



?>