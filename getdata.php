<?php
$conn = new mysqli("localhost", "root", "", "crimoson");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['seltime']))
{

  $sql = "INSERT INTO time_table (Disabled_time)
  VALUES ('".$_POST['seltime']."')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  }

}

?>