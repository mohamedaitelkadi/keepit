var id_task_put = document.getElementById('edit_task_id');
var name_task_put = document.getElementById('task_name');
var deadline_task_put = document.getElementById('dead_line');
var type_task_put = document.getElementById('task_type');
var type_date_add = document.getElementById('add_date');





var edit = document.getElementsByClassName('bi-pen-fill');
for(let i = 0;i<edit.length;i++){
    edit[i].addEventListener("click",update)
}
function update(event){
    let idv = event.target.parentElement.parentElement.querySelector('.id_task') ;
    id_task_put.value = idv.value;

    let namev = event.target.parentElement.parentElement.querySelector('.taskname') ;
    name_task_put.value = namev.innerHTML;

    let deadlinev = event.target.parentElement.parentElement.querySelector('.date') ;
    deadline_task_put.value = deadlinev.innerHTML;

    let typev = event.target.parentElement.parentElement.querySelector('.type_task') ;
    type_task_put.value = typev.innerHTML;

 }



let input = document.querySelector('.num_task');
let continv = document.querySelector('.taskplus');
input.addEventListener('input',()=>{
    continv.innerHTML= "";
    let number =  input.value;
    if(number > 0 ){
        let i = 1;
        while(i <= number){
            continv.innerHTML+=`
            <div class="modal-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Task name</label>
                  <input type="text" name="task_name${i}" class="form-control" placeholder="task name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Dead line</label>
                  <input type="date" name="dead_line${i}" class="form-control">
                </div>
            `;
            i++;
        }
    }
})



// date :::::
deadline_task_put.min = new Date().toISOString().split("T")[0];
type_date_add.min = new Date().toISOString().split("T")[0];
type_date_multi.min = new Date().toISOString().split("T")[0];
