<?php 
    $state = 'DEVELOPMENT';

    function get_app_url() {
        $result = '';

        if ($state == 'DEVELOPMENT') {
            $result = 'template';
        } else if ($state == 'READY') {
            $result = 'app';
        } else {
            throw new Exception('The state can only be DEVELOPMENT or READY.');
        }

        return $result;
    }

    $app_url = get_app_url();

    include_once('src/' . $app_url . '.html') 
?>
