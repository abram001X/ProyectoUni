<form action="" method="post" class='cont_bdentry form_new_em'>
  <h2 class="title_main">Nuevo correo</h2>
  <p class="ms_inv mes_server" style="color: #fff;"><?php echo $message_send?></p>
  <div class="cont_newema">
    <input name="inp_asunto" type="text" class="in_emsend in_asunto" placeholder="Asunto">
    <textarea name="inp_trabajo" type="text" class="in_emsend in_work" placeholder="Trabajo" style="color: #fff;"></textarea>
    <button type="submit" name="action" value="send" class="bt_send_em">Enviar</button>
  </div>
</form>
