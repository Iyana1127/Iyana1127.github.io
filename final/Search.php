<html>
<head>
<link rel="stylesheet" href = "style.css">
<title> Search results for <?php echo isset($_GET['query']) ? $_GET['query'] : 'Unknown'; ?></title>
</head>
<body>
    <div class ="container">
        <h2 class = "title">Search results for <?php echo isset($_GET['query']) ? '"' . $_GET['query']. '"' : 'Unknown'; ?></h2>

<?php

    $searchTerm = isset($_GET['query']) ? $_GET['query'] : '';
	
	$servername = 'localhost';
	$DBusername = 'root';
	$DBpassword = '';
	$dbname = 'final';

	// Create connection
	$conn = new mysqli($servername, $DBusername, $DBpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM `inventory` WHERE `make` LIKE '$searchTerm%' OR 'model' LIKE '$searchTerm%'";

	$result = $conn->query($sql);
	
	if($result ->num_rows > 0)
	{
		    echo "<table>";
			echo "<tr><th>Make</th><th>Model</th><th>Price</th><th>Image</th></tr>";
			
			while($row = $result ->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" . $row["make"] . "</td>";
				echo "<td>" . $row["model"] . "</td>";
				echo "<td>" . $row["price"] . "</td>";
				echo "<td><img src ='" . $row["image"] ."' width = '100px'></td>";
				echo "</tr>";
			}
			
			echo "</table>";
	}else{
		echo "No results found.";
	}
	$conn->close();
?>
    </div>
</body>
</html>