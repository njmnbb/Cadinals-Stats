<html>
	<head>
		<style type="text/css">
			table {
				width: 70%;
				border: 1px solid black;
			}

			td {
				border: 1px solid black;
			}

			.head {
				font-size: 20px;
				font-weight: bold;
			}

		</style>
	</head>
	<body>
		<!--Grabbing information from Kimono cloud servers and decoding-->
		<?php
			$request = "https://www.kimonolabs.com/api/angltxui?apikey=GiHI876vW4qsFo1dmXHvFX12jYrWpALY";
			$response = file_get_contents($request);
			$results = json_decode($response, TRUE);
		?>

		<h1>Cardinals Statistics</h1>

		<!--Displaying information from Kimono cloud servers-->		
		<table>
			<tr class = "head">
				<td>Name</td>
				<td>Team</td>
				<td>Pos</td>
				<td>G</td>
				<td>AB</td>
				<td>R</td>
				<td>H</td>
				<td>2B</td>
				<td>3B</td>
				<td>HR</td>
				<td>RBI</td>
				<td>BB</td>
				<td>SO</td>
				<td>AVG</td>
				<td>OBP</td>
				<td>SLG</td>
			</tr>
		<?php 
		for($i = 0; $i < 45; $i++) {
			echo "<tr>";
			echo "<td>" . $results[results][collection1][$i][name][text] . "</td>";
			echo "<td>" . $results[results][collection1][$i][team] . "</td>";
			echo "<td>" . $results[results][collection1][$i][position] . "</td>";
			echo "<td>" . $results[results][collection1][$i][gamesPlayed] . "</td>";
			echo "<td>" . $results[results][collection1][$i][atBats] . "</td>";
			echo "<td>" . $results[results][collection1][$i][runs] . "</td>";
			echo "<td>" . $results[results][collection1][$i][hits] . "</td>";
			echo "<td>" . $results[results][collection1][$i][doubles] . "</td>";
			echo "<td>" . $results[results][collection1][$i][triples] . "</td>";
			echo "<td>" . $results[results][collection1][$i][homeRuns] . "</td>";
			echo "<td>" . $results[results][collection1][$i][rbi] . "</td>";
			echo "<td>" . $results[results][collection1][$i][walks] . "</td>";
			echo "<td>" . $results[results][collection1][$i][strikeouts] . "</td>";
			echo "<td>" . $results[results][collection1][$i][avg] . "</td>";
			echo "<td>" . $results[results][collection1][$i][obp] . "</td>";
			echo "<td>" . $results[results][collection1][$i][slg] . "</td>";
			echo "</tr>";
		}			
		?>
		</table>
	</body>
</html>