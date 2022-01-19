<!DOCTYPE html>
<html>

<head>
    <title>saved successfully</title>
</head>

<body>
    <center>
        <?php
          require_once "db.php";
        // Taking all 5 values from the form data(input)
          $name = mysqli_real_escape_string($conn, $_POST['name']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
          if(mysqli_query($conn, "INSERT INTO users(name, email, mobile) VALUES('$name', '$email', '$mobile')")) {
            echo "<h3>Data stored in the database successfully.</h3>";
            echo nl2br("\n$name\n $email\n $mobile\n");
          }
          else {
            echo "Error: " . mysqli_error($conn);
          }
          mysqli_close($conn);
          // Performing insert query execution
          // here our table name is college
        ?>
        <form action="index.php" method="GET">
          <input type="submit" class="btn btn-primary" value="Go Back"/>
        </form>
    </center>
</body>

</html>
