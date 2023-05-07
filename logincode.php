<?php
require('Connections/localhost.php');
// start the session
//session_start();
$Username = $Password = '';
$Username_err = $Password_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (empty(trim($_POST['Username']))) {
    $Username_err = 'Please enter Username.';
  } else {
    $Username = trim($_POST['Username']);
  }

  if (empty(trim($_POST['Password']))) {
    $Password_err = 'Please enter your Password.';
  } else {
    $Password = trim($_POST['Password']);
  }

  if (empty($Username_err) && empty($Password_err)) {
    $sql = "SELECT Username, `Password` FROM staff WHERE Username = ?";

    if ($stmt = mysqli_prepare($localhost, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_Username);
      $param_Username = $Username;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $Username, $password_localhost);

          if (mysqli_stmt_fetch($stmt)) {
            if ($Password == $password_localhost) {
              session_start();
              $_SESSION['Username'] = $Username;
              header("location: index.php");
            } else {
              $Password_err = 'The Password you entered is not valid.';
            }
          }
        } else {
          $Username_err = 'No account found with that Username.';
        }
      } else {
        echo 'Oops! Something went wrong. Please try again later.';
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($localhost);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Home</title>

  <style type="text/css">
    .textfield {
      width: 200px;
      height: 20px;
      background-color: #fff;
      padding: 4px;
      border-color: #000;
      font-family: Georgia, "Times New Roman", Times, serif;
      font-size: 14px;
    }

    .textfield:focus {
      background-color: #FCF;
      border-color: #fff;
    }

    .button {
      padding: 10px;
      background-color: #060;
      color: #FFF;
      font-family: Georgia, "Times New Roman", Times, serif;
      font-size: 14px;
      width: 100px
    }

    .button:hover {
      background-color: #0F0;
      color: #FFF;
      transition-duration: 0.5s;
      border-radius: 6px;
    }
  </style>
</head>

<body>

  <table width="498" border="1" align="center" cellpadding="4" cellspacing="4">
    <tr>
      <td width="478" height="318">
        <fieldset>
          <legend><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Valid Username and Password</strong></legend>
          <p>&nbsp;</p>
          <form id="login" name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <table width="357" align="center" cellpadding="4" cellspacing="4">
              <tr>
                <td width="127" height="47" style="color:#ccc;">
                  <label for="Username">Username</label>
                </td>
                <td width="6">:</td>
                <td width="182">
                  <input type="text" name="Username" class="textfield" id="Username" value="<?php echo $Username; ?>">
                  <?php if (isset($Username_err)) {
                    echo "<span style='color:red;'>$Username_err</span>";
                  } ?>
                </td>
              </tr>
              <tr>
                <td height="42" style="color:#ccc;">
                  <label for="Password">Password</label>
                </td>
                <td>:</td>
                <td>
                  <input type="Password" name="Password" class="textfield" id="Password" />
                  <?php if (isset($Password_err)) {
                    echo "<span style='color:red;'>$Password_err</span>";
                  } ?>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input name="submit" type="submit" class="button" id="submit" value="Login" /></td>
              </tr>
            </table>
          </form>
        </fieldset>
      </td>
    </tr>
  </table>

</body>

</html>