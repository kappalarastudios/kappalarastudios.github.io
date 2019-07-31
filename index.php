<!DOCTYPE html>
<html>
<body>

<?php
// define variables and set to empty values
$email = $code = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $code = test_input($_POST["code"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3>Welcome to Kappalara Studios!</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  E-mail: <input type="text" name="email">
  <br><br>
  Code: <input type="text" name="code">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if ($code === "b7fGTT0-7J89eR") {
  echo "Correct! Link to store: <a href='https://kappalarastudios.github.io/store-b7fGTT0-7J89eR.html'>Store</a>";
} else {
  echo "Incorrect code. Please try again."
}
?>

</body>
</html>
