<?php
include_once 'emails.php';
foreach ($emails as $email) {
    $username = $email['username'];
    $message = $email['message'];
    $date = $email['date'];
    $id = $email['id'];
    $toEmail = $email['toEmail'];
    echo "
    <a href='../../index.php?id=$id' class='a_li_em'>
        <li class='email'>
            <b class='u_em'>$toEmail</b>
            <p>$message</p>
            <b>$date</b>
        </li>
       <svg class='w-6 h-6 text-gray-800 dark:text-white svg_trash' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>
            <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z' />
        </svg> 
    </a>
        ";
};
