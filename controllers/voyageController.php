<?php

    class voyageController {

        public function getAll() {
            $voyages = Voyage::getAll();
            return $voyages;
        }

        public function getById(){
            if(isset($_POST['id'])){
              $data = array(
                'id' => $_POST['id']
              );
              
              $voyage = Voyage::getById($data);
              return $voyage;
            }
        }

        public function update() {

          if(isset($_POST['submit'])) {
            $data = array(
              'id_voyage' => $_POST['id_voyage'],
              'departure_s' => strtoupper($_POST['departure_s']),
              'arrival_s' => strtoupper($_POST['arrival_s']),
              'date_departure' => $_POST['date_departure'],
              'date_arrival' => $_POST['date_arrival'],
              'prix' => $_POST['prix'],
              'id_train' => $_POST['id_train'],
            );

            $voyage = Voyage::getByIdTrian($data['id_voyage'], $data['id_train']);

            if($voyage == true){
              session::set('info', 'there is a voyage in the same train');
              redirect::to('?page=voyage');
              return;
            }
            
            $result = Voyage::update($data);
            if($result === 'ok') {
              session::set('success', 'The flight has been updated successfully');
              redirect::to('?page=voyage');
            } else {
              echo $result;
            }
          }
        }

        public function addVoyage() {
          if(isset($_POST['submit'])) {
            $data = array(
              'departure_s' => strtoupper($_POST['departure_s']),
              'arrival_s' => strtoupper($_POST['arrival_s']),
              'date_departure' => $_POST['date_departure'],
              'date_arrival' => $_POST['date_arrival'],
              'prix' => $_POST['prix'],
              'id_train' => $_POST['id_train'],
            );

            $voyage = Voyage::getByIdTrian(null, $data['id_train']);

            if($voyage == true){
              session::set('info', 'there is a voyage in the same train');
              redirect::to('?page=add_voyage');
              return;
            }

            $result = voyage::add($data);
            if($result === 'ok') {
              session::set('success', 'Employé Ajouté');
              redirect::to('?page=voyage');
            } else {
              echo $result;
            }
          }
        }

        public function delete() {
          if(isset($_POST['id'])) {
            $data['id'] = $_POST['id'];

            $result = Voyage::delete($data);

            if($result === 'ok') {
              session::set('success', 'The flight has been deleted successfully');
              redirect::to('?page=voyage');
            } else {
              return $result;
            }

          }
        }
    }

?>