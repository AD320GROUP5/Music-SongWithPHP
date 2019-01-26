<html>
<head>
	<script src="action.js"></script>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>GROUP 5</title>
</head>
<body bgcolor=white>
<?php require 'localData.php';?> 	
<!--<h1>Grid Layout</h1>-->
<!--
<p>This grid layout contains six columns and three rows:</p>
-->

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
   

     
<div class="grid-container-two">

    <div class="item4">
		<button class ="button" type="button" id="jstrigger" onclick="javascript:addClick();">&nbsp; &nbsp; ADD A SONG &nbsp;  </button>
	</div>
	
    <div class="item5">
		<button class ="button" type="button" id="jstrigger" onclick="javascript:deleteClick();">DELETE A SONG</button>
	</div>
	

</div>
<div class="grid-container-three">

    <div class="item6">
		<button class ="button" type="button" id="jstrigger" onclick="javascript:editClick();">MODIFY A SONG</button>
	</div>
	
    <div class="item7">
		<button class ="button" type="button" id="jstrigger" onclick="javascript:viewClick();">  &nbsp; &nbsp;     VIEW SONGS &nbsp;  </button>
	</div>
	
	
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "g5dbMusic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "SELECT title, artist FROM Songs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Song Title: " . $row["title"]. " - artist: " . $row["artist"]. "<br>";
    }
} else {
    echo "0 results";
}?>
</body>

</html>
