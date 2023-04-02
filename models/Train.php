<?php

    class Train {
        static public function getAll() {
            $query = DB::connect()->prepare('SELECT * FROM train');
            $query->execute();
            $nameTrain = $query->fetchAll(PDO::FETCH_OBJ);
            return $nameTrain;
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

        // static public function updatZ($data) {
        //     $query = 'UPDATE train SET name_train = :name_train, capacity = :capacity ';
        //     $params = [':name_train' => $data['name_train']];
        //     $params[':capacity'] = $data['capacity'];

            
        //     if(!empty($data['photo'])) {
        //         $query .= ', photo = :photo';
        //         $params[':photo'] = $data['photo'];
        //     }
            
        //     $query .= 'WHERE id_train = :id_train';
        //     $params[':id_train'] = $data['id_train'];
        
        //     $result = DB::connect()->prepare($query);
            
        
        //     if($result->execute($params)){
        //         return 'ok';
        //     } else {
        //         return 'error';
        //     }
        // }
    }
?>