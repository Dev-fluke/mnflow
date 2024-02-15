<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายละเอียด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    h1 {
      color: #FFF;
    }
    .content{
      background-color: #fff;
      padding: 20px;
    }
    .text.Right{
      text-align: right;
    }
  </style>
  </head>

<body>
  <?php
  include 'component/navba.php';
  include 'backEnd/connect.php';
//   include 'backEnd/function.php';
  $d_s = $_POST['d_s'];//ตัวแปรวันที่เริ่มต้น
  $d_e = $_POST['d_e'];//ตัวแปรวันที่สิ้นสุด


  $sql = "SELECT * FROM tbl_detail  WHERE d_date BETWEEN '$d_s' AND '$d_e' ORDER BY d_id ASC ";
//   $sql = "SELECT *, SUM(d_amount) AS total FROM tbl_detail WHERE d_date BETWEEN '$d_s' AND '$d_e' ORDER BY d_id ASC ";
  $result = mysqli_query($conn, $sql);
  
  $num2 = mysqli_num_rows($result);



  
//   $total = mysqli_num_rows($result);
//   echo $formatNum = $rowTotal["total"];

  

  ?>


<div class="container">
  <div class="content">

    <form action="searchFormDev.php" method="post"> <!--Start Form -->
    <div class="input-group mb-3">
    <input type="date"  name="d_s" id="datepicker" class="form-control"  value="<?=$d_s?>"> &nbsp;&nbsp;-&nbsp;&nbsp;
    <input type="date"  name="d_e" id="datepicker2" class="form-control" value="<?=$d_e?>">
    <!-- <button class="input-group-text" id="basic-addon2" type="submit">ค้นหา</button> -->
    <button type="submit" class="btn btn-secondary text-center" >ค้นหา</button>
  </form>

    </div>

        <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ว/ด/ป</th>
                <th scope="col">รายการ</th>
                <th scope="col">จำนวนเงิน</th>
                <th scope="col">ปรับแต่ง</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

       <?php
          $num = 1;
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          $formatNum = $row["d_amount"];
          $id = $row["d_id"];
        ?>
            <tr >
                <td><?=$num?></td>
                <td><?=$row["d_date"]?></td>
                <td><?=$row["d_detail"];?></td>
                <td ><?=$d_amount = number_format($formatNum, 2, '.', ',');?></td>
                <td><button type="button" class="btn btn-danger" onclick="sendData(<?=$id?>)">ลบ</button></td>
            </tr>
        <?php
        $num++;
        
          } } else { echo "ไม่พบข้อมูล"; }
        ?>
         </tbody>
        </table>

        <!-- Start รวมจำนวนเงิน -->
        <div class="alert alert-success text-right" role="alert">
           <?php
               $sql = "SELECT SUM(d_amount) AS total FROM tbl_detail WHERE d_date BETWEEN '$d_s' AND '$d_e' ORDER BY d_id ASC ";
               $result = mysqli_query($conn, $sql);   
               $row = mysqli_fetch_assoc($result);
               $Total = $row["total"];
               $Total = number_format($Total, 0, '.', ',');
           ?> 
          <b>รวมจำนวนเงิน <?=$Total?> บาท</b>
        </div>
         <!-- End รวมจำนวนเงิน -->

  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function sendData(id) {
        window.location.href = "backEnd/deleteForm.php?id=" + id;
    
    }

</script>

</body>
</html>
