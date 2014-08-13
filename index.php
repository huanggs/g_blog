<?php include 'inc/conn.php'; ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - <?=$blog_name?></title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="main center">
    <?php include 'inc/top.php';?>
    <?php include 'inc/nav1.php';?>
      <div class="content center n_bg">
        <?php while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
          include 'inc/atcl_list.php';
          }
        ?>
      </div>
    </div>

    <div class="footer center">2014 by GhostHuang</div>
</body>
</html>