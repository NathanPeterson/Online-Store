<?php include('top_menu.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
  </head>
  <body>
    <br>
    <form action="validate_user.php" method="post">
      <table border ="0" cellspacing="1" cellpadding="3">
        <tr>
          <td>Email Address/Username: </td>
          <td><input type="text" name="email_or_username"></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td colspan=2 align="center">
            <input type="submit" name="submit" value="Login">
          </td>
        </tr>
      </table>
    </form>

  </body>
</html>
