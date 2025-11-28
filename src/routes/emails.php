<?php
$emails = [
    [
        "id" => 0,
        "username" => "Abraham Alfonzo",
        "message" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!",
        "date" => "13 nov",
        "toEmail" => "Efrain Perez"
    ],
    [
        "id" => 1,
        "username" => "Abraham Alfonzo",
        "message" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!",
        "date" => "11 dec",
        "toEmail" => "Manuel Ortiz"
    ],
];

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
