<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "username");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_POST['fullname']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$key = mysqli_real_escape_string($link, $_POST['key']);
$password = mysqli_real_escape_string($link, $_POST['password']);
//$name = strtoupper($name);
$chk="SELECT * FROM `keys` WHERE adminkey='".$key."' ";
//if($key=="1234")
$rchk = mysqli_query($link, $chk);
if(mysqli_num_rows($rchk) > 0){ 
// attempt insert query execution
$row = mysqli_fetch_array($rchk);
if($row['acctype']!=0){

$sql = "INSERT INTO user (fullname, username, email, adminkey, passwordused, dateadded, acctype) VALUES ('$fullname', '$username', '$email', '$key', '$password', now(), '$row[acctype]')";

if(mysqli_query($link, $sql)){
	$res="1";
	$keysupdate="UPDATE `keys` SET acctype=0 WHERE adminkey='".$key."'";
	$keysupdateres=mysqli_query($link, $keysupdate);
    header('Location: sup.php?result='.$res.'&fullname='.$fullname);
} else{
	$res="ERROR: Could not able to execute". $sql." ".mysqli_error($link);
	header('Location: sup.php?result='.$res);
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
else{
	$res="4";
    header('Location: sup.php?result='.$res.'&key='.$key);
}}
else{
	$res="3";
    header('Location: sup.php?result='.$res.'&key='.$key);
}
 
// close connection
mysqli_close($link);
?>