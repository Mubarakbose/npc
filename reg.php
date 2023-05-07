<?php
require('Connections/localhost.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // collect form data
  $firstName = $_POST['FirstName'];
  $middleName = $_POST['MiddleName'];
  $lastName = $_POST['LastName'];
  $gender = $_POST['Gender'];
  $age = $_POST['Age'];
  $address = $_POST['Address'];
  $lga = $_POST['LGA'];
  $state = $_POST['State'];
  $occupation = $_POST['Occupation'];

  // perform some basic validation
  if (
    empty($firstName) ||
    empty($lastName) ||
    empty($gender) ||
    empty($age) ||
    empty($address) ||
    empty($lga) ||
    empty($state) ||
    empty($occupation)
  ) {
    echo "<script>alert('Please fill in all required fields.');</script>";
  } else {
    // prepare SQL statement
    $sqll = "INSERT INTO public (
      FirstName, MiddleName, LastName, Gender, Age, `Address`, LGA, `State`, Occupation) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($localhost, $sqll);
    mysqli_stmt_bind_param(
      $stmt,
      'ssssissss',
      $firstName,
      $middleName,
      $lastName,
      $gender,
      $age,
      $address,
      $lga,
      $state,
      $occupation
    );

    // execute SQL statement
    if (mysqli_stmt_execute($stmt)) {
      echo "<script>alert('Registration successful.');</script>";
    } else {
      echo "<script>alert('Error saving data.');</script>";
    }

    // close statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($localhost);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
</head>

<body>
  <table width="548" border="1" align="center" style="color:#FFF;">
    <tr style="padding:20px;">
      <td width="530" height="555" style="padding:20px;">

        <fieldset>
          <h3>
            <legend>Please Enter Citizen Details</legend>
          </h3>
          <hr />

          <form action="" method="post" name="form1" id="form1">

            <table align="center">
              <tr valign="baseline">
                <td width="110" height="50" align="left" nowrap="nowrap">First Name</td>
                <td width="46">:</td>
                <td width="245">
                  <input type="text" name="FirstName" value="" class="textfield" required="required" />
                </td>
              </tr>
              <tr valign="baseline">
                <td height="47" align="left" nowrap="nowrap">Middle Name</td>
                <td>:</td>
                <td><input type="text" name="MiddleName" value="" class="textfield" required="required" /></td>
              </tr>
              <tr valign="baseline">
                <td height="52" align="left" nowrap="nowrap">Last Name</td>
                <td>:</td>
                <td><input type="text" name="LastName" value="" class="textfield" required="required" /></td>
              </tr>
              <tr valign="baseline">
                <td height="60" align="left" valign="middle" nowrap="nowrap">Gender</td>
                <td valign="middle">:</td>
                <td valign="middle">
                  <p>
                    <label>
                      <input type="radio" name="Gender" value="Male" id="Gender_0" required="required" />
                      Male</label>
                    <br />
                    <label>
                      <input type="radio" name="Gender" value="Female" id="Gender_1" required="required" />
                      Female</label>
                  </p>
                </td>
              </tr>
              <tr valign="baseline">
                <td height="45" align="left" nowrap="nowrap">Age</td>
                <td>:</td>
                <td><input type="number" name="Age" value="" class="textfield" required="required" maxlength="3" /></td>
              </tr>
              <tr valign="baseline">
                <td height="113" valign="middle" nowrap="nowrap">Address</td>
                <td valign="middle">:</td>
                <td valign="middle"><textarea name="Address" required="required" class="ta"></textarea></td>
              </tr>
              <tr valign="baseline">
                <td height="46" align="left" nowrap="nowrap">LGA</td>
                <td>:</td>
                <td>
                  <input type="text" name="LGA" value="" class="textfield" required="required" />
                </td>
              </tr>
              <tr valign="baseline">
                <td height="44" align="left" nowrap="nowrap">State</td>
                <td>:</td>
                <td><select name="State" id="State" class="sel" required="required">
                    <option selected="selected">Please Select An Option</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross River">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarwa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Osun">Osun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                    <option value="FCT">FCT</option>
                  </select>
                </td>
              </tr>
              <tr valign="baseline">
                <td height="47" align="left" nowrap="nowrap">Occupation</td>
                <td>:</td>
                <td><label for="Occupation"></label>
                  <select name="Occupation" id="Occupation" class="sel" required="required">
                    <option>Please Select An Option</option>
                    <option value="Student">Student</option>
                    <option value="Civil Servant">Civil Servant</option>
                    <option value="Business ">Business </option>
                    <option value="Judiciary">Judiciary</option>
                    <option value="Politician">Politician</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Sweeper">Cleaner</option>
                    <option value="Police">Police</option>
                    <option value="Military">Military</option>
                    <option value="Shop keeper">Shop Keeper</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Medical Doctor">Medical Doctor</option>
                    <option value="Other">Other</option>
                  </select>
                </td>
              </tr>
              <tr valign="baseline">
                <td height="72" align="right" nowrap="nowrap">&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" value="Register Citizen" class="button" /></td>
              </tr>
            </table>
          </form>
        </fieldset>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
</body>

</html>