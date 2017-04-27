<?php
$host="localhost"; // Host name 
$username=""; // Insert your Mysql username 
$password=""; // Insert your Mysql password 
$db_name=""; // Insert your Database name 
 
$math140 = intval($_POST['math140']);  
$busn201 = intval($_POST['busn201']);  
$busn210 = intval($_POST['busn210']);
$busn211 = intval($_POST['busn211']);
$busn305 = intval($_POST['busn305']);
$busn322 = intval($_POST['busn322']);
$busn325 = intval($_POST['busn325']);
$busn403 = intval($_POST['busn403']);
$math220 = intval($_POST['math220']);
$cisc105 = intval($_POST['cisc105']);
$cisc200 = intval($_POST['cisc200']);
$cisc215 = intval($_POST['cisc215']);
$cisc310 = intval($_POST['cisc310']);
$cisc325 = intval($_POST['cisc325']);
$cisc330 = intval($_POST['cisc330']);
$cisc322 = intval($_POST['cisc322']);
$cisc375 = intval($_POST['cisc375']);
$cisc_erps = intval($_POST['cisc_erps']);
$cisc_sa = intval($_POST['cisc_sa']);
$cisc442 = intval($_POST['cisc442']);
$cisc352 = intval($_POST['cisc352']);

//CONNECT
mysql_connect("$host", "$username", "$password")or die("Cannot connect.");

mysql_select_db("$db_name")or die("Cannot select database.");

//INSERT 
$query = "REPLACE INTO courses (math140, busn201, busn210, busn211, busn305, busn322, busn325, busn403, math220, cisc105, cisc200, cisc215, cisc310, cisc325, cisc330, cisc322, cisc375, cisc_erps, cisc_sa, cisc442, cisc352) VALUES ('$math140', '$busn201', '$busn210', '$busn211', '$busn305', '$busn322', '$busn325', '$busn403', '$math220', '$cisc105', '$cisc200', '$cisc215', '$cisc310', '$cisc325', '$cisc330', '$cisc322', '$cisc375', '$cisc_erps', '$cisc_sa', '$cisc442', '$cisc352')"; 
$result = mysql_query($query); 

if($result)
{
	echo '<p>Information updated.</p>';
}
else
{
	echo '<p>Query Failed.</p>';
}

// Close connection 
mysql_close(); 
?>
