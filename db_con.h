<?

$hostname="localhost";
$username="practice";
$dbname="test";
$tablename="hmg0228";

$conn=mysql_connect($hostname, $username) or die("Fail to connect DB... Plz contact Admin!");

mysql_select_db($dbname, $conn);

?>
