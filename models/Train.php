<?php

    class Train {
        static public function getAll() {
            $query = DB::connect()->prepare('SELECT * FROM train');
            $query->execute();
            $nameTrain = $query->fetchAll(PDO::FETCH_OBJ);
            return $nameTrain;
        }
    }
?>