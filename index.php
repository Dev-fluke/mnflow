<?php include 'backEnd/connect.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ซื้อของใช้</title>
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
  <?php include 'component/navba.php';?>
<div class="container">
  <div class="content">

    <form action="backEnd/saveForm.php" method="post"> <!--Start Form -->
      <div class="mb-3">
        <div class="form-text">เลือก วัน เดือน ปี</div>
          <input type="date" class="form-control" id="dateDate" name="dateDate">
        </div>
      <div class="mb-3">
        <div class="form-text">ซื้อ...</div>
          <textarea class="form-control" id="dataDetail" name="dataDetail" rows="3"></textarea>
        </div>
      <div class="mb-3">
        <div class="form-text">จำนวนเงิน</div>
          <input type="number" class="form-control" id="dataAmount" name="dataAmount">
        </div>
      <div class="col text-center">
        <button type="submit" class="btn btn-success text-center" style="padding: 20px; font-size: 20px;">บันทึก</button>
      </div>
    </form><!--End Form -->

  </div>  
</div>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<script>
  const element = document.getElementById('dateDate');
  element.valueAsNumber = Date.now()-(new Date()).getTimezoneOffset()*60000;
</script>