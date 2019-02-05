<head>
    <script src="action.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>GROUP 5</title>
</head>
<body bgcolor=black>
<form action="/LINK/index.html" method="get">
		<div class="grid-container-top">
			 <div class="item2">
		<img src="concert.png" alt="concert">
			 </div>
		</div>

		<div class="grid-container">
			 <div class="item3">
				 <h1>MUSIC PLANET</h1>

			 </div>
		</div>
		<div class="grid-container-two">

			<div class="item4">
				<button class="button2" input type="submit">MAIN MENU</button>


			</div>

</div>


		</form>
	</body>
<?php


$data = array("", "", "", "");

$counter = 0;
$GET_array = $_GET;
$begin = "#";
	foreach($GET_array as $key=>$val){
		if($val !== ""){
//		echo $key . ': ' . $val . '<br>';
		$data[$counter] = $val;
		$counter = $counter + 1;
		}
$end = "*";
	}



echo "<div style ='background-color:black;font:34px/55px Arial,tahoma,sans-serif;color:darkkhaki;text-align:center'>";




echo "<table>";


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
    echo "                   New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "</table>";
echo "</font>";
echo "</div>";
$conn->close();

?>
