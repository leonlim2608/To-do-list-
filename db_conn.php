<?php
$connect = mysqli_connect("localhost", "root", "", "to_do_list_1");

// If no connection than Print error
if (mysqli_connect_errno())
  {
      echo "No Active DB Connection Please check: " . mysqli_connect_error();
  }

$sql = "CREATE TABLE List (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task_title VARCHAR(30) NOT NULL,
    task_date DATE  NOT NULL,
    task_description VARCHAR(50) NOT NULL,
    checked VARCHAR(50) NOT NULL
)";

if($connect->query($sql) === TRUE){
  $connect->close();
};
?>