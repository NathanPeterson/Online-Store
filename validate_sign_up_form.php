<?php include('top_menu.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script language="JavaScript" type="text/javascript" src="check_form.js">
    </script>
    <title>Sign Up!</title>
  </head>
  <body>
    <br><br><br>
    <form action="add_customer.php" method="post" onsubmit="return validate(this);">
      <table border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td colspan="2" align="center">Enter your Personal Information:<br><br></td>
        </tr>
        <tr>
          <td> Username: </td>
          <td><input type="text" size="20" name="username">
          <span id="usernamemsg"></span></td>
        </tr>
        <tr>
          <td> Email Address: </td>
          <td><input type="text" size="20" name="email_address">
          <span id="emailmsg"></span></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="password" size="20" name="password">
          <span id="passwdmsg"></span></td>
        </tr>
        <tr>
          <td> ReType Password: </td>
          <td> <input type="password" name="repassword" size="20">
          <span id="repasswdmsg"></span></td>
        </tr>
        <tr>
          <td>First Name: </td>
          <td><input type="text" name="first_name" size="25">
          <span id="fusrmsg"></span></td>
        </tr>
        <tr>
          <td> Middle Initial: </td>
          <td><input type="text" name="middle_initial" size="1">
          <span id="musrmsg"></span></td>
        </tr>
        <tr>
          <td> Last Name: </td>
          <td><input type="text" name="last_name" size="25">
          <span id="lusrmsg"></span></td>
        </tr>

        <tr>
          <td>Address: </td>
          <td><input type="text" name="address1" size="80"> </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="text" name="address2" size="80"> </td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input type="text" name="city" size="30"> </td>
        </tr>
        <tr>
          <td>State: </td>
          <td><input type="text" name="state" size="30"> </td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input type="text" name="country" size="30"> </td>
        </tr>
        <tr>
          <td>Zip Code: </td>
          <td><input type="text" name="zipcode" size="20"> </td>
        </tr>
        <tr>
          <td>Phone Number: </td>
          <td><input type="text" name="phone_number" size="30"> </td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
          <td><input type="reset" value="Cancel"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
