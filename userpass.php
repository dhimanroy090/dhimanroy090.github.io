<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['pass'];
 echo "Posted";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "user";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) {
    die("Sorry, we could't connect it :" . mysqli_connect_error());
  } else {
    $sql = "INSERT INTO `user` (`email`, `pass`) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

      echo "Posted Succesfully";
    }
  }
  echo "not posted";
}


?>

