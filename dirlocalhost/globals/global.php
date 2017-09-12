<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
echo  $_GET["test"];
$test = $_GET["test"];
$test = htmlentities($test);
$test = addslashes($test);
echo $test;

echo htmlentities($_GET["test"]);
echo addslashes($_GET["slash"]);
echo "<pre>" . print_r($_GET,1) . "</pre>";


   ?>
</body>
</html>
