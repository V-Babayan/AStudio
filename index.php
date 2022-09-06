<?php 
    $state = 'READY';
        
    function get_app_url() {
        $result = '';

        if ($GLOBALS['state'] == 'DEVELOPMENT') {
            $result = 'template.php';
        } else if ($GLOBALS['state'] == 'READY') {
            $result = 'app.html';
        } else {
            throw new Exception('The state can only be DEVELOPMENT or READY.');
        }

        return $result;
    }

    $app_url = get_app_url();

    include_once('src/' . $app_url) 
?>