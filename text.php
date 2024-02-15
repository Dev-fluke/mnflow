<br>

<?php
// คำสั่ง SQL สำหรับแสดงผลข้อมูล
$sql = "SELECT * FROM tbl_detail";
// การดึงข้อมูล
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // วนลูปและแสดงผลลัพธ์
    while($row = mysqli_fetch_assoc($result)) {
        echo "ชื่อ: " . $row["d_id"]. " - นามสกุล: " . $row["d_detail"]. "<br>";
    }
} else {
    echo "ไม่พบข้อมูล";
}
?>





<?php 
// คำสั่ง SQL สำหรับดึงข้อมูลที่ต้องการอัปเดต
$sql_select = "SELECT * FROM tbl_detail WHERE d_id = '1' ";

// การดึงข้อมูล
$result = mysqli_query($conn, $sql_select);

if (mysqli_num_rows($result) > 0) {
    // วนลูปและทำการอัปเดตข้อมูล
    while($row = mysqli_fetch_assoc($result)) {
        $new_value = 3500;
        $sql_update = "UPDATE tbl_detail SET d_detail='$new_value' WHERE d_id = '1' ";
        if (mysqli_query($conn, $sql_update)) {
            echo "อัปเดตข้อมูลเรียบร้อยแล้ว";
        } else {
            echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล: " . mysqli_error($conn);
        }
    }
} else {
    echo "ไม่พบข้อมูลที่ต้องการอัปเดต";
}?>






<?// คำสั่ง SQL สำหรับแทรกข้อมูล
$sql = "INSERT INTO ชื่อตาราง (ชื่อคอลัมน์1, ชื่อคอลัมน์2, ชื่อคอลัมน์3)
VALUES ('ค่า1', 'ค่า2', 'ค่า3')";

// การส่งคำสั่ง SQL ไปยังฐานข้อมูล
if (mysqli_query($conn, $sql)) {
    echo "ข้อมูลถูกแทรกเรียบร้อยแล้ว";
} else {
    echo "เกิดข้อผิดพลาดในการแทรกข้อมูล: " . mysqli_error($conn);
}









<!-- // ปิดการเชื่อมต่อ -->
<?php mysqli_close($conn);?>


Onclick
<!DOCTYPE html>
<html>
<body>

<h1>The Window Object</h1>
<h2>The alert() Method</h2>

<p>Click the button to display an alert box.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>

</body>
</html>