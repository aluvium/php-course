<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
      $name="LAMP - SERVER";
      $var="<pre>"  .exec("openssl rand -hex 40"). "</pre>" ;
      $date="<pre>" .exec("date"). "</pre>" ;
      echo "<h1>Hello in ".$name." muahaaahhaha!</h1>";
      echo "<h2>My favorite number: ".$var."</h2>";
      echo "<h2>Today we have ".$date." which is lucky day</h2/>";
    ?>
  </body>
</html>
