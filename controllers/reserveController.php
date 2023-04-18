<?php

    class reserveController{
      public function storePassages() {
        if(isset($_POST['submit'])) {
          
          $dataPassage = array(
            'fullname_passage' => $_POST['fullname_passage'],
            'CIN' => $_POST['CIN'],
            'phone' => $_POST['phone'],
          );
          
          $dataReserve = array(
            'iduser' => $_POST['iduser'],
            'id_voyage' => $_POST['id_voyage'],
            'num_passages' => count($dataPassage["fullname_passage"]),
          );

          $idReserve = Reserve::store($dataReserve);

          for ($i=0; $i < count($dataPassage["fullname_passage"]); $i++) { 
            $array = [
              "fullname_passage" => $dataPassage["fullname_passage"][$i],
              "CIN" => $dataPassage["CIN"][$i],
              "phone" => $dataPassage["phone"][$i],
              "id_reserve" => $idReserve,
            ];

            $result = Passages::store($array);
            
            if($result !== 'ok') {
              echo $result;
            }
          }
          
          redirect::to(BASE_URL);
        }
      }
      
    }
?>