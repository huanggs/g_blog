<?php include 'inc/conn.php'; ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - <?=$blog_name?></title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <!--主题内容开始-->
    <div class="row">
    <?php include 'inc/top.php';?>
    <?php include 'inc/nav1.php';?>
      <div class="col-sm-12 n_bg">
        <?php while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
          include 'inc/atcl_list.php';
          }
        ?>
      </div>
    </div>
    <!--主题内容结束-->
     
    <!--bootstrap测试内容开始-->
    <div class="row">
      <div class="col-sm-8" style="border:1px solid #666;">.col-sm-8</div>
      <div class="col-sm-4" style="border:1px solid #666;">.col-sm-4</div>
    </div>
    <!--bootstrap测试内容结束-->
    
    <?php include 'inc/footer.php';?>
  </div>
</body>
</html>