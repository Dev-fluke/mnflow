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
  include 'backEnd/function.php';

  $sql = "SELECT * FROM tbl_detail ORDER BY d_id DESC";
  $result = mysqli_query($conn, $sql);

  ?>


<div class="container">
  <div class="content">

    <form action="searchFormDev.php" method="post"> <!--Start Form -->
      <div class="input-group mb-3">
        <input type="date"  name="d_s" id="datepicker" class="form-control" placeholder="" > &nbsp;&nbsp;-&nbsp;&nbsp;
        <input type="date"  name="d_e" id="datepicker2" class="form-control" placeholder="" >
        <!-- <button class="input-group-text" id="basic-addon2" type="submit">ค้นหา</button> -->
        <button type="submit" class="btn btn-secondary text-center" >ค้นหา</button>
      </div>
    </form>
<br><h3 class="text-center">รายการใช้จ่ายทั้งหมด</h3>
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
                <td><?=$row["d_date"];?></td>
                <td><?=$row["d_detail"];?></td>
                <td ><?=$d_amount = number_format($formatNum, 0, '.', ',');?></td>
                <td><button type="button" class="btn btn-danger" onclick="sendData(<?=$id?>)">ลบ</button></td>
            </tr>
        <?php
        $num++;
          } } else { echo "ไม่พบข้อมูล"; }
        ?>
         </tbody>
        </table>

        <div class="alert alert-success text-right" role="alert">
          <b>รวมจำนวนเงิน <?=$Total?> บาท</b>
        </div>

  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function sendData(id) {
      window.location.href = "backEnd/deleteForm.php?id=" + id;
    
    }

      // $('#datepicker').datepicker({
      //       uiLibrary: 'bootstrap',
      //       format: "yyyy-mm-dd",
      //       type : "date"
      //   });

      //   $('#datepicker2').datepicker({
      //       uiLibrary: 'bootstrap',
      //       format: "yyyy-mm-dd",
      //       type : "date"
      //   });
</script>

</body>
</html>
