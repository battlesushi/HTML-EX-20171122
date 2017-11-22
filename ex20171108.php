<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:04
 */
$m=$_POST['m'];
$n=$_POST['n'];
$rT=$_POST['rT'];
$gT=$_POST['gT'];
$bT=$_POST['bT'];
$rF=$_POST['rF'];
$gF=$_POST['gF'];
$bF=$_POST['bF'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>莊政宏教師檔案</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table{
            color: rgb(0, 0, 0);
            background-image: linear-gradient(rgba(<?php$rT?>, <?php$gT?>, <?php$bT?>, 0.5), rgba(<?php$rF?>, <?php$gF?>, <?php$bF?>, 0.8));
        }
    </style>
</head>
<body>
<table border="1" style="text-align: center">
<?php
    for($i=1;$i<=$m;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            echo "<td style='width: 30px'><span style='font-size: 2em'>".$i*$j."</span></td>";
        }
        echo "</tr>";
    }

?>
</table>
</body>
</html>
