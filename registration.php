<?php
 


$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$conn = mysqli_connect('localhost','root','','registration_details');

$uname = $_GET['uname'];
$pass = $_GET['pass'];

$sql = "SELECT * FROM user_details WHERE username = '$uname'";

$result = mysqli_query($conn, $sql);

$num=mysqli_num_rows($result);
//$conn = mysqli_connect('localhost','root','','login_details');
if ($num==1) {
    echo '<h1>User Already Exists!</h1>';
}

else {
    $reg="insert into user_details(username,password) values('$uname','$pass')";
    mysqli_query($conn,$reg);
	echo '<h1>Registration Successful.</h1>';
}

?>
