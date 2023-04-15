<?php
  class redirect{
    static public function to($page) {
      header('location:' . $page);
    }

    static public function view($page) {
      include('./views/'.$page.'.php');
    }
  }
?>