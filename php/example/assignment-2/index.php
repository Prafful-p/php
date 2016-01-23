
<html>
<?php
/*
 * Registration page
 */
require_once('include/database.php');
?>
    <head>
        <title>
            Registration form
        </title>
        <link href="data/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="data/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    </head>
    <body class="bod">
        <div class="header">
            <h1>Student Registration Form</h1>
        </div>
        <div class="row">

            <div class="col-md-6" id="main">
                <form action="action.php" method="post" enctype="multipart/form-data">
                    First Name : <input type="text" placeholder="First Name" name="firstname" required="required">&nbsp;
                    <input name="lastname" placeholder="Last Name" type="text"></br></br>
                    Fathers Name : <input type="text" placeholder="Fathers Name" name="fathername" required="required"></br></br>
                    DoB : <input type="date" name="dob" required="required"></br></br>
                    <select name="sex">
                        <option placeholder="Sex"></option>
                        <option name="male">Male</option>
                        <option name="female">Female</option>
                        <option name="other">other</option>
                    </select></br></br>
                    Contact No. <input type="text" name="contact" placeholder="+91-0000000000" required="required"></br></br>
                    Email Id : <input type="email" name="email" placeholder="@mail.com"></br></br>
                    Secondary : <input type="text" name="secondary" placeholder="00.00%" required="required"></br></br>
                    Sr.Sevondary : <input type="text" name="senior" placeholder="00.00%"></br></br>
                    <input type="file" name="img" required="required"></br></br></br></br>
                    <input type="submit" name="submit" placeholder="submit">
                </form>
                <?php

                if(isset($_COOKIE['error'])){
                    echo $_COOKIE['error'];
                    setcookie("error",'',time()-99999);
                }
                ?>
            </div>

        </div>
        <div class="footer">

        </div>
    </body>
</html>