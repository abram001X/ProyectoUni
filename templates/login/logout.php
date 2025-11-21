<?php
session_start();
if (!empty($_POST['logout'])) {
    session_unset();
    session_destroy();
}
