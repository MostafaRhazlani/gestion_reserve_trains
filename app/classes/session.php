<?php
  class session{
    static public function set($type, $message) {
      setcookie($type, $message, time() + 2, '/');
    }
  }
?>