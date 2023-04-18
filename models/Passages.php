<?php 

    class Passages{
        static public function store($dataPassages) {
            $query = 'INSERT INTO passages (fullname_passage, CIN, phone, id_reserve) VALUES (:fullname_passage,:CIN,:phone,:id_reserve)';
            $result = DB::connect()->prepare($query);
            $result->bindParam(':fullname_passage',$dataPassages['fullname_passage']);
            $result->bindParam(':CIN',$dataPassages['CIN']);
            $result->bindParam(':phone',$dataPassages['phone']);
            $result->bindParam(':id_reserve',$dataPassages['id_reserve']);

            $result->execute($dataPassages);
        }
    }

?>