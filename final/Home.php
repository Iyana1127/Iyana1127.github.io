<html>
<header>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="content">
  <img src="carbanner.jpg" alt="banner" width="1100" height="400">
</div>
</header>

<body>

  <div class ="search-bar">
     <form action= "Search.php" method = "GET">
  <div class ="search-input">
     <button type="submit"> Search</button>
    <input type = "text" name = "query" placeholder = "Search by make or model">
  </div>
</form>
   </div>

 
<table>
<tr>
	<th class="img-cars"> <img src="carimg/Minivans.jpg" /> </th>
	<th class="img-cars"> <img src="carimg/Trucks.jpg" /> </th>
	<th class="img-cars"> <img src="carimg/Suvs.jpg" /> </th>
	<th class="img-cars"> <img src="carimg/Convertibles.jpg" /> </th>
	<th class="img-cars"> <img src="carimg/Sedans.jpg" /> </th>
	<th class="img-cars"> <img src="carimg/Hatchbacks.jpg" /> </th>
</tr>
<tr>
	<td><li> <a href ="category.php?type=1"> Minivans </a> </li> </td>
	<td><li> <a href ="category.php?type=2"> Trucks </a> </li>  </td>
	<td><li> <a href ="category.php?type=3"> Suvs </a> </li> </td>
	<td><li> <a href ="category.php?type=4"> Convertibles</a> </li> </td>
	<td><li> <a href ="category.php?type=5"> Sedans </a> </li> </td>
	<td><li> <a href ="category.php?type=6"> Hatchbacks </a> </li> </td>
</tr>
</table>
</ul>
</body>
</html>