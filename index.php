<?php include_once 'templates/login/logout.php' ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: templates/login/vis_login.php');
    exit;
};
?>
<?php include_once 'src/formEmail/formEmail.php' ?>
<?php include_once 'routes.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/styles/index.css">
    <link rel="stylesheet" href="templates/styles/header.css">
    <link rel="stylesheet" href="templates/styles/menu.css">
    <link rel="stylesheet" href="templates/styles/main.css">

    <title>Proyecto</title>
</head>

<body>
    <section class="cont_index">
        <?php include_once 'templates/vis_menu.php' ?>
        <section class="cont_menu-main">
            <?php include_once $vis_main ?>
        </section>
    </section>
</body>

<script>
    const username = '<?php echo $_SESSION['username'] ?>'
    const route = '<?php echo $vis_main ?>'
    const ulEmail = document.querySelector(".cont_email");
    const url = "https://proyectouni-backend.onrender.com";

    const getEmails = async () => {
        const res = await fetch(url + '/get_emails/' + username);
        const api = await res.json();
        return api
    };

    async function listEmails() {
        const emails = await getEmails()
        emails.map((email) => {
            const {
                id,
                subject,
                username,
                message,
                date,
                is_deleted
            } = email;
            const content = `
        <a  class='a_li_em' id='li_${id}'>
            <li class='email'>
                <b class='u_em' >${username}</b>
                <p>${subject}</p>
                <p>${message}</p>
                <b>${date}</b>
            </li>
            <button class='b_emails_trash' id='${id}'>
                <svg class='w-6 h-6 text-gray-800 dark:text-white svg_trash' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>
                <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z' />
                </svg> 
            </button>
        </a>
        `;
        const contentTrash = `
        <a  class='a_li_em'>
            <li class='email'>
                <b class='u_em'>${username}</b>
                <p>${subject}</p>
                <p>${message}</p>
                <b>${date}</b>
                <b class="ms_dl">Correo Eliminado</b>
            </li>
        </a>`
            if (route.includes("vis_main_send") && is_deleted == "false") {
                ulEmail.innerHTML += content
            }
            if (route.includes("vis_main_trash") && is_deleted == "true") {
                ulEmail.innerHTML += contentTrash
            }
            if (route.includes("vis_main_all")) {
                if (is_deleted == "false") ulEmail.innerHTML += content
                else ulEmail.innerHTML += contentTrash
            }

        });
        clickedButton(emails)
        
    }

    listEmails()

    function clickedButton() {
        const buttTrash = document.querySelectorAll('.b_emails_trash');
        buttTrash.forEach(value => {
            value.addEventListener('click', e => {
                deleteEmail(value.id)
            })
        })
    }

    async function deleteEmail(id) {
        const liNodo = document.getElementById(`li_${id}`)
        const res = await fetch(url + `/delete_email/${id}/${username}`, {
            method: 'PUT'
        })
        const api = await res
        liNodo.innerHTML = ""
    }
</script>

</html>