<?php

    class voyageController {

      public function index() {
        $voyages = Voyage::getAll();
        include('./views/page/voyage/index.php');
      }

      public function create() {
        $trains = Train::getAll();
        $newVoyage = voyageController::store();
        include('./views/page/voyage/add.php');
      }

      public function store() {
        if(isset($_POST['submit'])) {
          $data = array(
            'departure_s' => strtoupper($_POST['departure_s']),
            'arrival_s' => strtoupper($_POST['arrival_s']),
            'date_departure' => $_POST['date_departure'],
            'date_arrival' => $_POST['date_arrival'],
            'prix' => $_POST['prix'],
            'id_train' => $_POST['id_train'],
          );
          $voyage = Voyage::getByIdTrain(null, $data['id_train']);

          if($voyage == true){
            session::set('info', 'there is a voyage in the same train');
            redirect::to(BASE_URL.'voyage/');
            return;
          }

          $result = voyage::add($data);
          if($result === 'ok') {
            session::set('success', 'Employé Ajouté');
            redirect::to(BASE_URL.'voyage/');

          } else {
            echo $result;
          }
        }
      }

      public function edit() {
        if(isset($_POST['id'])){
          $data = array(
            'id' => $_POST['id']
          );
          
          $trains = Train::getAll();
          $voyage = Voyage::getById($data);
          include('./views/page/voyage/edit.php');
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

          $voyage = Voyage::getByIdTrain($data['id_voyage'], $data['id_train']);

          if($voyage == true){
            session::set('info', 'there is a voyage in the same train');
            redirect::to(BASE_URL.'voyage/');
            return;
          }
          
          $result = Voyage::update($data);
          if($result === 'ok') {
            session::set('success', 'The flight has been updated successfully');
            redirect::to(BASE_URL.'voyage/');
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
            redirect::to(BASE_URL.'voyage/');

          } else {
            return $result;
          }
        }
      }

      public function findVoyage() {
        if(isset($_GET['by_departure']) || isset($_GET['by_arrival']) || isset($_GET['by_date'])) {
          if($_GET['by_departure'] != null || $_GET['by_arrival'] != null || $_GET['by_date'] != null) {
            $data = array(
              'by_departure' => $_GET['by_departure'],
              'by_arrival' => $_GET['by_arrival'],
              'by_date' => $_GET['by_date'],
            );
            $voyages = Voyage::searchVoyage($data);

            function timeDeff($endtimestamp, $starttimestamp) {
              $origin = date_create($endtimestamp);
              $target = date_create($starttimestamp);
              $interval = date_diff($origin, $target);
              echo $interval->format('%H : %i');
          }

            include('./views/page/client/index.php');
          }else{
            $voyages = [];
            include('./views/page/client/index.php');

          }
        }
      }
    }

?>