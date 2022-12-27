<?php
header("Content-Type: application/json; charset=UTF-8");

if (array_key_exists ("callback", $_GET)) {
	$callback = $_GET['callback'];
} else {
	return "";
}

$outp = array ("answer" => "15");

$safename = htmlspecialchars($callback);
echo $safename . "(".json_encode($outp).")";
?>
