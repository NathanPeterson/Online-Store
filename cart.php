<?php
  include('top_menu.php');
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  echo "<br><br><br>";
  $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
             die("Please, check your server connection");
  $message = "";
  $quantity = "";
  $action = "";
  $query = "";

  if(isset($_POST['quantity'])){
    $quantity = trim($_POST['quantity']);
  }
  if($quantity ==''){
    $quantity = 1;
  }

  if($quantity <= 0){
    echo "Quantity value is invaild<br>";
    echo "Go Back and enter a valid value";
  }else{

    if(isset($_REQUEST['icode'])){
      $item_code = $_REQUEST['icode'];
    }
    if(isset($_REQUEST['iname'])){
      $item_name = $_REQUEST['iname'];
    }
    if(isset($_REQUEST['iprice'])){
      $price = $_REQUEST['iprice'];
    }
    if(isset($_REQUEST['modified_quantity'])){
      $modified_quantity = $_REQUEST['modified_quantity'];
    }

    $sess = session_id();

    if(isset($_REQUEST['action'])){
      $action = $_REQUEST['action'];
    }

    switch($action){
      case "add":
        $query = "SELECT *
                  FROM cart
                  WHERE cart_sess = '$sess' AND cart_itemcode = '$item_code'";
        $result = mysqli_query($connect, $query) or die(mysql_error());
        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $qt += $quantity;
          $query = "UPDATE cart
                    SET cart_quantity = $qt
                    WHERE cart_sess = '$sess' AND cart_itemcode = '$item_code'";
          $result = mysqli_query($connect, $query) or die(mysql_error());
        }else{
          $query = "INSERT INTO cart (cart_sess, cart_quantity, cart_itemcode, cart_item_name, cart_price)
                    VALUES ('$sess', '$quantity', '$item_code', '$item_name', $price)";
          $message = "<div align=\"center\"><strong>Item added.</strong></div>";
        }
        break;

      case "change":
        if($modified_quantity == 0){
          $query ="DELETE
                   FROM cart
                   WHERE cart_sess = '$sess' AND cart_itemcode = '$item_code'";
          $message = "<div style=\"width:200px; margin:auto;\">Item deleted</div>";
        }else{
          if($modified_quantity < 0){
            echo "<div style=\"width:200px; margin:auto;\">Invalid quantity entered</div>";
          }else{
            $query = "UPDATE cart
                      SET cart_quantity = $modified_quantity
                      WHERE cart_sess = '$sess' AND cart_itemcode = '$item_code'";
          $message = "<div style=\"width:200px; margin:auto;\">Quantity changed</div>";
          }
        }
        break;

      case "delete":
        $query = "DELETE
                  FROM cart
                  WHERE cart_sess = '$sess' AND cart_itemcode = '$item_code'";
        $results = mysqli_query($connect, $query) or die(mysql_error());
        $message = "<div style=\"width:200px; margin:auto;\">Item deleted</div>";
        break;

      case "empty":
        $query = "DELETE
                  FROM cart
                  WHERE cart_sess = '$sess'";
        break;
    }

    if($query !=""){
      $results = mysqli_query($connect, $query) or die(mysql_error());
      echo $message;
    }
    include('show_cart.php');
    echo "<SCRIPT LANGUAGE=\"JavaScript\">updateCart();</SCRIPT>";
  }
 ?>
