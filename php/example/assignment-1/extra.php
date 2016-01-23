<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/1/16
 * Time: 10:50 AM
 */
/*$query="SELECT * FROM operationb";
        $result = mysql_query($query);
        if ($var1 == $result['var1'] && $var2 == $result['var2'] && $operant == $result['opr']){
                $prev_pos=$result['pos'];
                $query="UPDATE SET pos=pos-1
                            WHERE pos>$pre_pos";
                mysql_query($query);
                $query="UPDATE SET pos=1+{ SELECT pos FROM operationb
                                            WHERE pos=max(pos)}
                                   WHERE pos=$prev_pos      ";
                mysql_query($query);
            } else  {

            */