<?php
    require_once("includes/connection.php");
    require_once("includes/function.php");

    if(isset($_GET['subj'])){
        $s_subj=$_GET['subj'];
        $s_page="";
    } elseif(isset($_GET['page'])){
        $s_subj="";
        $s_page=$_GET['page'];
    } else {
        $s_subj="";
        $s_page="";
    }
    $set_subject = get_all_subject_by_id("$s_subj");

    include("includes/header.php");
?>
    <table id="structure">
        <tr>
            <td id="navigation">
                <ul class="subjects">
                &nbsp;
                <br />
                <?php

                    $subjects_set=get_all_subj();

                    while($subject = mysql_fetch_array($subjects_set))
                    {
                        echo "<li";
                        if($subject["id"]== $s_subj){
                        echo "class=\"selected\"";
                        }
                        echo "><a href=\"content.php?subj=" . urldecode($subject["id"]) .
                            "\"> {$subject["name"]}</a></li>";
                        echo "<ul class=\"pages\">";

                        $page_set=get_all_pages($subject["id"]);

                        while($page = mysql_fetch_array($page_set))
                        {
                            echo "<li><a href=\"content.php?page=" . urldecode($page["id"]) .
                                "\"> {$page["menu_name"]}</a></li>";
                        }
                        echo "</ul>";
                    }
                ?>
                </ul>
            </td>
            <td id="pages">
                <h2> <?php                        echo $set_subject['name'];                    ?>
                </h2>

                <?php echo $s_page; ?>
                <br />
            </td>
        </tr>
    </table>
<?php     require("includes/footer.php");?>
