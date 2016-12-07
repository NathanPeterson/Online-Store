<?php
  $connect = mysqli_connect("localhost", "root", "ecomsite", "store") or
  die("Please check the server connection...");

  $username = $_POST['username'];
  $email_address = $_POST['email_address'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $first_name= $_POST['first_name'];
  $middle_initial = $_POST['middle_initial'];
  $last_name = $_POST['last_name'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zipcode = $_POST['zipcode'];
  $phone_number = $_POST['phone_number'];

  $sql = "INSERT INTO customers (email_address, password, first_name, middle_initial,
  last_name, address_line1, address_line2, city, state, zipcode, country, phone_number,
  username)
  VALUES ('$email_address', (PASSWORD('$password')), '$first_name', '$middle_initial',
  '$last_name', '$address1', '$address2', '$city', '$state', '$zipcode', '$country',
  '$phone_number','$username')";

  $result = mysqli_query($connect, $sql) or die(mysql_error());

  if($result){
    ?>
    <p>
      Dear, <?php echo $first_name .' ', $middle_initial  .' ', $last_name; ?>,<br>
      Your account was successfully created.
    <?php
  }
  else{
    echo "Some error occurred. Please use different email address";
  }
 ?>
