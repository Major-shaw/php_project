<?php
// require_once "db.php";

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

  if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $name_error = "Name must contain only alphabets and space";
  }

  if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $email_error = "Please Enter Valid Email ID";
  }

  if(strlen($mobile) < 10) {
    $mobile_error = "Mobile number must be minimum of 10 characters";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-offset-2">
          <div class="page-header">
          <h2>Contact Us</h2>
          </div>
          <p>All Fields are required</p>
          <form action="saved.php" method="post">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="" maxlength="50" required="true">
              <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
            </div>

            <div class="form-group ">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="" maxlength="30" required="true">
              <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
            </div>

            <div class="form-group">
              <label>Mobile</label>
              <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="true">
              <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
