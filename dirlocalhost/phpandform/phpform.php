<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
  <form action="phpform.php" method="POST"
        <input type="text"  name="message">
        <select name="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
   </select>
<p>   <input type="submit"></p>
  </form>

  <?php
    echo $_POST["cars"];




   ?>
