<?php
include 'connect.php';
// คำสั่ง SQL สำหรับแสดงผลข้อมูล
$sql = "SELECT * FROM tbl_detail";
// การดึงข้อมูล
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // วนลูปและแสดงผลลัพธ์
    while($row = mysqli_fetch_assoc($result)) {
        // echo "ชื่อ: " . $row["d_id"]. " - นามสกุล: " . $row["d_detail"]. "<br>";
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th scope='col'>ลำดับ</th>
                <th scope='col'>รายการ</th>
                <th scope='col'>จำนวนเงิน</th>
                <th scope='col'>ปรับแต่ง</th>
            </tr>
        </thead>
        <tbody class='table-group-divider'>
            <tr>
                <td>" . $row["d_id"]. "</td>
                <td>" . $row["d_detail"]. "/td>
                <td>" . $row["d_amount"]. "</td>
                
            </tr>
           
            </tr>
        </tbody>
        </table>"
   
   
    }
} else {
    echo "ไม่พบข้อมูล";
}
?>

