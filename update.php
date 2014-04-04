<?php

$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'mas';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$user_name = $_GET['user_name'];
$user_address = $_GET['user_address'];
$user_frequency = $_GET['user_frequency'];
$user_distance = $_GET['user_distance'];

$sql = "UPDATE user ".
       "SET address = '$user_address', frequency = $user_frequency, distance = $user_distance ".
       "WHERE username = '$user_name'" ;

mysql_select_db('mas');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Success\n";
mysql_close($conn);

?>