<?php
mb_language('ja');
mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>電卓</title>
</head>
<body>
<form action="" method="post">
    <h2 align="center">Please input calculation</h2>
    <p align="center">
        <input type="text" name="first" size="5">
        <select name="str" size="1">
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="×">×</option>
            <option value="÷">÷</option>
         <input type="text" name="second" size="5">
        <br>
        <input type="submit" value="計算"><input type="reset" value="リセット">
    </p>
</form>
<hr>
<p align="center">
<?php
if(!isset($_POST['first']) || !isset($_POST['second'])) {//check undifined
    echo "please input number";
}elseif(empty($_POST['str'])){
    echo "please select operator symbol";
}else{
    if(ctype_digit($_POST['first']) && ctype_digit($_POST['second'])) {
        $var1 = (int)$_POST['first'];
        $var2 = $_POST['str'];
        $var3 = (int)$_POST['second'];
        if ($var2 == '+') {
            $result = $var1 + $var3;
        } elseif ($var2 == '-') {
            $result = $var1 - $var3;
        } elseif ($var2 == '×') {
            $result = $var1 * $var3;
        } elseif ($var2 == '÷' && $var3 != 0) {
            $result = $var1 / $var3;
        }
        if ($var2 == '÷' && $var3 == 0) {
            echo "Can't devided by 0!!";
        } else {
            echo $var1 . $var2 . $var3 . "=" . $result;
        }
    }else{
        echo "You can input only number!!";
    }
}
?>
</p>
</body>
</html>
