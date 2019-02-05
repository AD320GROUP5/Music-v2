
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
</div>
<?php

echo "<div style ='background-color:black;font:34px/55px Arial,tahoma,sans-serif;color:darkkhaki;text-align:left'>";
echo "<table>";
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

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ARTIST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAR" . "<br>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["Name"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["Artist"].
        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
        $row["Year"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "</table>";
echo "</font>";
?>
