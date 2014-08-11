<?php include '../inc/conn.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>写日志 - <?=$blog_name?></title>
	<?php include '../inc/css.html';?>
</head>

<body>
		<?php include '../inc/top.php';?>
		<?php include '../inc/nav.php';?>
		<div class="CreatBlog center n_bg">
            <p><label>输入标题：</label><input type="text"></input></p>
            <p><label>输入内容：</label><textarea name="" cols="86" rows="20"></textarea></p>
            <p><div class="submit center"><input name="submit" class="submit" type="button" value="发布"></div></p>
        </div>
</body>
</body>
</html>