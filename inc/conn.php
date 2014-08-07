<?php
	$con=mysql_connect("localhost","root","root");
	mysql_query("set names 'utf8'");
	if (!$con){
		die('数据库连接失败'.mysql_error());
	}
	mysql_select_db("g_blog",$con);
	//调用博客基本信息
	$query_blog_info=mysql_query("SELECT * FROM blog_info");
	while ($data_blog_info=mysql_fetch_array($query_blog_info)) {
		$blog_name=$data_blog_info['blog_name'];
		$blog_des=$data_blog_info['blog_des'];
	}
	//调用单篇博客信息
	$query_atcl_info=mysql_query("SELECT * FROM atcl_info");
	//while ($data_atcl_info=mysql_fetch_array($query_atcl_info)) {
	//	$title=$data_atcl_info['title'];
	//	$content=$data_atcl_info['content'];
	//	$date=$data_atcl_info['date'];
	//}
?>