<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ball State Online Store</title>
    <link rel="stylesheet" href="css/syle.css">
    <script language="JavaScript" type="text/JavaScript">
    function updateUser(username){
      var ajaxUser = document.getElementById("userinfo");
      ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;"
                           + "<a href=\"logout.php\">Log Out</a>";
    }
    </script>
  </head>
  <body>
  <table width="100%" cellspacing="0" cellpadding="2">
  <col style="width:30%">
  <col style="width:40%">
  <col style="width:20%">

    <tr>
      <td style="background-color:red;color:black;"></td>
      <td style="background-color:red;color:black;"></td>
      <td style="background-color:red;color:black;">
        <?php
          if(session_status() == PHP_SESSION_NONE){
            session_start();
          }
          echo "<span id=\"userinfo\"><a href=\"sign_in.php\">Login</a>&nbsp;&nbsp;
          &nbsp;<a href=\"validate_sign_up_form.php\">Signup</a></span></td></tr>";
          if(isset($_SESSION['email_or_username'])){
            $user_name=$_SESSION['email_or_username'];
            echo "<SCRIPT LANGUAGE=\"JavaScript\">updateUser('$user_name');</SCRIPT>";
          }
       ?></td>
    </tr>
    <tr>
      <td style="font-size: 35px;color:black;background-color:red;">
        <font><b>Ball State Store</b></font>
      </td>
      <td bgcolor="red">
        <form method="post" action="search_items.php">
          <input size="30" type="text" name="toSearch">
          <input type="submit" name="submit" value="Search">
        </form>
      </td>
      <td bgcolor="red" >
        <a href="cart.php">
          <img style="max-width:40px;
                      max-height:40px;
                      width:auto;
                      height:auto;"
                      src="images/cart.png">
          </img>
          <span id="cartcountinfo"></span>
        </a>
      </td>
    </tr>
  </table>
    <div class="container">
      <nav>
        <ul class = "nav">
          <li><a href="index.php">Home</a></li>

          <li class = "dropdown">
            <a href="index.php">Electronics</a>
            <ul>
              <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
              <li><a href="itemlist.php?category=Laptop">Laptops</a></li>
              <li><a href="itemlist.php">Cameras</a></li>
              <li><a href="itemlist.php">Televisions</a></li>
            </ul>
          </li>

          <li class = "dropdown">
            <a href="index.php">Home / Furniture</a>
            <ul class = "large">
              <li><a href="index.php">Kitchen Essentials</a></li>
              <li><a href="index.php">Bath Essentials</a></li>
              <li><a href="index.php">Furniture</a></li>
              <li><a href="index.php">Dining / Serving</a></li>
              <li><a href="index.php">Cookware</a></li>
            </ul>
          </li>

          <li><a href="index.php">Books</a></li>
        </ul>
      </nav>
    </div>
  </body>
</html>
