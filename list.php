<a href = "admin.php">admin.php</a>
<tt>запрос обрабатывается ...</tt>
<?php

#$url = mb_convert_encoding ($url, "UTF-8");
$site = file_get_contents ("db.json");

$str = explode ("\"",$site);
$i = 0;
$y = count($str);

$a = null; # одномерный массив 
while ($i<$y) {

  if (($i%2) == 1) $a[] = $str[$i];
  $i++;

}
$i = 0;
$y = count($a);
$z = 1;
echo "<table border=1>";
while ($i<$y){
	if (($i%8)==0) {
		if ($z == $_GET['id']) {
		echo "<tr>";
		echo "<td>".$a[$i+1];
		echo "</td>";
		echo "<td>".$a[$i+3];
		echo "</td>";
		echo "<td>".$a[$i+5];
		echo "</td>";
		echo "<td>".$a[$i+7];
		echo "</td>";
		echo "</tr>";
		}
		
		$z ++;
	}
	$i++;

}
echo "</table>";
?>