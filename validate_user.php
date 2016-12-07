<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validation</title>
    <script language="JavaScript" type="text/JavaScript">
    function updateUser(username){
      var ajaxUser = document.getElementById("userinfo");
      ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;"
                           + "<a href=\"logout.php\">Log Out</a>";
    }
    </script>
  </head>
  <body>
    <?php
    include('top_menu.php');
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    $connect = mysqli_connect("localhost", "root", "ecomsite", "store")
     or die("Please, check your server connection.");

    $query = "SELECT email_address, username, password, first_name, middle_initial, last_name
              FROM customers
              WHERE (email_address LIKE '" . $_POST['email_or_username'] .
              "' OR username LIKE  '" . $_POST['email_or_username'] ."') ".
              "AND password like (PASSWORD('" . $_POST['password'] . "'))";

    $result = mysqli_query($connect, $query) or die(mysql_error());

    if(mysqli_num_rows($result) == 1){
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        extract($row);
        echo "<br>Welcome " . $first_name . ' ' . $middle_initial . ' ' .
              $last_name . " to our Store! <br>";
        $_SESSION['email_or_username'] = $_POST['email_or_username'];
        $_SESSION['password'] = $_POST['password'];
        echo "<SCRIPT LANGUAGE=\"JavaScript\">updateUser('$username');
        </SCRIPT>";
      }
    }
    else{
      ?>
      <p>
      Invalid Email/Username and/or Password<br>
      Not registered?
      <a href="validate_sign_up_form.php">Click here</a> to register.<br><br><br>
      Want to Try again?<br>
      <a href="sign_in.php">Click here</a> to try login again.<br>
      <?php
    }
    ?>
  </body>
</html>
