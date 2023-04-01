<?php

    class trianController {
        public function getAll() {
            $trains = Train::getAll();
            return $trains;
        }
    }
?>