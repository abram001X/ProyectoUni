<?php
if (!empty($_POST['inp_destino']) && !empty($_POST['inp_asunto']) && !empty($_POST['inp_trabajo']) && !empty($_POST['post_em'])) {
    $inpDestino = $_POST['inp_destino'];
    $inpAsunto = $_POST['inp_asunto'];
    $inpTrabajo = $_POST['inp_trabajo'];
    echo "<p style='color:#fff'>$inpDestino</p>";
};


// require __DIR__ . '/vendor/autoload.php';

// $resend = Resend::client('re_UrYmGYQa_7p8EB8i9u2TFfGnkQ41Eijcg');

// $resend->emails->send([
//     'from' => 'Acme <onboarding@resend.dev>',
//     'to' => ['delivered@resend.dev'],
//     'subject' => 'hello world',
//     'html' => '<strong>it works!</strong>',
// ]);
?>
