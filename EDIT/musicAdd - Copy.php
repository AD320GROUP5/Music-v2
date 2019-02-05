
<body bgcolor=black>

		<div class="grid-container-top">
			 <div class="item2">
		<img src="concert.png" alt="concert">
			 </div>
		</div>

		<div class="grid-container">
			 <div class="item3">
				 <h1>MUSIC PLANET</h1>
				 <h4>a Group 5 Company</h4>
			 </div>
		</div>
		 
		
		</form>
	</body>
<?php


//echo '<br>' . '<br>' ;
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
//echo $Get_array;	


// echo <table bgcolor=black>
/*
echo		<div class="grid-container-top">
echo			 <div class="item2">
echo		<img src="concert.png" alt="concert">
echo			 </div>
echo		</div>

echo		<div class="grid-container">
echo			 <div class="item3">
*/
// echo				 <h1>MUSIC PLANET</h1>
/*
echo				 <h4>a Group 5 Company</h4>
echo			 </div>
echo		</div>

echo		</div>
echo		</form>

*/
// echo	</table>


echo "<div style ='background-color:black;font:22px/41px Arial,tahoma,sans-serif;color:darkkhaki;text-align:center'>";

//echo "<font size=\"22\" face='Arial' >";


echo "<table>";
//echo "<font size=\"16\" face='Arial' background-color='yellow'>";
//echo <bgcolor=black>

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

<div class="item4">
				<button class="button2" input type="submit">SUBMIT SONG</button>
				
			<!--	<button class ="button" type="button" id="jstrigger" onclick="javascript:addClick();">
				&nbsp; &nbsp; ADD A SONG &nbsp;  </button> -->
				
			</div>
			

<!--

<body bgcolor=black>

		<div class="grid-container-top">
			 <div class="item2">
		<img src="concert.png" alt="concert">
			 </div>
		</div>

		<div class="grid-container">
			 <div class="item3">
				 <h1>MUSIC PLANET</h1>
				 <h4>a Group 5 Company</h4>
			 </div>
		</div>
	-->	 
		<!-- TWO 
		<form action="musicAdd.php" method="get">    
		<div class="grid-container-two">

			<div class="item4">
				<button class="button2" input type="submit">SUBMIT SONG</button>
				
				<button class ="button" type="button" id="jstrigger" onclick="javascript:addClick();">
				&nbsp; &nbsp; ADD A SONG &nbsp;  </button>
				
			</div>

		</div>

		<!-- THREE
		<div class="grid-container-three">

			<div class="item8">
				NAME: <input type="text" name="name" pattern="[A-Za-z]{1,30}"  required placeholder="*Required"><br> 
		 
			</div>
			<div class="item9">
				ARTIST: <input type="text" name="artist" pattern="[A-Za-z]{1,30}"  required placeholder="*Required"><br> 
			</div>
			
		</div>

		<!-- FOUR 
		<div class="grid-container-four">

			<div class="item10">
				YEAR: <input type="text" name="year" value ""><br>
			</div>
			<div class="item11">
				COVER: <input type="text" name="cover" value""><br>
			</div>
		</div>
		</form>
	</body>

-->