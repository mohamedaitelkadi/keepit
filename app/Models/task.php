<?php 
// require (MODELS."/connexion.php");
class task extends user {
    public function getTask(){
        $us = $_SESSION['id_user'];
        $sql = " SELECT * FROM task AS T JOIN user AS U ON T.id_user = U.id_user WHERE U.id_user = $us ORDER BY dead_line ASC ";
        $req = mysqli_query($this->connect(),$sql);
        // var_dump( $req);
        // die;
        return $req;
    }
    public function addTask($taskname,$dead_line){
        $us = $_SESSION['id_user'];
        $sql = "INSERT INTO task (name_task,dead_line,id_user) VALUE('$taskname','$dead_line',$us)";
        $req = mysqli_query($this->connect(),$sql);
    }

    public function remove($id){
        $sql = "DELETE FROM task WHERE id_task = $id";
        $req = mysqli_query($this->connect(),$sql);
    }


    public function editTask($taskname,$dead_line,$type,$id)
    {
        $sql = "UPDATE task SET name_task ='$taskname',dead_line='$dead_line',type_task='$type'
        WHERE id_task = $id ";
        $req = mysqli_query($this->connect(),$sql);
    }

    public function lookFor($search_for)
    {
        $us = $_SESSION['id_user'];
        $sql = " SELECT * FROM task WHERE name_task LIKE '%$search_for%' AND id_user = '$us' ";
        $req = mysqli_query($this->connect(),$sql);
        return $req;
    }

    public function stats_todo(){
        $us = $_SESSION['id_user'];
        $sql = "SELECT * FROM task WHERE type_task = 'TO DO' && id_user = '$us' ";
        $result = $this->connect()->query($sql);
        $result = mysqli_num_rows($result);
        return $result;
    }
    public function stats_doing(){
        $us = $_SESSION['id_user'];
        $sql = "SELECT * FROM task WHERE type_task = 'DOING' && id_user = '$us' ";
        $result = $this->connect()->query($sql);
        $result = mysqli_num_rows($result);
        return $result;

    }
    public function stats_done(){
        $us = $_SESSION['id_user'];
        $sql = "SELECT * FROM task WHERE type_task = 'DONE' && id_user = '$us' ";
        $result = $this->connect()->query($sql);
        $result = mysqli_num_rows($result);
        return $result;

    }
    
}