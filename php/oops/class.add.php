<?php

    require_once('class.model.php');


    abstract class address implements sanu {


        const Address_Type_residence = 1;
        const Address_Type_business = 2;
        const Address_Type_park = 3;

        static public $valid_address_type = array(

            address :: Address_Type_residence => 'residence',
            address :: Address_Type_business => 'business',
            address :: Address_Type_park => 'park',
        );


        public $street_address_1;
        public $street_address_2;

        public $city_name;

        public $subdivision_name;

        public $_postal_code;

        public $country;

        protected $_address_id;


        protected $_address_type_id;


        protected $_time_created;


        protected $_time_updated;



        function __construct($data=array()){

            $this->_init();
            $this->_time_created=time();

            if(!is_array($data)){
                trigger_error("unable to constructa address with a : " . get_class($name));
            }

            if(count($data)>0){
                foreach( $data as $name=> $value){
                    if(in_array($name,array(
                        'time_created',
                        'time_updated'
                    ))){
                        $name = "_" . $name;
                    }
                    $this->$name = $value;
                }
            }
        }


        function __get($name){
            if(!$this->_postal_code){
                $this->_postal_code=$this->_postal_code_guess();
            }

            $protected_property_name = "_" . $name;
            if(property_exists($this,$protected_property_name)){
                return $this->$protected_property_name;
            }

            trigger_error("undefined variable via __get : ". $name);
            return NULL;

        }


        function __set($name,$value){
            if('address_type_id'==$name){
                $this->_setAddressTypeId($value);
                return;
            }

            if('postal_code'==$name){
                $this->$name=$value;
                return;
            }

            trigger_error('undefined variable or accesseble via __set : ' . $name);

        }



        function __toString(){
            return $this->output();
        }

        abstract protected function _init();

        protected function _postal_code_guess(){
            $db = Database::getInstance();
            $mysqli = $db->getConnection();

            $sql_query  = 'SELECT postal_code ';
            $sql_query .= 'FROM location ';

            $city_name = $mysqli->real_escape_string($this->city_name);
            $sql_query .= 'WHERE city_name = "' . $city_name . '" ';

            $subdivision_name = $mysqli->real_escape_string($this->subdivision_name);
            $sql_query .= 'AND subdivision_name = "' . $subdivision_name . '" ';

            $result = $mysqli->query($sql_query);

            if ($row = $result->fetch_assoc()) {
                return $row['postal_code'];
            }
        }




        function output(){
            $result="";
            $result .=$this->street_address_1;
            if($this->street_address_2)
                $result .= "<br/>" . $this->street_address_2;
            $result .="<br/>" . $this->city_name;
            $result .= " , " .$this->subdivision_name;
            $result .= " (" .$this->postal_code .") " ;
            $result .="<br/>" . $this->country;
            return $result;
        }

        static public function isValidAddressTypeTo($address_type_id){
            return array_key_exists($address_type_id,self::$valid_address_type);
        }

        protected function _setAddressTypeId($address_type_id){
            if(self :: isValidAddressTypeTo($address_type_id)){
                $this->_address_type_id=$address_type_id;
            }
        }
        final public static function shanu($address_id) {

            $db= Database::getInstance();
            $mysqli = $db->getConnection();

            $sql_query = "SELECT address.* ";
            $sql_query .="FROM address ";
            $sql_query .= 'WHERE address_id = "' . (int) $address_id .' "';

            $result = $mysqli->query($sql_query);
            if(!isset($result)){
                trigger_error("query error" . mysqli_connect_error());
            } else{
                if($raw = $result->fetch_array()){
                    var_dump($raw);
                }
            }

        }
        final public function save() {}
    }