<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:56
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ("mysql_connect.inc.php");
$id =$_POST['id'];
$pw =$_POST['pw'];

$sql="SELECT*FROM member_table where username='$id'";
$result =mysql_query($sql);
$row =@mysql_fetch_row($result);

if($id !=null && $pw !=null && $row[1]==$id && $row[2]==$pw){
    $_SESSION['10521026']=$id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1; url=member.php >';
}
else{
    echo'登入失敗';
    echo '<meta http-equiv=REFRESH CONTENT=1; url=index.php >';
}
?>