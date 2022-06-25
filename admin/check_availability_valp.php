<?php 
session_start();
$aid=$_SESSION['id'];
require_once("includes/config.php");
if(!empty($_POST["roomno"])) 
{
$roomno=$_POST["roomno"];
$result ="SELECT count(*) FROM registration_valp WHERE roomno=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$roomno);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>$count. Estamos completos.</span>";
else
	echo "<span style='color:red'>Todos estan disponible</span>";
}
?>
