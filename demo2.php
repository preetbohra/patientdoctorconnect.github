
<!DOCTYPE html>
<html>
<body>
<form method="post">
 <textarea name="txtarea"></textarea>
 <input type="submit" value="send" />
</form>
<?php
	$con = mysqli_connect("localhost","root","","pdc");
	mysqli_select_db($con,"pdc");
	$sel="select * from disease where symptom = '";
	$area = $_POST["txtarea"];
	$symptom = explode ("\r\n",$area);
	$sym_array = array();
	foreach ($symptom as $keyed)
	{
		array_push($sym_array, $keyed);
	}
	$ginti = count($sym_array);
	for ($i=0; $i < $ginti ; $i++) { 
		$sel = $sel.$sym_array[$i];
		if($i != $ginti - 1)
		{
			$sel = $sel."' OR symptom = '";
		}
		else
		{
			$sel = $sel."'";
		}
	}
	echo $sel;
	$exe=mysqli_query($con,$sel);
	error_reporting(0);	
?>
 <?php
 	$my = '';
 	$test = array();
 	$counting = array();
	while ($row=mysqli_fetch_array($exe))
	 {
			$s=$row[2];
			$my = $my.$s;
			$my = $my.',';
	}
	$yo = explode (',',$my);
	foreach($yo as $key)
	{
		echo "$key<br>";
		array_push($test, $key);
	}
	$ginti = count($test);
	$ginti = $ginti -1;
	for ($j=0; $j < $ginti ; $j++)
	{
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
	$max = 0;
	$index = 0;
	for ($i=0; $i < $ginti; $i++) {
		if($max < $counting[$i])
		{
			$index = $i;
			$max = $counting[$i];
		}
	}
	echo "Beemari aapko hui haii ... " .$test[$index];
?>

<?php
	$sel="select * from cure where disease ='".$test[$index]."'";
	$exe=mysqli_query($con,$sel);
	error_reporting(0);	
?>
<?php
	while ($row=mysqli_fetch_array($exe))
	 {
			$medication=$row[2];
			$precaution=$row[3];
	}
	echo "<h4> Medications for the Disease</h4>";
	echo "$medication";
	echo "<h4>Precautions for the Disease</h4>";
	echo "$precaution";
?>
</body>
</html>