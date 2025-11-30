<?php
include_once 'emails.php';
$email = [];
function getEmails()
{
    global $emails;
    global $id;
    foreach ($emails as $em) {
        if ($em["id"] === $id) {
            return $em;
        }
    }
};
$email = getEmails();
?>
<section class="cont_bdentry con_em_tose">
    <article class="c_em">
        <div class="cont_users_em">
            <div class=" us_ems">
                <div class="us_ic_tw">
                    <?php echo ucfirst($email['toEmail'][0]) ?>
                </div>
                <b class="us_p"><?php echo $email['toEmail'] ?></b>
            </div>
            <b class="us_b_me">enviado por
                <?php echo $email['username'] ?>
            </b>
        </div>
        <b class="dte_em"><?php echo $email['date'] ?></b>
        <p class="mess_em"><?php echo $email['message'] ?></p>
    </article>
</section>