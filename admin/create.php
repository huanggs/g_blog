<?php include '../inc/conn.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>写日志 - <?=$blog_name?></title>
  <link rel="stylesheet" type="text/css" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <?php include '../inc/top.php';?>
      <?php include '../inc/nav2.php';?>
      <div class="col-sm-12 CreatBlog n_bg">
        <p><label>输入标题：</label><input type="text"></input></p>
        <p><label>输入内容：</label><textarea name="" cols="86" rows="10"></textarea></p>
        <p><div class="submit center"><input name="submit" class="submit btn btn-sm btn-primary" type="button" value="发布"></div></p>
      </div>
    <?php include '../inc/footer.php';?>
    </div>
  </div>
</body>
</body>
</html>