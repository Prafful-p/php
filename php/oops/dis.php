<?php

    include 'class.add.php';
    include 'class.database.php';
    include 'class.addressresidence.php';
    include 'class.addressBusiness.php';
    include "class.addressPark.php";





    echo '<h3>Instant AddressResidence</h3>';
    $Address_residence= new addressResidence();


    echo '<h3>Setting prperties</h3>';
    $Address_residence->street_address_1="12,ward no 15 new abadi ";
    $Address_residence->city_name="Mandalgarh";
    $Address_residence->subdivision_name="Bhilwara";
    $Address_residence->country="INDIA";
    $Address_residence->address_type_id=1;
    echo $Address_residence;
    echo '<tt><pre>' . var_export($Address_residence,TRUE) . '</pre></tt>';





    echo '<h3>Testing address __ construct with an array  </h3>';
    $Address_business= new addressBusiness(array(
        'street_address_1'=> " 123,rana nagar , pata chock,",
        'city_name' => "hiran mangri",
        'subdivision_name' => 'udaipur',
        'country'=> 'INDIA',
    ));
    echo $Address_business;
    echo '<tt><pre>' . var_export($Address_business,TRUE) . '</pre></tt>';





    echo '<h3>Testing address __ construct with an array  </h3>';
    $Address_park= new addressPark(array(
        'street_address_1'=> " 789,azad nagar , BhagatSingh chok,",
        'city_name' => "hiran mangri",
        'subdivision_name' => 'udaipur',
        'country' => 'BHARAT',
    ));
    echo $Address_park;
    echo '<tt><pre>' . var_export($Address_park,TRUE) . '</pre></tt>';



    echo '<h3>Load from Database</h3>';
    $address_db= address::shanu(1);
    echo '<tt><pre>' . var_export($address_db,TRUE) . '</pre></tt>';






    ?>

