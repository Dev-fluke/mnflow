<?php
include 'connect.php';


$sql = "SELECT Distinct DATE_FORMAT(d_date, '%Y-%m-%d') AS dd_date, SUM(d_amount) AS total FROM tbl_detail ORDER BY d_date" ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $d = $row["dd_date"]. "<br>".$row["total"];
        echo $d;
    }
} else {
    echo "ไม่พบข้อมูล";
}

// echo "<meta charset='utf-8'>";
// function ThDate()
// {
// //วันภาษาไทย
// $ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
// //เดือนภาษาไทย
// $ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
 
// //วันที่ ที่ต้องการเอามาเปลี่ยนฟอแมต
// // $myDATE = ("2022-09-22"); //อาจมาจากฐานข้อมูล
// $myDATE = $d; //อาจมาจากฐานข้อมูล
// //กำหนดคุณสมบัติ
// $week = date("w",strtotime($myDATE)); // ค่าวันในสัปดาห์ (0-6)
// $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
// $day = date("d",strtotime($myDATE)); // ค่าวันที่(1-31)
// $years = date("Y",strtotime($myDATE))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
 
// return "
// 		เดือน $ThMonth[$months] 
// 		พ.ศ. $years";
// }

// echo ThDate(); // แสดงวันที่ 

?>
