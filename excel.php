<?php

    include './db/db_con.php';

    if(isset($_POST['excel_btn'])){
        
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "O'quvchilar ruyxati " . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('ID', 'Ism', 'Familiya', 'Sharif', 'Paspurt', 'Tug\'ilgan sana', 'Jinsi', 'Yo\'nalish', 'Tel', 'Ro\'yxatga olingan', 'O\'qituvchisi'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$pdoStatement = $pdo->prepare("SELECT * FROM `people` ORDER BY id ASC"); 
if($pdoStatement->execute()){ 
    // Output each row of the data 
    while($row = $pdoStatement->fetch()){ 
        // $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['id'], $row['ism'], $row['familiya'], $row['sharif'], $row['paspurt'], $row['t_sana'], $row['jins'], $row['yunalish'], $row['tel'], $row['r_sana'], $row['uqituvchi']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;
    }

?>