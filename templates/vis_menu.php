<menu class="cont_menu">
    <nav class="nav_men">
        <div class="cont_us-red">
            <div class="us_men">
                <div class="us_ic">A</div>
                <b class="us_p"><?php echo $_SESSION['username'] ?></b>
            </div>
        </div>
        <a class="redactar" href="index.php?route=sending" name="but_red"><?php include_once '../ProyectoUni/src/assets/svg/pencil_icon.php' ?><p class="p_re">REDACTAR</p></a>
        <div class="butt_nav">
            <a href="index.php?route=send" class="tag_men tag_sended" name="but_send"><?php include_once '../ProyectoUni/src/assets/svg/noti_icon.php' ?><p class="p_m">Enviados (9)</p></a>
            <a href="index.php?route=trash" class="tag_men tag_trash" name="but_trash"><?php include_once '../ProyectoUni/src/assets/svg/trash_icon.php' ?><p class="p_m">Papelera (0)</p> </a>
            <a href="index.php?route=all" class="tag_men tag_all" name="but_all"><?php include_once '../ProyectoUni/src/assets/svg/list_icon.php' ?><p class="p_m">Todos (0)</p></a>
        </div>
        <form method="post">
            <button class="ex_sess" value="send" name="logout">Cerrar sesión</button>
        </form>
    </nav>
</menu>