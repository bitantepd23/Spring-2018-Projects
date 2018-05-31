<?php
if(isset($data) && isset($_SESSION['student_id'])) {
?>
  <div class = 'col-xs-9' id = 'content'>
  	<h2> My Ride Requests: </h2>
  		<table class = 'table'  id = "classeInfoTable">
  		<thead class = 'thead'>
          		<tr>
                  		<td class = 'col-xs-3'> Ride Name </td>
                  		<td class = 'col-xs-15'> Pick Up </td>
                  		<td class = 'col-xs-3'> Destination </td>
                  		<td class = 'col-xs-1'> Start Time </td>
                  		<td class = 'col-xs-1'> Day(s) </td>
                  		<td class = 'col-xs-1'> Frequency </td>
                  		<td class = 'col-xs-1'> Round Trip </td>
  				<td class = 'col-xs-1'> </td>
  				<td class = 'col-xs-1'> </td>
          		</tr>
  		</thead>
  		<tbody>
  <?php
  //display each request
  	}
  		if(isset($data) && count($data)>0) {
  			for($i=0; $i <count($data); $i++) {
  				$row = $data[$i]; //each element is an object

  				echo "<tr>
  					<td class = 'col-xs-3'>{$row['ride_name']}</td>
  					<td class = 'col-xs-3'>{$row['pick_up']}</td>
  					<td class = 'col-xs-3'>{$row['destination']}</td>
  					<td class = 'col-xs-1'>{$row['start_time']}</td>
  					<td class = 'col-xs-1'>{$row['days']}</td>
  					<td class = 'col-xs-1'>{$row['frequency']}</td>
  					<td class = 'col-xs-1'>{$row['round_trip']}</td>";
  					echo "<td><form action = 'index.php?mode=editrequest' method = 'post'>";
  					echo "<button type = 'submit' class = 'btn btn-primary'> Edit </button>";
  					echo "<td><form action = 'index.php?mode=deleteriderequest' method = 'post'>";
  					echo "<button type = 'button' class = 'btn btn-primary'> Delete </button>";
  					echo "</form></td></tr>";
      }

      ?>
      </tbody>
    </table>
  </div>
  <br>

            <!-- BEGINNING OF BUFFER ADDITION -->

          <div class = 'col-xs-9' id = 'content'>
            <h2> Ride Buffer: </h2>
              <table class = 'table'  id = "rideInfoTable">
              <thead class = 'thead'>
                      <tr>
                        <td class = 'col-xs-3'> Ride Name </td>
                        <td class = 'col-xs-15'> Pick Up </td>
                        <td class = 'col-xs-3'> Destination </td>
                        <td class = 'col-xs-1'> Start Time </td>
                        <td class = 'col-xs-1'> Day(s) </td>
                        <td class = 'col-xs-1'> Frequency </td>
                        <td class = 'col-xs-1'> Round Trip </td>
                  <td class = 'col-xs-1'> </td>
                  <td class = 'col-xs-1'> </td>
                      </tr>
              </thead>
              <tbody>
          <?php
        for($i=0; $i <count($data); $i++) {
            $row = $data[$i]; //each element is an object
            $dayArray = explode(",", $row['days']);

        for ($i = 0; $i<count($dayArray); $i++){
            // prints each day as
            echo "<tr>
              <td class = 'col-xs-3'>{$row['ride_name']}</td>
              <td class = 'col-xs-3'>{$row['pick_up']}</td>
              <td class = 'col-xs-3'>{$row['destination']}</td>
              <td class = 'col-xs-1'>{$row['start_time']}</td>
              <td class = 'col-xs-1'>{$dayArray[$i]}</td>
              <td class = 'col-xs-1'>{$row['frequency']}</td>
              <td class = 'col-xs-1'>{$row['round_trip']}</td>";
              echo "<td><form action = 'index.php?mode=editrequest' method = 'post'>";
              echo "<button type = 'submit' class = 'btn btn-primary'> Edit </button>";
              echo "<td><form action = 'index.php?mode=deleteriderequest' method = 'post'>";
              echo "<button type = 'button' class = 'btn btn-primary'> Delete </button>";
              echo "</form></td></tr>";

          }
  			}

  		}
  ?>

  		</tbody>
  	</table>
  </div>
  <br>
