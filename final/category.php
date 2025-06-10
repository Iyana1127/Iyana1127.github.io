<html>
<body>

<?php

    $category = $_GET["type"];
	
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

	$sql = "SELECT * FROM `inventory` WHERE `category` LIKE '$category'";

	$result = $conn->query($sql);
	
	if($result ->num_rows > 0)
	{
			while($row = $result ->fetch_assoc())
			{
				echo "Make: ".$row["make"]."<br>";
				echo "Model: ".$row["model"]."<br>";
				echo "Price: ".$row["price"]."<br>";
				echo "<img src = " . $row["image"] ."><br>";
				
				echo "<hr>";
			}
			
	}
	$conn->close();
?>

	
	
	
</body>
</html>