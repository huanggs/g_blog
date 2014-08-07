<?php include 'inc/conn.php'; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title><?=$blog_name?></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<div id="main">
		<?php include 'inc/top.php';?>
		<?php include 'inc/nav.php';?>
		<div id="content">
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