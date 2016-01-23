<?php
   require_once("include/connection.php");
?>

<html>
    <head>
        <title>
            Calculator
        </title>
        <link href="data/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Basic Calculator</h1>
        <div  id="main">
            <form action="operation.php" method="post" >
                Enter first Number : <input type="text" name="variant" required="required" value="" >
                &nbsp;<br /><br/>
                Choose your option : <select name="opearator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="^">^</option>
                    <option value="%">%</option>
                    <option value="max">MAX</option>
                    <option value="min">MIN</option>
                    <option value="sin">SIN</option>
                    <option value="cos">COS</option>
                    <option value="tan">TAN</option>
                </select>&nbsp;<br/><br/>
                Enter second Number : <input required="required" type="text" name="variant1" value="">

                <br /><br/><br />
                <input type="submit" value="submit" id="data"><br /><br />
                <?php
                if(isset($_COOKIE['error'])){
                    echo $_COOKIE['error'];
                    setcookie("error",$error,time()-60*5);
                }
                ?>
            </form>

        </div>
        <div id="result">
            <p>Result here</p>

            <?php
                $query="SELECT * FROM operationb
                        ORDER BY id DESC ";
                $pop=mysql_query($query);

                while($result=mysql_fetch_array($pop))
                {
                    //check_repeat($result);
                    echo $result['var1'];
                    echo "  ";
                    echo $result["opr"];
                    echo "  ";
                    echo $result["var2"];
                    echo " = ";
                    echo $result["result"];
                    echo " <br/>";
                }
            ?>

            <form action="clear.php" method="post" class="clear">
                <input type="submit" value="clear" name="clear">
            </form>


        </div>
        <div id="footer">
            Copyright 2009, Ready Bytes Software Labs Pvt. Ltd.@RBSL
        </div>
    </body>
</html>
