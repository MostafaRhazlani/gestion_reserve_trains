<?php 

    class Reserve {
        static public function store($dataReserve) {
            $query = 'INSERT INTO reserve (iduser, id_voyage, num_passages) VALUES (:iduser,:id_voyage,:num_passages)';
            $result = DB::connect()->prepare($query);
            $result->bindParam(':iduser',$dataReserve['iduser']);
            $result->bindParam(':id_voyage',$dataReserve['id_voyage']);
            $result->bindParam(':num_passages',$dataReserve['num_passages']);

            $result->execute($dataReserve);

            $result = DB::connect()->query('SELECT id_reserve FROM reserve ORDER BY id_reserve DESC LIMIT 1');
            $row = $result->fetch();
            return $row['id_reserve'];
        }
    }

?>