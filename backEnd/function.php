<?php

include 'connect.php';




$sqlTotal = "SELECT SUM(d_amount) AS total FROM tbl_detail";
// $sql = "SELECT SUM(d_amount) FROM tbl_detail WHERE d_amount";
$resultTotal = mysqli_query($conn, $sqlTotal);

if (mysqli_num_rows($resultTotal) > 0) {

    $rowTotal = mysqli_fetch_assoc($resultTotal);
    $formatNum = $rowTotal["total"];
    $Total = number_format($formatNum, 0, '.', ',');

        // echo  "total".$rowTotal["total"];

} else {

    echo "ไม่พบข้อมูล";
};






















?>