<?php

    class trainController {
        public function getAll() {
            $trains = Train::getAll();
            return $trains;
        }

        public function getByIdTrain() {
            if(isset($_POST['id_train'])){
                $data = array(
                  'id_train' => $_POST['id_train']
                );
                
                $train = Train::getByIdTrain($data);
                return $train;
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
                redirect::to('?page=train');
              } else {
                echo $result;
              }
            }
        }
    }
?>