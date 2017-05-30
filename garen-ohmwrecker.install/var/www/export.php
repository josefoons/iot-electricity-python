<?php
$host = 'localhost';
$user = 'user1';
$pass = 'user1';
$db = 'umg511';
$table = 'umg511_tbl';
$file = 'export';
$idDescargar = $_POST['idOculto'];
$fecha = $_POST['fecha'];
 
$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");
 

$result = mysql_query("SHOW COLUMNS FROM ".$table."");
if (mysql_num_rows($result) > 0) {
while ($row = mysql_fetch_assoc($result)) {
  $csv_output .= $row['umg511_text'].", ";
  $i++;
 }
}
$csv_output .= "\n";
 
//$values = mysql_query("SELECT umg511_text FROM ".$table."");
$values = mysql_query("SELECT umg511_text FROM ".$table." WHERE umg511_id = ".$idDescargar."");


while ($rowr = mysql_fetch_row($values)) {
 for ($j=0;$j<$i;$j++) {
  $csv_output .= $rowr[$j].", ";
 }
 $csv_output .= "\n";
}

//$filename = $file."_".date("Y-m-d_H-i",time());
$filename = $file."_".$fecha;
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header("Content-disposition: filename=".$filename.".csv");
print $csv_output;
exit;
?>