<section>
<h3><?php echo getLabel("film_tv"); ?></h3>

<table class="resume">

	<?php
	if ($result = mysqli_query($database, "SELECT * FROM Resume WHERE Type = 'film' OR Type = 'tv' ORDER BY EndDate DESC")) {
		while ($row = $result->fetch_assoc()) {
			$year = date('Y', strtotime($row["EndDate"]));
			$title = $row["Title" . $lang];
			$role = $row["Role" . $lang];
			$lead = $row["Lead"];
			$director = $row["Director" . $lang];
			$production = $row["Production" . $lang];
			
			echo "<tr>";
			echo "<td class='year'>" . $year . "</td>";
			echo "<td class='title'>" . $title . "</td>";
			echo "<td class='role'>" . $role;
			if ($lead) {
				echo " <span class='grey'>*</span>";
			}
			echo "</td>";
			echo "<td class='production'>" . $production . "</td>";
			echo "</tr>";
		}
	mysqli_free_result($result);
	}
	?>	

</table>

<br><br>

<h3><?php echo getLabel("theater"); ?></h3>

<table class="resume">

	<?php
	if ($result = mysqli_query($database, "SELECT * FROM Resume WHERE Type = 'theater' ORDER BY EndDate DESC")) {
		while ($row = $result->fetch_assoc()) {
			$year = date('Y', strtotime($row["EndDate"]));
			$title = $row["Title" . $lang];
			$role = $row["Role" . $lang];
			$lead = $row["Lead"];
			$director = $row["Director" . $lang];
			$production = $row["Production" . $lang];
			
			echo "<tr>";
			echo "<td class='year'>" . $year . "</td>";
			echo "<td class='title'>" . $title . "</td>";
			echo "<td class='role'>" . $role;
			if ($lead) {
				echo " <span class='grey'>*</span>";
			}
			echo "</td>";
			echo "<td class='production'>" . $production . "</td>";
			echo "</tr>";
		}
	mysqli_free_result($result);
	}
	?>	

</table>

<span class="lead grey">* &nbsp;  <?php echo getLabel("lead"); ?></span>

<br><br>

<h3><?php echo getLabel("education"); ?></h3>

<table class="education">

	<?php
	if ($result = mysqli_query($database, "SELECT * FROM Resume WHERE Type = 'education' AND Active = 1 ORDER BY EndDate DESC")) {
		while ($row = $result->fetch_assoc()) {
			$start_year = date('Y', strtotime($row["StartDate"]));
			$end_year = date('Y', strtotime($row["EndDate"]));
			$title = $row["Title" . $lang];
			$info = $row["Info" . $lang];
			$lead = $row["Lead"];
			$director = $row["Director" . $lang];
			$production = $row["Production" . $lang];
			$highlight = ($row["Highlighted"]) ? " class='highlighted'" : "";
			
			echo "<tr$highlight>";
			echo "<td class='year'>";
			if ($row["StartDate"]) {
				echo $start_year . " - ";
			}
			echo $end_year . "</td>";
			echo "<td class='title'>" . $title . "</td></tr>";
			if ($info) {
				echo "<tr><td class='year'></td><td class='info grey'>";
				echo $info;
				echo "</td></tr>";
			}
		}
	mysqli_free_result($result);
	}
	?>

</table>

<br><br>

<h3><?php echo getLabel("skills"); ?></h3>

<table class="skills">

	<?php
	if ($result = mysqli_query($database, "SELECT * FROM Skill WHERE Active = 1 ORDER BY Position ASC")) {
		while ($row = $result->fetch_assoc()) {
			$skill = $row["Skill" . $lang];
			$value = $row["Value" . $lang];
			
			echo "<tr><td class='skill'>" . $skill . "</td>";
			echo "<td class='value'>" . $value . "</td></tr>";
		}
	mysqli_free_result($result);
	}
	?>

</table>

</section>