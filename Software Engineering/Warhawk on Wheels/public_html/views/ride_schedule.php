<script>
	function DisplayForm()
	{
		var x = document.getElementById("myDIV");
		if(x.style.display === "none")
		{
			x.style.display = "block";
		}
		else
		{
			x.style.display = "none";
		}
	}

	function Clear()
	{
		document.getElementById("form1").reset();
	}

</script>

<table class = "col-xs-6" id = "rideInfoTable">
        <tr>
                <th>Ride Name</th>
                <th>Pick Up</th>
                <th>Destination</th>
                <th>Start Time</th>
		<th>End Time</th>
                <th>Day(s)</th>
                <th>Frequency</th>
                <th>Round Trip</th>
        </tr>

	<?php
	$sql = "select ride_name, pick_up, destination, start_time, end_time, days, frequency, round_trip from Ride";
	while($row = $sql->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td>{$row['ride_name']}</td><td>{$row['pick_up']}</td><td>{$row['destination']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}</td><td>{$row['days']}</td><td>{$row['frequency']}</td><td>{$row['round_trip']}</td></tr>";
	}

	?>

</table>
<br>

<div class = "col-xs-5" align = "right">
<button type = "button" onclick = "DisplayForm()"> Add Ride </button>

<div id = "myDIV">
<form action = 'index.php?mode=riderequest' method = "post" id = "form1">
	<b> Ride Name: </b> <input type = "text" name = "ride" id = "ride_name">
	<br><br>
	<b> Pick Up Location: </b>
			<?php
				$query = $db->query('select building_name from Buildings');

				echo '<select name = "pickup, id = "pick_up">';

				while($row = $query->fetch(PDO::FETCH_ASSOC))
				{
					echo '<option value = "'.$row['building_name'].'">'.$row['building_name'].'</option>';
				}

				echo '</select>';

			?>
	<br><br>
	<b> Destination: </b>
			<?php
                                $query = $db->query('select building_name from Buildings');

                                echo '<select name = "dest", id = "destination">';

                                while($row = $query->fetch(PDO::FETCH_ASSOC))
                                {
                                        echo '<option value = "'.$row['building_name'].'">'.$row['building_name'].'</option>';
                                }

                                echo '</select>';

                        ?>
	<br><br>
	<b> Start Time: </b> <input type = "text" name = "start" id = "start_time">
	<br><br>
	<b> End Time: </b> <input type = "text" name = "end" id = "end_time">
        <br><br>
	<b> Day(s) of the Week: </b>
	<br>
	<input type = "checkbox" name = "day" id = "day" value = "M"> Monday
	<input type = "checkbox" name = "day" id = "day" value = "T"> Tuesday
	<input type = "checkbox" name = "day" id = "day" value = "W"> Wednesday
	<input type = "checkbox" name = "day" id = "day" value = "Thu"> Thursday <br>
	<input type = "checkbox" name = "day" id = "day" value = "F"> Friday
	<input type = "checkbox" name = "day" id = "day" value = "Sat"> Saturday
	<input type = "checkbox" name = "day" id = "day" value = "Sun"> Sunday
	<br><br>
	<b> Frequency: </b>
	<br>
	<input type = "checkbox" name = "fre" id = "frequency" value = "sem"> Semester
	<input type = "checkbox" name = "fre" id = "frequency" value = "onc"> Once
	<br><br>
	<b> Round Trip: </b>
	<br>
	<input type = "checkbox" name = "trip" id = "round_trip" value = "round"> Round Trip
	<br><br>
	<button type = "button" name = "formsubmit" id = "sub" value = "Submit"> Submit </button>
	<button type = "button" id = "clear" onclick = "Clear()"> Clear </button>
</form>
</div>
</div>
