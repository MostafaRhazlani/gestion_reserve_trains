<?php
  class redirect{
    static public function to($page) {
      header('location:' . $page);
    }
  }
?>