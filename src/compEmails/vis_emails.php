<?php
include_once 'emails.php';
foreach ($emails as $email) {
    $username = $email['username'];
    $message = $email['message'];
    $date = $email['date'];
    $id = $email['id'];
    echo "
    <a href='../../index.php?id=$id' class='a_li_em'>
        <li class='email'>
        <b class='u_em'>$username</b>
        <p>$message</p>
        <b>$date</b>
        </li>
    </a>
        ";
};
