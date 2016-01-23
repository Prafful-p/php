
<?php
    include('html/header.html');
    include_once('controller.php');
    $objl= new controller();
    $objl->dataList();
    include('html/footer.html');
?>


