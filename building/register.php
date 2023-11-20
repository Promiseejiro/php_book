<?php
include "./includes/header.html";
include "./includes/footer.html";
include "./includes/db.php";
//var_dump($_POST);
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword =  $_POST['confirmpassword'];
// Assuming you have already established a database connection ($conn)
if($_POST['submit']){
  try {
    $query = "INSERT INTO user (firstname, lastname, email, password, comfirmpassword, created_date) VALUES ('$firstname', '$lastname', '$email', '$password', '$confirmpassword', NOW())";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        throw new Exception(mysqli_error($conn)); // Throw an exception with the MySQL error message
    }
    var_dump($result);
} catch (Exception $e) {
    // Handle the exception (error)
    echo "Error: " . $e->getMessage(); // Output the error message
}
}else{
  
}


?>

<form action="" method="post">
  <div>
    <label>First name</label>
    <input name="firstname" type="text"/>
  </div>
  <div>
    <label>Last name</label>
    <input name="lastname" type="text"/>
  </div>
  <div>
    <label>Email</label>
    <input name="email" type="text"/>
  </div>
  <div>
    <label>Password</label>
    <input name="password" type="text"/>
  </div>
  <div>
    <label>Confirm password</label>
    <input name="confirmpassword" type="text"/>
  </div>
  <div>
    <input name="submit" value="Submit" type="Submit"/>
  </div>
</form>