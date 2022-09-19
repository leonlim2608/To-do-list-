<?php

if(isset($_POST['submit'])){
  $connect = mysqli_connect("localhost", "root", "", "to_do_list_1");

  $task_title = $_POST["textInput"];
  $task_date = $_POST["dateInput"];
  $task_description = $_POST["textarea"];
  
  $query = "INSERT INTO List(task_title, task_date,task_description) VALUES ('$task_title', '$task_date','$task_description') ";  
  
  $result = mysqli_query($connect, $query);
  $result2 = mysqli_query($connect, $query2);
    
  if($result) 
    {
      $message = "Data insert";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('Location: index.php');
  }else{
      $message = "Insert failed";
      echo "<script type='text/javascript'>alert('$message');</script>";
      // header('Location: index.php');
  }
  
}else {
  header('Location: index.php');
}

?>
