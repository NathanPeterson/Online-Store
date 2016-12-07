<?php
  include('top_menu.php');
  $connect =mysqli_connect("localhost", "root", "ecomsite", "store") or
  die("Please, check your server connection.");

  $category=$_REQUEST['category'];
  $query = "SELECT item_code, item_name, imagename, price
            FROM products
            WHERE category LIKE '$category' ORDER BY item_code";
  $results = mysqli_query($connect, $query) or die(mysql_error());
  echo "<table border=\"0\">";
  $index=1;
  echo "<br><tr>";

  while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    if ($index > 3){
      $index=1;
      echo "</tr><tr>";
    }

    extract($row);
    echo "<td style=\"padding-right:15px;\">";
    echo "<a href=item_details.php?itemcode=$item_code>";
    echo '<img src=' . $imagename . ' style="max-width:220px;
                                            max-height:240px;
                                            width:auto;
                                            height:auto;">
          </img><br/>';
    echo $item_name .'<br/>';
    echo "</a>";
    echo '$'.$price .'<br/>';
    echo "</td>";

    $index += 1;
  }
  echo "</table>";
?>
