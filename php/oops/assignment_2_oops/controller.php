<?php
/*
         * get data from form
         * collect them in array
         * and transfer it to controoler class function
         * and get back error
         */

    require_once('student.php');
    require_once('display.php');




    class controller{

        /*
         * get data from student give it to diplay for displaying it
         */

        public function dataList()
        {
            $student = new student();
            $data = $student->getListData();

            $list_form= new display();
            $view=$list_form->list_name($data);
            echo $view;
        }

        /*
         * call student class give it id of student
         * which data is required
         * and return it to calling class of this function
         */

        public function dataView($id){
            $student=new student();
            $result = $student->getviewData($id);

            $view_form= new display();
            $view=$view_form->view_student($result);
            return $view;
            }

        /*
         * get data and give it to student
         * for validate
         * and return error
         */

        public function insertion(){
            echo "hello";

            if(!is_dir("uploads/"))
            {
                mkdir("uploads/");
            }
            $dir = "uploads/";

                $valuePost= array(
                "firstname" => $_POST['firstname'],
                "lastname" => $_POST['lastname'],
                "fathername"=> $_POST['fathername'],
                "dob" => $_POST['dob'],
                "sex" => $_POST['sex'],
                "contact" => $_POST['contact'],
                "email" => $_POST['email'],
                "secondary" => $_POST['secondary'],
                "senior" => $_POST['senior'],
                "fn" => $_FILES['img']['name'],
                "target" => $dir.basename($_FILES['img']['name']),
            );

            $student=new student();
            $error=$student->Insertion($valuePost);
            return $error;


        }



    }
$id=$_GET['id'];
if(isset($id)){
    include_once('html/header.html');
    $controller=new controller();
    $detail=$controller->dataView($id);
    echo $detail;
    include_once('html/footer.html');
}
if(isset($_POST['submit'])){
    $controller=new controller();
    $error=$controller->insertion();
    if(isset($error)) {
        setcookie("error", $error, time() + 60 * 1);
        header("location: form.php");
    }

}



?>




