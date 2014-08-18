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
      <div class="col-sm-12 content">
        <?php while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
          include 'inc/atcl_list.php';
          }
        ?>
      </div>
    <!--主题内容结束-->
    
    <?php include 'inc/footer.php';?>
    </div>
  </div>
</body>
</html>