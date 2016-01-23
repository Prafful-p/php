<?php

    /*
     * //vlidation page
     */

    require_once('include/database.php');


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fathername= $_POST['fathername'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $secondary = $_POST['secondary'];
    $senior = $_POST['senior'];


/*
 * image validation
 */



    if(isset($_POST['submit']))
    {
        if(!is_dir("uploads/"))
        {
            mkdir("uploads/");
        }
        $dir = "uploads/";
        $target = $dir.basename($_FILES['img']['name']);
        $fn = $_FILES['img']['name'];
        if($fn != "jpg" && $fn != "png" && $fn != "jpeg"
            && $fn != "gif" )
        {
            if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
            {
                
            }else{
                $error=  "Sorry Try Again";
            }
        }else{
            echo "SIZE | TYPE MISTMATCH :( Try Again";
        }
    }

    /*
     * dob validation
     */




/*
 * percentage validation
 */


    /*
     * Number Validation
     */
    if(!preg_match("/^[0-9]*$/",$contact) ){
        $error = "contact format is wrong";
    }


    /*
     * percentage validation
     */
    elseif (!preg_match("/^[0-9. ]*$/",$secondary) && !preg_match("/^[0-9. ]*$/",$senior)) {
            $error = "Percentage format is wrong";
        }
    else{

        /*
         * Insertion of data
         */

        $sql="INSERT INTO registration (firstname,lastname,fathername,dob,sex,contact,email,secondary,senior,img)
                VALUES ('$firstname','$lastname','$fathername','$dob','$sex','$contact','$email','$secondary','$senior','$fn')";
        mysql_query($sql);

       }

    /*
     * check for error
     * and select page
         */
    if(isset($error)){
        setcookie("error",$error,time()+60*1);
        header("location: index.php");
    }else{
        header("location: list.php");
    }


?>
