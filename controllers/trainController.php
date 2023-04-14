<?php

    class trainController {

        static public function index() {
          $trains = Train::getAll();
          include('./views/page/train/index.php');
        }

        public function create() {
          $trains = trainController::store();        
          include('./views/page/train/add.php');
        }

        public function store() {
          if(isset($_POST['submit'])) {
            $data = array(
              'name_train' => strtoupper($_POST['name_train']),
              'photo' => $_FILES['photo']['name'],
              'capacity' => $_POST['capacity'],
            );

            $imageTmp = $_FILES['photo']['tmp_name'];
            $uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/mostafa/gestion_reserve_train/public/images/" . $data['photo'];
              
            move_uploaded_file($imageTmp, $uploadfile);

            $result = Train::store($data);
            if($result === 'ok') {
              session::set('success', 'Employé Ajouté');
              redirect::to(BASE_URL.'train');

            } else {
              echo $result;
            }
          }
        }

        public function edit() {
          if(isset($_POST['id_train'])){
              $data = array(
                'id_train' => $_POST['id_train']
              );
              
              $trains = Train::getByIdTrain($data);
              include('./views/page/train/edit.php');
          }
        }

        public function update() {

          if(isset($_POST['submit'])) {
            $data = array(
              'id_train' => $_POST['id_train'],
              'name_train' => strtoupper($_POST['name_train']),
              'photo' => $_FILES['photo']['name'],
              'capacity' => $_POST['capacity'],
            );

            $imageTmp = $_FILES['photo']['tmp_name'];
            $uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/mostafa/gestion_reserve_train/public/images/" . $data['photo'];
            
            move_uploaded_file($imageTmp, $uploadfile);
            
            
            $result = Train::update($data);
            if($result === 'ok') {
              session::set('success', 'The flight has been updated successfully');
              redirect::to(BASE_URL.'train');
            } else {
              echo $result;
            }
          }
        }
        
        public function delete() {
          if(isset($_POST['id_train'])) {
            $data['id_train'] = $_POST['id_train'];
            $result = Train::delete($data);

            if($result === 'ok') {
              session::set('success', 'The flight has been deleted successfully');
              redirect::to(BASE_URL.'train');
            } else {
              return $result;
            }

          }
        }
    }
?>