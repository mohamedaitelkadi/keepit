<div class="modal fade" id="edit_form<?php echo $data['id_task']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">edit task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php BURL ?>/task/edit" method="POST">
                <div class="form-group">
                  <input type="hidden" value="<?php $data['id_task']?>">  
                  <label >Task name</label>
                  <input type="text" name="task_name" class="form-control" placeholder="task name" value="<?php $data['name_task']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Dead line</label>
                  <input type="date" name="dead_line" class="form-control" value="<?php $data['dead_line']?>">
                </div>
                  <select name="tasktype" value="<?php $data['type_task']?>"> 
                  <option value="TO DO" default>TO DO</option>
                  <option value="DOING">DOING</option>
                  <option value="DONE">DONE</option>
                  </select>
              
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
