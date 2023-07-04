<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Polling Results</title>
	<style>
		
		table { border: 1px solid black; 
			width: 100%; border-collapse: collapse;};

			
		

	</style>
</head>
<body>
<?php
include('connection.php');

$getall = "select * from announced_pu_results";

$check = mysqli_query($con, $getall);

while ($load = mysqli_fetch_array($check)) {
	
	
	$party = $load['party_abbreviation'];
	$unique_id = $load['polling_unit_uniqueid'];
	$party_score = $load['party_score'];

	if ($load) {
		echo "
	<table >
  <tr>
    <th>Polling Unit ID</th>
    <th>Party</th>
    <th>Party Score</th>
  </tr>

  <tr>
    <td>$unique_id</td>
    <td>$party</td>
    <td>$party_score</td>
  </tr>

</table>



		";
	}
	


	

}

?>
<br><br> <center><a style="border: 1px solid green; padding: 10px; text-decoration: none;  color: white; background: green;" href="sum_total.php">Check Sum Total Here</a><center>
<br><br>

</body>
</html>
