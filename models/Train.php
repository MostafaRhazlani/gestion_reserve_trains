<?php

    class Train {
        static public function getAll() {
            $query = DB::connect()->prepare('SELECT * FROM train');
            $query->execute();
            $nameTrain = $query->fetchAll(PDO::FETCH_OBJ);
            return $nameTrain;
        }

        static public function store($data) {
            $query = "INSERT INTO train(name_train, photo, capacity) VALUES (:name_train, :photo, :capacity)";

            $result = DB::connect()->prepare($query);
            $result->bindParam(':name_train',$data['name_train']);
            $result->bindParam(':photo',$data['photo']);
            $result->bindParam(':capacity',$data['capacity']);
        
            if($result->execute($data)){
                return 'ok';
            } else {
                return 'error';
            }
        }

        static public function getByIdTrain($data) {
            $id_train = $data['id_train'];

            try {
                $requit = "SELECT * FROM train WHERE id_train = :id_train";
                $result = DB::connect()->prepare($requit);
                $result->execute(array(':id_train' => $id_train));
                $train = $result->fetch(PDO::FETCH_OBJ);
                return $train;

            } catch(PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }

        static public function update($data) {
            $query = 'UPDATE train SET name_train = :name_train, capacity = :capacity, photo = :photo WHERE id_train = :id_train';
            $result = DB::connect()->prepare($query);
            $result->bindParam(':id_train',$data['id_train']);
            $result->bindParam(':name_train',$data['name_train']);
            $result->bindParam(':capacity',$data['capacity']);
            $result->bindParam(':photo',$data['photo']);
        
            if($result->execute($data)){
                return 'ok';
            } else {
                return 'error';
            }
        }

        static public function delete($data) {
            $id_train = $data['id_train'];
      
            try {
                $query = 'DELETE FROM train WHERE id_train = :id_train';
                $result = DB::connect()->prepare($query);
                $result->execute(array(":id_train" => $id_train));
                if($result->execute()) {
                  return 'ok';
                }
            } catch(PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }

        
    }
?>