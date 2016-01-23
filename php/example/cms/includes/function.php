<?php
    function confirm($result_set)
    {
        if (!$result_set) {
            die("query error" . mysql_error());
        }
    }
    function get_all_subj(){
        global $connection;
        $query=" SELECT *
                              FROM subjects
                              ORDER BY position ASC ";
        $subjects_set= mysql_query($query , $connection);
        confirm($subjects_set);
        return $subjects_set;
    }
    function get_all_pages($subject_id){
        global $connection;
        $query="  SELECT *
        FROM pages
        WHERE subject_id={$subject_id}
        ORDER BY position ASC ";
        $page_set = mysql_query($query , $connection);
        confirm($page_set);
        return $page_set;
    }
    function get_all_subject_by_id($subject_id){
        global $connection;
        $query = "SELECT * ";
        $query .= "FROM subjects ";
        $query .= "WHERE id = " . $subject_id . " ";
        $query .= "LIMIT 1 ";
        $set_result= mysql_query($query,$connection);
        confirm($set_result);
        $subject = mysql_query($set_result);
        if(isset($subject)){
            return $subject;
        } else {
            return NULL;
        }
    }
?>