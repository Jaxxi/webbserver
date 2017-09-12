<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
</body>

<?php
$birthday = "19980815";
$date = date("ymd D W M", strtotime($birthday));
$now = date("ymd" , time());
$diff = strtotime($now) - strtotime($birthday);
echo "<h1>" , ($diff / 86400) , "</h1>";
echo $date;
echo $now;

?>
</body>
</html>
