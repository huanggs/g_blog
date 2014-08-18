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
    <div class="row">
		<?php include 'inc/top.php';?>
    </div>
    	<div class="navbar navbar-inverse">
              <div class="container">
                  <div class="navbar-header"><a class="navbar-brand" href="#">首页</a></div>
                  <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="list.php" class="active">文章列表</a></li>
                            <li><a href="pro.php">个人资料</a></li>
                            <li><a href="album.php">相册</a></li>
                            <li class="creat_btn"><a href="admin/create_atcl.php">发日志</a></li>
                        </ul>
                  </div>
              </div>
		</div>
      <div class="col-sm-12 content">
        <?php while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
          include 'inc/atcl_list.php';
          }
        ?>
      </div>
</div>
</body>