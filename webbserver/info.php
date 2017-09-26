<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>php exempel</title>
</head>

<body>
  <form action="dates.php" method="post">
  <input type ="text" name="date">
  <input type="submit">
  </form>

  <?php
  if(isset($_POST["date"]));
  echo strtotime($_POST["date"]);

  $birthday = $_POST["date"];

$date = date("ymd D W M", strtotime($birthday));
$now = date("ymd" , time());
$diff = strtotime($now) - strtotime($birthday);



  ?>
</body>
</html>
