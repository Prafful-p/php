<?php



class addressBusiness extends address{
    /**
     * Initialization.
     */
    protected function _init()
    {
        $this->_setAddressTypeId(address::Address_Type_business);
    }
}
?>