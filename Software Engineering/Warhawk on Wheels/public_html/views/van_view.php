<div class = 'col-xs-9' id = 'content'>
<table class = 'table' >
		<thead class = 'thead'>
                        <tr>
				<td class = 'col-xs-1'> Van Number </td>
                                <td class = 'col-xs-1'> Ride Name </td>
                                <td class = 'col-xs-1'> Pick Up </td>
                                <td class = 'col-xs-1'> Destination </td>
                                <td class = 'col-xs-1'> Start Time </td>
                                <td class = 'col-xs-1'> Day(s) </td>
                                <td class = 'col-xs-1'> Round Trip </td>
                                <td class = 'col-xs-1'> Frequency </td>
                        </tr>
                </thead>

	<?php
		$query = $db->query('select ride_name, vanId, pick_up, destination, start_time, days, round_trip,  frequency from Ride where vanId = "1"');


		while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
		echo "<tr><td>".$row["vanId"]."</td><td>".$row["ride_name"]."</td><td>".$row["pick_up"]."</td><td>".$row["destination"]."</td><td>".$row["start_time"]."</td><td>".$row["days"]."</td><td>".$row["round_trip"]."</td><td>".$row["frequency"]."</td></tr>";
		echo '</tr>';
		}

	?>

</table>
<table class = 'table'>
		<thead class = 'thead'>
                        <tr>
				<td class = 'col-xs-1'> Van Number </td>
                                <td class = 'col-xs-1'> Ride Name </td>
                	        <td class = 'col-xs-1'> Pick Up </td>
                                <td class = 'col-xs-1'> Destination </td>
                                <td class = 'col-xs-1'> Start Time </td>
                                <td class = 'col-xs-1'> Day(s) </td>
                                <td class = 'col-xs-1'> Round Trip </td>
                                <td class = 'col-xs-1'> Frequency </td>
                        </tr>
                </thead>

	<?php
		$query = $db->query('select ride_name, vanId, pick_up, destination, start_time, days, round_trip, frequency from Ride where vanId = "2"');


		while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
		echo "<tr><td>".$row["vanId"]."</td><td>".$row["ride_name"]."</td><td>".$row["pick_up"]."</td><td>".$row["destination"]."</td><td>".$row["start_time"]."</td><td>".$row["days"]."</td><td>".$row["round_trip"]."</td><td>".$row["frequency"]."</td></tr>";
		echo '</tr>';
		}

	?>

</table>
<table class = 'table'>
		<thead class = 'thead'>
                        <tr>
				<td class = 'col-xs-1'> Van Number </td>
                                <td class = 'col-xs-1'> Ride Name </td>
                                <td class = 'col-xs-1'> Pick Up </td>
                                <td class = 'col-xs-1'> Destination </td>
                                <td class = 'col-xs-1'> Start Time </td>
                                <td class = 'col-xs-1'> Day(s) </td>
                                <td class = 'col-xs-1'> Round Trip </td>
                                <td class = 'col-xs-1'> Frequency </td>
                        </tr>
                </thead>

	<?php
		$query = $db->query('select vanId, ride_name, pick_up, destination, start_time, days, round_trip, frequency from Ride where vanId = "3"');


		while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
		echo "<tr><td>".$row["vanId"]."</td><td>".$row["ride_name"]."</td><td>".$row["pick_up"]."</td><td>".$row["destination"]."</td><td>".$row["start_time"]."</td><td>".$row["days"]."</td><td>".$row["round_trip"]."</td><td>".$row["frequency"]."</td></tr>";
		echo '</tr>';
		}

	?>

</table>
</div>
