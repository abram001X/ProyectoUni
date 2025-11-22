<menu class="cont_menu">
    <nav class="nav_men">
        <div class="cont_us-red">
            <div class="us_men">
                <div class="us_ic">A</div>
                <b class="us_p"><?php echo $_SESSION['username'] ?></b>
            </div>
            <button class="redactar">REDACTAR</button>
        </div>
        <div class="butt_nav">
            <button class="tag_men tag_sended" style="background-color: #444;">Enviados (9)</button>
            <button class="tag_men tag_fav">Destacados (0)</button>
            <button class="tag_men ">Papelera (0)</button>
            <button class="tag_men ">Todos (0)</button>
        </div>
        <form method="post">
            <button class="ex_sess" value="send" name="logout">Cerrar sesión</button>
        </form>
    </nav>
</menu>
