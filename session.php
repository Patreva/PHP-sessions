<?php
session_start();
?>
<?php
$_SESSION["Name"]="Patrick Wahome";
$Name=$_SESSION["Name"];
echo $Name;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>

</body>
</html>