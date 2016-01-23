<!DOCTYPE html>
<html>
<body>

    <?php $array1 = array(6,"har","sanu",array(1,3,5));?>
    <?php echo $array1[2];?>
    <?php $array1[2] = 10; ?>
    <?php echo $array1[2];?>
    <?php echo $array1[3][2];?>
    $x empty : <?php $x = 15; echo empty($x); ?>
</body>
</html>