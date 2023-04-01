<?php 
    if(isset($_POST['id'])) {
        $delete = new voyageController();
        $delete->delete();
    }
?>