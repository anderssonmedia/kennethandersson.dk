<table class="skills">

	<?php
	if ($result = mysqli_query($database, "SELECT * FROM Profile2 WHERE Active = 1 ORDER BY Position ASC")) {
		while ($row = $result->fetch_assoc()) {
			$name = $row["Name" . $lang];
			$value = $row["Value" . $lang];
			
			echo "<tr><td class='skill'>" . $name . "</td>";
			echo "<td class='value'>" . $value . "</td></tr>";
		}
	mysqli_free_result($result);
	}
	?>

</table>
