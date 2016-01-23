<?php
include_once('controller.php');

class display{

            function list_name($data){

                $output = "<ul>";
                foreach($data as $key => $d){

                    $output .= "<li class=\"text-center\" style='list-style: none;font-size:19px'>".
                        "<a href='controller.php?id=" .urlencode($d['id'])."'> => ".$d['firstname']." " . $d['lastname']."</a>
</li>";
                }
                $output .= "</ul>";
                return $output;
        }

        function view_student($result){
            $output = "<ul>";
            foreach($result as $key => $d) {

                $output .= "<li class=\"text-center\" style='list-style: none;font-size:19px'>" .
                    "<p> Name : " . $d['firstname'] . " " . $d['lastname'] . "</p>" .
                    "<p> Father : " . $d['fathername'] . "</p>" .
                    "<p> DoB :" . $d['dob'] . "</p>" .
                    "<p> sex :" . $d['sex'] . "</p>" .
                    "<p> contact : " . $d['contact'] . "</p>" .
                    "<p> email : " . $d['email'] . "</p>" .
                    "<h4> -:Graduation Details:-</h4>" .
                    "<p> 10<sup>th</sup> : " . $d['secondary'] . "</p>" .
                    "<p> 12<sup>th</sup> : " . $d['senior'] . "</p>"
                ?>
                <img id="img" src="<?php echo "uploads/" . $d['img']; ?>">
                </li><?php
            }

            $output .= "</ul>";
            return $output;
        }
        function form(){
            include_once('form.php');
        }
    }

        ?>

