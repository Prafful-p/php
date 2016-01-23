<?php



    class addressResidence extends address {
       protected function _init(){
           $this->_setAddressTypeId(address::Address_Type_residence);
       }
    }
?>