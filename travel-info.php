<?php

include('lib/config.php');
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="stylesheet" href="animate.css" type="text/css">
        <link rel="stylesheet" href="css/snow.css" type="text/css" media="screen" charset="utf-8">
<!-- The snow.css file creates the snow -->
<script src="scripts/snow.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="engine1/style.css"/>
<script type="text/javascript" src="engine1/jquery.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

</head>
<body>
<div id="logo">
				<a href="index.html"><img src="images/logo2.gif" alt="LOGO" height="112" width="118"></a>
	
                    <div id="navigation">
            <ul class="animated lightSpeedIn">
            <li class="selected">
                <a href="index.html">HOME</a>
            </li>
            <li>
                <a href="index.php">BOOKING</a>
            </li>
           <li>
                <a href="about.html">ABOUT</a>
            </li>
             <li>
                <a href="rooms.html">ROOMS</a>
            </li>
             <li>
                <a href="foods.html">FOOD</a>
            </li>
             <li>
                <a href="adventure.html">ADVENTURE</a>
            </li>
             <li>
                <a href="gallery.html">SHOPPING</a>
            </li>
             <li>
                <a href="attractions.html">ATTRACTION</a>
            </li>
             <li>
                <a href="contact.html">CONTACT</a>
            </li>
        </ul>
        </div>
<table id="sortthis" class="table table-striped table-hover">
<tr>
     <th onclick="sortTable(0, 'sortthis')" style="cursor:pointer;">ID NO</th>
    <th onclick="sortTable(0, 'sortthis')" style="cursor:pointer;">From</th>
	<th onclick="sortTable(1, 'sortthis')" style="cursor:pointer;">To</th>
	<th onclick="sortTable(2, 'sortthis')" style="cursor:pointer;">Journey Date</th>
	<th onclick="sortTable(3, 'sortthis')" style="cursor:pointer;">Full name</th>
    <th onclick="sortTable(4, 'sortthis')" style="cursor:pointer;">Price List</th>
</tr>
<?php
$sql = "SELECT id, from_journey, to_journey, journeydate,Price_bus, full_name FROM travel_info";
$result = $dbcon->query($sql);	

if ($result->num_rows > 0) {
    // output data of each row

	$result->fetch_assoc();
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
         echo "<td>" .$row["id"]. "</td>";
        echo "<td>" .$row["from_journey"]. "</td>";
		echo "<td>" .$row["to_journey"]. "</td>";
		echo "<td>" .$row["journeydate"]. "</td>";
		echo "<td>" .$row["full_name"]. "</td>";
        	echo "<td>" .$row["Price_bus"]. "</td>";
		echo "</tr>";
    }
}
?>

 
</table>

<!-- JS Script to Sort data -->
<script>

function sortTable(n, tableId) {
  var rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById(tableId);
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>

</html>
