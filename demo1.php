<?php
mysql_connect("localhost","root","");
mysql_select_db("pdc");
$sel="select * from dis";
$exe=mysql_query($sel);
error_reporting(0);	
?>
<!DOCTYPE html>
<html>
<body>
 <?php
 	$my = '';
 	$test = array();
 	$counting = array();
	while ($row=mysql_fetch_array($exe))
	 {
			$s=$row[2];
			$my = $my.$s;
			$my = $my.',';
	}
	$yo = explode (',',$my);
	foreach($yo as $key){
		echo "$key<br>";
		array_push($test, $key);
	}
	print_r($test);
	echo "<br><br>";
	$ginti = count($test);
	$ginti = $ginti -1;
	for ($j=0; $j < $ginti ; $j++){
		$gint = 0;
		for ($i=0; $i < $ginti; $i++) { 
			if($i >= $j)
			{
				if(!strcmp($test[$j], $test[$i]))
					$gint = $gint+1;
			}
		}
		array_push($counting,$gint);
	}
	print_r($counting);
	echo "<br><br>";
	$max = $counting[0];
	$index = 0;
	echo "$max<br>";
	for ($i=0; $i < $ginti; $i++) {
		if($max < $counting[$i])
		{
			$index = $i;
			$max = $counting;
		}
	}
	echo "$index<br><br>";
	echo "Beemari aapko hui haii ... " .$test[$index];
?>
</body>
</html>