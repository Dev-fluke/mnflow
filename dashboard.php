<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แสดงภาพรวม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="cover.css" rel="stylesheet">
    <style>
    h1 {
      color: #FFF;
    }
    .content{ 
      background-color: #fff;
      padding: 20px;
    }
  </style>
  </head>
  
<body>
<?php include 'backEnd/connect.php';?>
<?php include 'component/navba.php';?>
<div class="container">
  <div class="content">

    <b>จำนวนเงินที่ตั้งไว้ 3,000 บาท</b>


<?php 
$sql = "SELECT Distinct DATE_FORMAT(d_date, '%m-%Y') AS dd_date, SUM(d_amount) AS total FROM tbl_detail ORDER BY d_date" ;
$result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
 ?>
      <div class="form-text"> <?=$row["dd_date"]?></div>
      <div class="progress">
      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85.3%" 
          aria-valuenow="80" aria-valuemin="0" aria-valuemax="3000"> <?=$row["total"]?></div>
      </div>
<?php
  }
  } else {
      echo "ไม่พบข้อมูล";
  }
?>




    
  <!-- <div class="form-text"> ก.พ.67</div>
    <div class="progress">
    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85.3%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="3000"> 2,560</div>
  </div>

  <div class="form-text"> ก.พ.67</div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="3000"></div>
  </div>

  <div class="form-text"> ก.พ.67</div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="3000"></div>
  </div>

  <div class="form-text"> ก.พ.67</div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="3000"></div>
  </div>

  <div class="form-text"> ก.พ.67</div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="3000"></div>
  </div> -->



  </div>  
</div>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

