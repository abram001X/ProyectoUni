<?php
function isSession($route){
    if (isset($_SESSION['username'])) {
        header('location: '. $route);
        exit;
    };
}
?>