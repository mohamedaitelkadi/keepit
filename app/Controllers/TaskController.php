<?php
class TaskController extends task {
    
    public function index()
    {
        if(!isset($_SESSION['id_user'])){
            header("location:http://localhost/user/loginUser");
        }
        else{
        if(isset($_POST['update'])){
            $id = $_POST['id_task'];
            $taskname = $_POST['task_name'];
            $dead_line = $_POST['dead_line'];
            $type = $_POST['tasktype'];
            $this->editTask($taskname,$dead_line,$type,$id);
        }
        $data['datas'] = $this->getTask();
        $data['todo_stats']=$this->stats_todo();
        $data['doing_stats']=$this->stats_doing();
        $data['done_stats']=$this->stats_done();
        view::load('taskboard',$data);
    }
}


    public function Add()
    {
        if(isset($_POST['add'])){
            $taskname = $_POST['task_name'];
            $dead_line = $_POST['dead_line'];
            if(empty($taskname)&&empty($dead_line)){
                header("location:http://localhost/task");
            }else{
                $this->addTask($taskname,$dead_line);
                header("location:http://localhost/task");
            }
        }
        view::load('taskboard');
    }

    public function Delete($id)
    {
        $this->remove($id);
        header("location:http://localhost/task");
    }



    public function multiple(){
            if(isset($_POST['addmulti'])){
                $inputlength = $_POST['num_task'];
                $i = 1;
                while($i <= $inputlength){
                    $taskname = $_POST['task_name'.$i];
                    $dead_line = $_POST['dead_line'.$i];
                    if(empty($taskname)&&empty($dead_line)){
                        header("location:http://localhost/task");
                    }else{
                       $this->addTask($taskname,$dead_line);   
                    }
                    $i++; 
                }
                header("location:http://localhost/task");
            }
            $data['datas'] = $this->getTask();
            view::load('taskboard',$data);
        } 

        public function search()
        {
            if(isset($_POST['search'])){
                $search_for = $_POST['search_for'];
                $data['datas'] = $this->lookFor($search_for);
                $data['todo_stats']=$this->stats_todo();
                $data['doing_stats']=$this->stats_doing();
                $data['done_stats']=$this->stats_done();
            }
            view::load('taskboard',$data);
        } 
}