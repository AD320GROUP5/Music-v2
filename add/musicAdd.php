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


$sql = "INSERT INTO songs (Name, Artist, Year, Cover)
VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






/*

$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "mpdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// sql to create table
$sql = "CREATE TABLE Songs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
artist VARCHAR(30) NOT NULL,
year VARCHAR(30) NOT NULL,
cover VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

*/


/*

$servername = "localhost:3307";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE mpdb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

*/


/*

$servername = "localhost:3307";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

   $sql = "INSERT INTO Songs (Name, Artist, Year, Cover)
 VALUES ('Beatles', 'PennyLane', '1967', 'Walking')";

echo 'aaaa';
*/

/*

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost:3307');
  DEFINE('DB_DATABASE', 'musicplanet');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  echo 'Connected successfully.';
  
   $sql = "INSERT INTO Songs (Name, Artist, Year, Cover)
 VALUES ('Beatles', 'PennyLane', '1967', 'Walking')";


  $mysqli->close();

*/
/*

$dbhost='localhost:3307';
$dbuser ='root';
$dbpassword ='root';
$dbdatabase= 'musicplanet';



 $conn = mysqli_connect($dbhost, 'root', 'root');

 $sql = "INSERT INTO Songs (Name, Artist, Year, Cover)
 VALUES ('Beatles', 'PennyLane', '1967', 'Walking')";

echo 'done!!!';
/*


// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
	
}
else{

// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info;

)




/*

echo 'aaaa';

        $dbhost = 'localhost:3307';
echo 'bbbb';

        $conn = mysqli_connect($dbhost, 'root', 'root');
echo 'cccc';

       // if ($conn) {
$sql = "CREATE DATABASE musicplanet";

          //  die('Could not connect: ' . mysqli_error());
echo 'eeee';

      //  }
echo 'ffff';

        else {
echo 'hhhh';
		}/*
            echo "connected";
echo 'iiii';

        }
echo 'jjjj';
*/
?>