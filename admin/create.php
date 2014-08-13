<?php include '../inc/conn.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>写日志 - <?=$blog_name?></title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/buttons.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-1.11.1.min.js"></script>
</head>

<body>
		<?php include '../inc/top.php';?>
		<?php include '../inc/nav2.php';?>
		<div class="CreatBlog center n_bg">
            <p><label>输入标题：</label><input type="text"></input></p>
            <p><label>输入内容：</label><textarea name="" cols="86" rows="10"></textarea></p>
            <p><div class="submit center"><input name="submit" class="submit button button-rounded button-caution" type="button" value="发布"></div></p>
        </div>
</body>
</body>
</html>