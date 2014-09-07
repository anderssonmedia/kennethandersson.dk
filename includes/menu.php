<nav>
	<ul>
		<?php
		if ($result = mysqli_query($database, "SELECT * FROM Menu WHERE Active = 1")) {
			while ($row = $result->fetch_assoc()) {
				$label = $row["Label" . $lang];
				$file = $row["File"];
				$active = "";
				if ($file == $site) {
					$active = " class='active'";
				}
				echo "<li><a href='?site=" . $file . "'" . $active . ">" . $label . "</a></li>";
			}
		mysqli_free_result($result);
		}
		?>		
	</ul>
</nav>