<?php
    $sid=$_GET['id'];
    require_once('include/database.php');
?>
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
            <h1>Students Information</h1>
            <a href="index.php"><img src="data/register-now-button.png" height="70px" width="150px"> </a>
        </div>
        <div class="row">
            <div class class="col-md-6" id="main">
                <?php
                    $sql="SELECT *
                            FROM registration
                            WHERE id=$sid";
                    $res=mysql_query($sql);
                    if(!isset($res)){
                        $error="query failure" ;
                        echo $error;
                    } else {
                        $result = mysql_fetch_array($res);
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Applicant Data</h4>
                                <table id="tab">
                                    <tr>
                                        <td>Name </td>
                                        <td id="bor">
                                            <?php
                                                echo $result['firstname'];
                                                echo "  ";
                                                echo $result["lastname"];
                                                echo "<br/>  ";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fathers Name </td>
                                        <td id="bor">

                                            <?php
                                            echo $result["fathername"];
                                            echo " <br/>";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>Date of Birth </td>
                                        <td id="bor">
                                            <?php
                                                echo $result["dob"];
                                                echo " <br/>";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sex</td>
                                            <td id="bor">
                                                <?php
                                                echo $result['sex'];
                                                echo "<br />  ";
                                                ?>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>Contact </td>
                                        <td id="bor">
                                            <?php
                                            echo $result["contact"];
                                            echo "<br/>  ";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email </td>
                                        <td id="bor">
                                            <?php
                                            echo $result["email"];
                                            echo " <br/>";
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                                    <h4>Graduation Details</h4>
                                <table id="tab">
                                    <tr>
                                        <td id="th">10<sup>th</sup></td>
                                        <td id="bor">
                                            <?php
                                            echo $result["secondary"] . "%";
                                            echo " <br/>";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="th">12<sup>th</sup> </td>
                                        <td id="bor">
                                            <?php
                                            echo $result["senior"] . "%";
                                            echo " <br/>";
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6" id="img">
                                <img style="height:150px;width:150px;border-bottom-left-radius:100px;
                                border-bottom-left-radius:100px;border-top-left-radius:100px;border-bottom-right-radius:100px;
                                border-top-right-radius:100px;float:right;margin-right:50" src="<?php echo "uploads/" . $result['img']; ?>"></style></img>

                            </div>
                        </div>

                    <?php
                    }

                ?>
                <a href="list.php"><img src="data/back20button.png" height="100px" width="100px"></a>

            </div>
        </div>
    </body>
</html>