<?php
/*
 *
 * mysql database;  only one connection is allowed;
 *
 */
    class Database{
        public $_connection;
        /*
         * Store the single instances;
         */
        private static $_instance;



        public static function getInstance(){
            if(!self :: $_instance){
                self :: $_instance= new self();
            }
            return self :: $_instance;
        }


        public function __construct(){
            $this->_connection=new mysqli('localhost','root','prafful','oops');
            //connection error;

            if(mysqli_connect_error()){
                trigger_error("failed to connect MySql" . mysqli_connect_error(),E_USER_ERROR);
            }

        }

        /*
         * clone method to prevent duplication;
         */

        private function __clone(){}


        public function getConnection(){
            return $this->_connection;
        }
    }