<?php
  include "conn.php";
  $create_atcl = "INSERT INTO atcl_info (atcl_date, title, content) VALUES (now(), '$_POST[atcl_title]', '$_POST[atcl_content]')";
  if (!mysql_query($create_atcl,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/create_atcl.php');
  }
?>