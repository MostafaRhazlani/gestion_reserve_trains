<?php

    class trianController {
        public function getAll() {
            $trains = Trian::getAll();
            return $trains;
        }
    }
?>