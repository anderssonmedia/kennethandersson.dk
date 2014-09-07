<?php 
function getVal($sql) {
	global $database;
	$result = $database->query($sql);
	$row = $result->fetch_row();
	return $row[0];
}

function getLabel($label) {
	global $lang;
	return getVal("SELECT Value" . $lang . " FROM Label WHERE Name = '" . $label . "'");
}
?>