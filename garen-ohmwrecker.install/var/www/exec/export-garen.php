<?php
$filename = "janitza511 - ". date("d/m/Y") .".csv";
$fp = fopen('php://output', 'w');
$conn = mysqli_connect("localhost","garen","Jan1tza511","janitza511");

$result = mysqli_query($conn, "SELECT * From umg511_tbl");

header('Content-Type: application/csv');
// tell the browser we want to save it instead of displaying it
header('Content-Disposition: attachment; filename="'.$filename.'";');



	

/*$resulth = mysqli_query($conn,"Show Columns from umg511_tbl");
for ($i = 0; $i < mysqli_num_rows($resulth); $i++) {
    $colArray[$i] = mysqli_fetch_assoc($resulth);
    $fieldArray[$i] = $labels[$colArray[$i]['Field']];
}*/

$fieldArray = array(_ID ,_DAY ,_G_ULN_0 ,_G_ULN_1 ,_G_ULN_2 ,_G_ULL_0 ,_G_ULL_1 ,_G_ULL_2 ,_G_ILN_0 ,_G_ILN_1 ,_G_ILN_2 ,_G_I_SUM3 ,_G_PLN_0 ,_G_PLN_1 ,_G_PLN_2 ,_G_P_SUM3 ,_G_SLN_0 ,_G_SLN_1 ,_G_SLN_2 ,_G_S_SUM3 ,_G_QLN_0 ,_G_QLN_1 ,_G_QLN_2 ,_G_Q_SUM3 ,_G_COS_PHI_0 ,_G_COS_PHI_1 ,_G_COS_PHI_2 ,_G_FREQ ,_G_PHASE_SEQ ,_G_WH_0 ,_G_WH_1 ,_G_WH_2 ,_G_WH_SUML13 ,_G_WH_V_0 ,_G_WH_V_1 ,_G_WH_V_2 ,_G_WH_V_HT_SUML13 ,_G_WH_Z_0 ,_G_WH_Z_1 ,_G_WH_Z_2 ,_G_WH_Z_SUML13 ,_G_WH_S_0 ,_G_WH_S_1 ,_G_WH_S_2 ,_G_WH_S_SUML13 ,_G_QH_0 ,_G_QH_1 ,_G_QH_2 ,_G_QH_SUML13 ,_G_IQH_0 ,_G_IQH_1 ,_G_IQH_2 ,_G_IQH_SUML13 ,_G_CQH_0 ,_G_CQH_1 ,_G_CQH_2 ,_G_CQH_SUML13 ,_G_THD_ULN_0 ,_G_THD_ULN_1 ,_G_THD_ULN_2 ,_G_THD_ILN_0 ,_G_THD_ILN_1 ,_G_THD_ILN_2);
fputcsv($fp,$fieldArray);



fputcsv($fp,$cabezera);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);



while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}

fpassthru($fp);





?>
