<?php
  include('top_menu.php');
  echo "<br><br>";
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
            die("Please, check your server connection.");

  $cartamount = 0;
  $cartamount = $_POST['cartamount'];

  $_SESSION['cartamount']= $cartamount;

  if (isset($_SESSION['email_or_username'])){
    $email_or_username =$_SESSION['email_or_username'];
    echo "Welcome " . $email_or_username . ". <br/>";
  }
  if (isset($_SESSION['password'])){
    $password = $_SESSION['password'];
  }

  if ((isset($_SESSION['email_or_username']) && $_SESSION['email_or_username'] != "") ||
      (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
    $sess = session_id();
    $query="SELECT *
            FROM cart
            WHERE cart_sess = '$sess'";
    $result = mysqli_query($connect, $query) or die(mysql_error());

    if(mysqli_num_rows($result)>=1){
      echo "If you have finished Shopping ";
      echo "<a href=shipping_info.php>Click Here</a> to continue to checkout";
    }else{
      echo "You can do purchasing by selecting items from the drop down menu";
    }
  }

  else{
    ?>
    <html>
      <head>
      </head>
      <body>
        <h3>Not Logged in yet</h1>
        <p>You are currently not logged in.<br>
           You can do purchasing only if you are logged in.<br>
           If you have already registered,
           <a href="sign_in.php">click here</a>
           to login, or if would like to create an account,
           <a href="validate_sign_up_form.php">click here</a> to register.
         </p>
      </body>
    </html>
    <?php
  }
?>
