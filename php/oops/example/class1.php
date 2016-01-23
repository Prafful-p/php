<?php

    require ('interface1.php');

    class demo implements name{
        final public function show(){
            echo "hello";
        }
    }


    $obj=new demo();
    $obj->show();
