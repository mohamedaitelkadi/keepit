

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css?=v">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
      <?php include 'navbar.php' ?>
    <section>
      <center>
        <h1>Keepit</h1>
        <h2><?php  echo $_SESSION['first_name'] ?></h2>
        
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    add new task
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#multiple">
    add multiple tasks
  </button>
  <!-- Modal add-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">New task to do</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php BURL ?>/task/add" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Task name</label>
                  <input type="text" name="task_name" class="form-control" placeholder="task name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Dead line</label>
                  <input id="add_date"  type="date" name="dead_line" class="form-control">
                </div>
                 
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </form>
  </div>
  <!-- Modal multiple -->
  <div class="modal fade" id="multiple" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">New task to do</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php BURL ?>/task/multiple" method="POST">
              <div>
                  <label>Tasks number</label>
                  <input type="number" class="num_task" name="num_task" value="0" min="0" max="10">
                </div>
                
        <div class="taskplus"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addmulti" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </form>
  </div>

        <div class="container text-center">
            <div class="row d-flex justify-content-around mt-4">
                <div class="card bg-light text-darky mb-3" id="ob" style="max-width: 18rem;">
                
                    <div  class="card-header ">TO DO(<?php echo $todo_stats?>)</div>
                    <?php foreach($datas as $data) {
                      if($data['type_task'] == "TO DO"){ ?>
                    <div class="card-body ">
                       
                        <div class="todo-tasks" >
                            <div>
                              <input type="hidden" class="id_task" value="<?php echo $data['id_task']?>">
                              <p class="taskname"><?php echo $data['name_task']?></p>
                              <p>dead line : <span class="date"><?php echo $data['dead_line']?></span> </p>
                              <p style="display:none" class="type_task"><?php echo $data['type_task']?></p>
                            </div>
                            <div>
                              <i class="bi bi-pen-fill" data-bs-toggle="modal" data-bs-target="#edit_form"></i>
                              <a href="../task/delete/<?= $data['id_task']?>"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <?php }
                    } ?>
                </div>
                  <div class="card bg-light text-darky mb-3" style="max-width: 18rem;" >
                    <div class="card-header">DOING(<?php echo $doing_stats?>)</div>
                    <?php foreach($datas as $data) {
                      if($data['type_task'] == "DOING"){ ?>
                    <div class="card-body">
                        <div class="doing-tasks" id="1" >
                            <div>
                            <input type="hidden" class="id_task" value="<?php echo $data['id_task']?>">
                              <p class="taskname"><?php echo $data['name_task']?></p>
                              <p>dead line : <span class="date"><?php echo $data['dead_line']?></span> </p>
                              <p style="display:none" class="type_task"><?php echo $data['type_task']?></p>
                            </div>
                            
                            <div>
                            <i class="bi bi-pen-fill" data-bs-toggle="modal" data-bs-target="#edit_form"></i>
                              <a href="../task/delete/<?= $data['id_task']?>"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        
                        </div>
                        
                    </div>
                    <?php } 
                    }?>
                  </div>
                      
                
                  <div class="card bg-light text-darky mb-3" style="max-width: 18rem;">
                    <div class="card-header">DONE(<?php echo $done_stats?>)</div>
                    <?php foreach($datas as $data) {
                      if($data['type_task'] == "DONE"){ ?>
                    <div class="card-body">
                        <div class="done-tasks" >
                          <div>
                          <input type="hidden" class="id_task" value="<?php echo $data['id_task']?>">
                            <p class="taskname"><?php echo $data['name_task']?></p>
                            <p>dead line : <span class="date"><?php echo $data['dead_line']?></span> </p>
                            <p style="display:none" class="type_task"><?php echo $data['type_task']?></p>
                          </div>
                          <div>
                          <i class="bi bi-pen-fill" data-bs-toggle="modal" data-bs-target="#edit_form"></i>
                            <a href="../task/delete/<?= $data['id_task']?>"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </div>
                        
                    </div>
                    <?php }
                    } ?>
                  </div>
            </div>
        <!-- update modal  -->
<div class="modal fade" id="edit_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">edit task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php BURL ?>/task" method="POST">
                <input type="hidden" name="id_task" id="edit_task_id" required>    
                <div class="form-group">  
                  <label >Task name</label>
                  <input type="text" name="task_name" id="task_name" placeholder="task name" >
                </div>
                <div class="form-group">
                  <label>Dead line</label>
                  <input type="date" name="dead_line" id="dead_line" >
                </div>
                  <select name="tasktype" id="task_type" required> 
                  <option value="TO DO" default>TO DO</option>
                  <option value="DOING">DOING</option>
                  <option value="DONE">DONE</option>
                  </select>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="update" class="btn btn-primary">update</button>
        </div>
      </div>
    </div>
  </form>
  </div>
            
        
          </center>
    </section>

    <?php include 'footer.php'?>




    <script src="/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
  </body>
</html>