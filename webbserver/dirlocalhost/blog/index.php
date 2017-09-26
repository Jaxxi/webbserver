<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>

    <?php
        include_once("data.php");
    foreach ($data as $key => $value) {

      echo "<article>
          <h1 class=\"main\">" . $value["title"] . " </h1>";

          echo "
          <h2 class=\"creator\">" . $value["author"] . "</h2>";

          echo "
          <p class=\"bordermessage\">"  . $value["message"] . "</p>


      </article>";

      }
     ?>
       </main>
  </body>
</html>
