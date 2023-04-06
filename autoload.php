<?php
    session_start();
    require_once ('./base_url.php');
    spl_autoload_register('autoload');

    function autoload($class_name) {
        $array_paths = [
            'app/classes/',
            'controllers/',
            'database/',
            'models/',
        ];

        $parts = explode('\\', $class_name);
        $name = array_pop($parts);

        foreach ($array_paths as $path) {
            $file = sprintf($path . '%s.php', $name);
            if(is_file($file)) {
                include_once $file;
            }
        }
    }
?>