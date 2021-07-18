<?php

$numberoftreesperdistrictpertype= array(

'wakiso'  => array(
'muvule tree' => 569,
'eucapliptus' => 80003,
'musizi' => 767363,
'musabu' => 8984,
),

'kabale' => array(
'muvule tree' => 69,
'eucapliptus' => 803,
'musizi' => 7363,
'musabu' => 89,
),

'Kabale' => array(
'muvule tree' => 90,
'eucapliptus' => 703,
'musizi' => 763,
'musabu' => 29,
),

);

foreach ($numberoftreesperdistrictpertype as $index => $value) {
	echo "====".$index."======<br>";

	foreach ($value as $key => $trees){
		echo $key."=".$trees."<br>";
	}
}

$sumofalltrees=array(569,80003,767363,8984,69,803,7363,89,90,703,763,29);
echo "-----sum(sumofalltrees)------ = ".array_sum($sumofalltrees)."------<br>" ;

setcookie("sumofalltrees","866807",time()+3600);
if (isset($_COOKIE['sumofalltrees'])) {
echo $_COOKIE['sumofalltrees'];
setcookie("sumofalltrees","",time()-60);

}
else{
	echo "----------the cookie doesnot exist----" ."<br>";
}

$sumofmasabutrees=array(8984,29,89);
echo "------sum(sumofmasabutrees)----- = ".array_sum($sumofmasabutrees)."---------<br>" ;

session_start();
$_SESSION['sumofmasabutrees'] ="9102";
echo $_SESSION["sumofmasabutrees"]."<br>"  ;


$sumoftreesinkabale=array(69,703,763,29);
echo "-----sum(sumoftreesinkabale)------ = ".array_sum($sumoftreesinkabale)."------<br>" ;

$sumoftreesinKabale=array(69,803,7363,89);
echo "-----sum(sumoftreesinKabale)------ = ".array_sum($sumoftreesinKabale)."------<br>" ;

$sumoftreesinwakiso=array(569,80003,767363,8984);
echo "-----sum(sumoftreesinwakiso)------ = ".array_sum($sumoftreesinwakiso)."------<br>" ;

?>
<!DOCTYPE html>
<html>
<head>
	<meata charset="utf-8">
		<title>
			The internship
		</title>

</head>
<body>
	< form method="POST" action "master.php">
	<label> sumoftrees</label>
	<input type="number" name- +>
	<a href="master.php"> Master page</a>
</body>
</html>











?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> The Internship</title>
</head>
<body>
	<form method="GET" action"master.php">
		<label>sumoftees</label>
		<output type="number" name="866807">
			<br>
			</output
			<br>
			<label>sumof masabu tree</label>
			<output type="number" name="9102"></output>
			<br>

</form>
</body>

			
		