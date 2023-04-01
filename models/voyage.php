<?php

    class Voyage {
        static public function getAll() {
            $query = "SELECT voyage.*, train.name_train FROM voyage LEFT JOIN train ON voyage.id_train = train.id_train";
            $result = DB::connect()->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }

        static public function getById($data) {
            $id = $data['id'];

            try {
                $requit = "SELECT voyage.*, train.name_train FROM voyage LEFT JOIN train ON voyage.id_train = train.id_train WHERE id_voyage = :id";
                $result = DB::connect()->prepare($requit);
                $result->execute(array(':id' => $id));
                $voyage = $result->fetch(PDO::FETCH_OBJ);
                return $voyage;

            } catch(PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }

        static public function getByIdTrian($id_voyage, $id_train) {

            try {
                if($id_voyage == null) {
                    $requit = "SELECT * FROM voyage WHERE id_train = :id_train";
                    $result = DB::connect()->prepare($requit);
                    $result->execute(array(':id_train' => $id_train));
                } else {
                    $requit = "SELECT * FROM voyage WHERE id_voyage != :id_voyage and id_train = :id_train";
                    $result = DB::connect()->prepare($requit);
                    $result->execute(array(':id_voyage' => $id_voyage, ':id_train' => $id_train));
                }

                    $voyage = $result->fetch(PDO::FETCH_OBJ);

                if($voyage){
                    return true;
                }else {
                    return false;
                }

            } catch(PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }

        static public function update($data) {
            $query = 'UPDATE voyage SET departure_s = :departure_s, arrival_s = :arrival_s, date_departure = :date_departure, date_arrival = :date_arrival, prix = :prix, id_train = :id_train WHERE id_voyage = :id_voyage';
            $result = DB::connect()->prepare($query);
            $result->bindParam(':id_voyage',$data['id_voyage']);
            $result->bindParam(':departure_s',$data['departure_s']);
            $result->bindParam(':arrival_s',$data['arrival_s']);
            $result->bindParam(':date_departure',$data['date_departure']);
            $result->bindParam(':date_arrival', $data['date_arrival']);
            $result->bindParam(':prix',$data['prix']);
            $result->bindParam(':id_train',$data['id_train']);
        
            if($result->execute($data)){
                return 'ok';
            } else {
                return 'error';
            }
        }

        static public function add($data) {
            $query = 'INSERT INTO voyage (departure_s, arrival_s, date_departure, date_arrival, prix, id_train) VALUES 
                                         (:departure_s, :arrival_s, :date_departure, :date_arrival, :prix, :id_train)';

            $result = DB::connect()->prepare($query);
            $result->bindParam(':departure_s',$data['departure_s']);
            $result->bindParam(':arrival_s',$data['arrival_s']);
            $result->bindParam(':date_departure',$data['date_departure']);
            $result->bindParam(':date_arrival', $data['date_arrival']);
            $result->bindParam(':prix',$data['prix']);
            $result->bindParam(':id_train',$data['id_train']);
        
            if($result->execute($data)){
                return 'ok';
            } else {
                return 'error';
            }
        }

        static public function delete($data) {
            $id = $data['id'];

            try {
                $query = 'DELETE FROM voyage WHERE id_voyage = :id_voyage';
                $result = DB::connect()->prepare($query);
                $result->execute(array(':id_voyage' => $id));
                if($result->execute()) {
                    return 'ok';
                }
            } catch (PDOException $ex) {
                echo 'Error: '.$ex->getMessage();
            }
        }
    }

?>