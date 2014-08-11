<?php include '/inc/conn.php'; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>首页 - <?=$blog_name?></title>
	<?php include 'inc/css.html';?>
</head>

<body>
	<div class="main center">
		<?php include 'inc/top.php';?>
		<?php include 'inc/nav.php';?>
		<div class="content center n_bg">
			<?php while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
				include 'inc/atcl_list.php';
				}
			?>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>