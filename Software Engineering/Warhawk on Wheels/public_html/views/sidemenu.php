<div class='col-xs-3' id='sidemenu'>
<?php if (isset($_SESSION['user'])){
?>
  <h4>Links</h4>
  <ul>
    <li><a href='index.php'>Home</a></li>
    <li><a href='index.php?mode=contract'>Contract</a></li>
    <li><a href='index.php?mode=profile'>Profile</a></li>
    <li><a href='index.php?mode=studentCalendar'>Student Calendar</a></li>
	  <li><a href='index.php?mode=addriderequest'>Add Ride Request</a></li>
    <li><a href='index.php?mode=riderequest'>View Ride Request</a></li>
<?php
// Admin access sidemenu links

} if (isset($_SESSION['access_level']) && $_SESSION['access_level'] == 1) {
  ?>
  <li><a href='index.php?mode=vanview'>Van Schedules</a></li>
  <li><a href='index.php?mode=studentsearch'>Student Search</a></li>
<?php
}
?>
</ul>
</div>
