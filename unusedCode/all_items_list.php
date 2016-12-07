<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Items</title>
  </head>
  <body>
    <?php
      $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
      die("Please, check your server connection.");

      $query = "SELECT item_code, item_name, description, imagename, price FROM products";
      $results = mysqli_query($connect, $query) or die(mysql_error());

      echo "<table border =\"0\">";
      $index = 1;
      echo "<tr>";
      while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){

        //Display 3 rows.
        if($index > 3){
          $index = 1;
          echo "</tr><tr>";
        }

        extract($row);
        echo "<td style =\"padding-right:15px;\">";
        echo "<a href = itemdetails.php?itemcode = $item_code>";
        echo '<img src = '. $imagename .' style ="max-width:220px; max-height:240px;
              width:auto; height:auto;"></img><br/>';
        echo $item_name .'<br/>';
        echo "</a>";
        echo '$'. $price .'<br/>';
        echo "</td>";

        $index += 1;


      }
      echo "</table>";
     ?>
  </body>
</html>
