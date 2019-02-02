<?php


$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "mpdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Name, Artist, Year FROM Songs";
$result = $conn->query($sql);
echo "<font size=\"12\" face='Arial'>";
echo "<table>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ARTIST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAR" . "<br>";

if ($result->num_rows > 0) {
    // output data of each row
	//echo $data1 . '\t' . $data2 . '\t' . $data3 . '\n';
    while($row = $result->fetch_assoc()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $row["Name"].
		"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["Artist"].
		"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
		$row["Year"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo "</table>";
echo "</font>"; 

?>