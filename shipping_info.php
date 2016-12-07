<?php
  include('top_menu.php');
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (isset($_SESSION['cartamount'])){
    $cartamount=$_SESSION['cartamount'];
  }

  $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
             die("Please, check your server connection.");

  $email_or_username="";

  if (isset($_SESSION['email_or_username'])){
    $email_or_username=$_SESSION['email_or_username'];
  }
  if (isset($_SESSION['password'])){
    $password=$_SESSION['password'];
  }

  if ((isset($_SESSION['email_or_username']) && $_SESSION['email_or_username'] != "") ||
      (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
    $query = "SELECT *
              FROM customer
              WHERE email_address LIKE '$email_or_username'
                OR username LIKE  '$email_or_username'
                AND password LIKE (PASSWORD('$password'))";

    $results = mysqli_query($connect, $query) or die(mysql_error());
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    extract($row);
  ?>

  <form action="purchase.php" method="post">
    <table border="0" cellspacing="1" cellpadding="3">
      <tr>
        <td colspan="2" align="center">Your information available with us:</td>
      </tr>
      <tr>
        <td>Username:</td>
        <td><?php echo $username; ?></td>
      </tr>
      <tr>
        <td>Email Address:</td>
        <td><?php echo $email_address; ?></td>
      </tr>
      <tr>
        <td>First Name: </td>
        <td><?php echo $first_name; ?></td>
      </tr>
      <tr>
        <td>middle_initial: </td>
        <td><?php echo $middle_initial; ?></td>
      </tr>
      <tr>
        <td>Last Name: </td>
        <td><?php echo $last_name; ?></td>
      </tr>
      <tr>
        <td>Address: </td>
        <td><?php echo $address_line1; ?></td>
      </tr>
      <tr>
        <td></td>
        <td><?php echo $address_line2; ?></td>
      </tr>
      <tr>
        <td>City: </td>
        <td><?php echo $city; ?></td>
      </tr>
      <tr>
        <td>State: </td>
        <td><?php echo $state; ?></td>
      </tr>
      <tr>
        <td>Country: </td>
        <td><?php echo $country; ?></td>
      </tr>
      <tr>
        <td>Zip Code: </td>
        <td><?php echo $zipcode; ?></td>
      </tr>
      <tr>
        <td>Phone No: </td>
        <td><?php echo $phone_number; ?></td>
      </tr>

      <tr>
        <td colspan=2 align="center"><br><br>Please update shipping information if
                                    different from the shown below: </td>
      </tr>
      <tr>
        <td> Address to deliver at: </td>
        <td><input type="text" size="80" name="shipping_address_line1" value="<?php echo $address_line1; ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="text" size="80" name="shipping_address_line2" value="<?php echo $address_line2; ?>"></td>
      </tr>
      <tr>
        <td> City: </td>
        <td><input size="30" type="text" name="shipping_city" value="<?php echo $city; ?>"></td>
      </tr>
      <tr>
        <td> State: </td>
        <td><input size="30" type="text" name="shipping_state" value="<?php echo $state; ?>"></td>
      </tr>
      <tr>
        <td> Country: </td>
        <td><input size="30" type="text" name="shipping_country" value="<?php echo $country; ?>"></td>
      </tr>
      <tr>
        <td> Zip Code: </td>
        <td><input type="text" size="20" name="shipping_zipcode" value="<?php echo $zipcode; ?>"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" value="Supply Payment Information"></td>
        <td>
          <input type="reset" value="Cancel"></td>
      </tr>
    </table>
  </form>
<?php
}
?>
