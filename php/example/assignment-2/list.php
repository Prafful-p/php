<html>
    <head>
        <title>
            List of Students
        </title>
        <link href="data/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="data/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    </head>
    <body class="bod">
        <div class="header">
            <h1>List Of Students</h1>
            <a href="index.php"><img src="data/register-now-button.png" height="70px" width="150px"> </a>        </div>
        <div class="row">
            <div class class="col-md-6" id="main">
                <?php
                        /*
                         * //to displaying list of registration data
                         */

                        require_once('include/database.php');
                        $var1= 0;
                        $sql="SELECT *
                                FROM registration";
                        $array=mysql_query($sql);
                        if(!isset($array)){
                            trigger_error("query failer" . mysql_error());
                        }else{
                            while($result=mysql_fetch_array($array)){
                                echo ++$var1;
                                echo " ";
                                echo $result['firstname'];
                                echo " ";
                                echo $result['lastname'];
                                echo " ";
                                echo $result['fathername'];
                                echo " ";
                                echo $result['dob'];
                                echo " ";
                                echo $result['contact'];

                ?>
                                <a href="view.php?id=<?php echo $result['id']; ?>">View Details</a>
                <?php
                                echo "<br/> ";
                            }
                        }
                ?>
            </div>
        </div>
    </body>
</html>