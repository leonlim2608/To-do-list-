<?php 
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODO App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>

  <div class="app">
    <h4 class="mb-3">TODO App</h4>


    <div id="addNew" data-bs-toggle="modal" data-bs-target="#form">
      <span>Add New Task</span>
      <i class="fas fa-plus"></i>
    </div>

    <!-- Modal -->
    <form class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" method="post" action = "add.php">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Task Title</p>
            <input type="text" class="form-control" name="textInput" id="textInput" required>
            <div id="msg"></div>
            <br>
            <p>Due Date</p>
            <input type="date" class="form-control" name="dateInput" id="dateInput" required>
            <br>
            <p>Description</p>
            <textarea name="textarea" class="form-control" id="textarea" cols="30" rows="5" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" value="submit" name = "submit" id="add" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
    </form>
    <!-- this is import from boothscrap -->

    <h5 class="text-center my-3">Tasks</h5>
      <div id="tasks">
        <?php

          $result = $connect->query("SELECT * FROM List ORDER BY id ");

          if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_array($result)){
              ?>

                <tr>
                  <td>
                      <div id=<?php echo $row['id']; ?>>
                        <p><?php echo $row['task_title']; ?></p >
                        <p><?php echo $row['task_date']; ?></p>
                        <p><?php echo $row['task_description']; ?></p>
                        <!-- <span class="options">
                            <?php if($row['checked']){ ?> 
                              <input type="checkbox"
                              class="checkbox"
                              value ="<?php echo $row['id']; ?>" 
                              checked />
                              <h2 class="checked"></h2>
                            <?php }else { ?>
                              <input type="checkbox"
                              value="<?php echo $row['id']; ?>"
                              class="checkbox" />
                              <h2></h2>
                              <?php } ?>
                        </span> -->
                        
                      </div>
                  </td>
                </tr>  
              <?php 
            }
          }else{
            echo 'Data Not Found!';
          }
        ?>
        </div>
      </div>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script>

 </script> 
  
</body>

</html>