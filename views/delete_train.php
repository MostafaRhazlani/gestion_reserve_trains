<?php 
    if(isset($_POST['id_train'])){
        $deleteTrain = new trainController();
        $deleteTrain->delete();
    }
?>