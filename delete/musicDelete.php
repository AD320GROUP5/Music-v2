<?php
echo '<br>' . '<br>' ;
$data = array("", "", "", "");
echo "<font size=\"12\" face='Arial'>";
echo "<table>";
$counter = 0;
$GET_array = $_GET;
$begin = "#";
	foreach($GET_array as $key=>$val){
		if($val !== ""){
		echo $key . ': ' . $val . '<br>';
		$data[$counter] = $val;
		$counter = $counter + 1;
		}
$end = "*";
	}
echo $Get_array;
echo "</table>";
echo "</font>";
$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "mpdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$temp = $cars[0];

$sql = "DELETE FROM songs WHERE Name='$data[0]'";
//$sql = "DELETE FROM songs WHERE Name=";
if ($conn->query($sql) === TRUE) {
    echo "A record was deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
