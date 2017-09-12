<style>
    p{
        font-family: Ubuntu;
    }
</style>
<?php

define("DBADD","localhost");
define("USERNAME","root");
define("PASS","Mmfj1342");
define("DBNAME","mfp");
@mysql_connect(LOCALHOST,USERNAME,PASS) or die('Error');
@mysql_select_db(DBNAME);
mysql_query('set names utf8');
$usr = $_POST['UserNameIn'];
$pass = $_POST['PassWordIn'];
$conpass = $_POST['ConfPassWordIn'];
$email = $_POST['EmailIn'];
$info = $_POST['InfoIn'];
$acc = $_POST['Check'];

if($pass == $conpass and $acc == 'on')
{
    $res = mysql_query("INSERT INTO users VALUES (null,'$usr','$pass','$email','$info')");
    if($res)
    {
        echo "<script>alert('1');</script>";
        header("location:index.php");
    }
}
else{
    echo "<script>alert('پسور ها یکی نیستند یا تیک قوانین نخورده است.');</script>";
}

?>