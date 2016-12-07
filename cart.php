<?php
  // include('topmenu.php');
  // if (session_status() == PHP_SESSION_NONE) {
  //   session_start();
  // }
  // $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
  // die("Please, check your server connection.");
  //
  // $message = "";
  // $quantity = "";
  // $action = "";
  // $query = "";
  //
  // if (isset($_POST['quantity'])){
  //   $quantity = trim($_POST['quantity']);
  // }
  // if ($quantity==''){
  //   $quantity=1;
  // }
  // if($quantity <=0){
  //   echo "Quantity value is invalid ";
  //   echo "Go Back and enter a valid value";
  // }
  // else {
  //   if (isset($_REQUEST['icode'])) {
  //     $itemcode = $_REQUEST['icode'];
  //   }
  //   if (isset($_REQUEST['iname'])) {
  //     $item_name = $_REQUEST['iname'];
  //   }
  //   if (isset($_REQUEST['iprice'])) {
  //     $price = $_REQUEST['iprice'];
  //   }
  //   if (isset($_POST['modified_quantity'])) {
  //     $modified_quantity = $_POST['modified_quantity'];
  //   }
  //   $sess = session_id();
  //   if (isset($_REQUEST['action'])) {
  //     $action = $_REQUEST['action'];
  //   }
  //   switch ($action) {
  //     case "add":
  //       $query="SELECT *
  //               FROM cart
  //               WHERE cart_sess = '$sess' AND cart_itemcode LIKE '$itemcode'";
  //       $result = mysqli_query($connect, $query) or die(mysql_error());
  //       if(mysqli_num_rows($result)==1){
  //         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  //         $qt = $row['cart_quantity'];
  //         $qt += $quantity;
  //         $query="UPDATE cart
  //                 SET cart_quantity=$qt
  //                 WHERE cart_sess = '$sess' AND cart_itemcode LIKE '$itemcode'";
  //         $result = mysqli_query($connect, $query) or die(mysql_error());
  //       }
  // }
  //
  //
  //
  //
  //






?>
