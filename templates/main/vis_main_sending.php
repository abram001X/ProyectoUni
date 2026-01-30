<form action="" method="post" class='cont_bdentry form_new_em'>
  <h2 class="title_main">Nuevo correo</h2>
  <p class="ms_inv mes_server" style="color: #fff;"></p>
  <div class="cont_newema">
    <div class="cont_options_send">
      <div class="but_options but_all">TODOS</div>
      <div class="but_options but_age">EDAD</div>
      <div class="but_options but_status">ESTADO</div>
    </div>
    <input name="inp_asunto" type="text" class="in_emsend in_asunto" placeholder="Asunto">
    <textarea name="inp_trabajo" type="text" class="in_emsend in_work" placeholder="Trabajo" style="color: #fff;"></textarea>
    <button type="submit" name="action" value="send" class="bt_send_em">Enviar</button>
  </div>
</form>

<script type="module">
  import {
    formEmail
  } from "./src/formEmail/formEmail.js"
  const form = document.querySelector(".form_new_em")
  const inpSubject = document.querySelector(".in_asunto")
  const inpMessage = document.querySelector(".in_work")
  const messageDom = document.querySelector(".mes_server")

  const butAll = document.querySelector(".but_all")
  const butAge = document.querySelector(".but_age")
  const butStatus = document.querySelector(".but_status")

  const email = "<?php echo $_SESSION['email']; ?>"
  const password = "<?php echo $_SESSION['password']; ?>"

  let options = "all"
  const eventSendAll = (e) => formEmail(e, { //form callback
    "subject": inpSubject.value,
    "message": inpMessage.value,
    email,
    password,
    messageDom,
    options
  })

  function formStyle(butt) {
    switch (butt) {
      case "butAll":
        options = "all"
        butAll.style.backgroundColor = "#aaa";
        butAge.style.backgroundColor = "#fff"
        butStatus.style.backgroundColor = "#fff"
        break;
      case "butAge":
        options = "age"
        butAge.style.backgroundColor = "#aaa";
        butStatus.style.backgroundColor = "#fff";
        butAll.style.backgroundColor = "#fff";
        break;
      default:
        options = "status"
        butStatus.style.backgroundColor = "#aaa";
        butAge.style.backgroundColor = "#fff";
        butAll.style.backgroundColor = "#fff";
        break;
    }
  }

  butAll.addEventListener("click", (e) => formStyle("butAll"))
  butAge.addEventListener("click", (e) => formStyle("butAge"))
  butStatus.addEventListener("click", (e) => formStyle("butStatus"))

  form.addEventListener("submit", eventSendAll) //event
</script>
<style>
  .cont_options_send {
    display: flex;
    justify-content: space-around;
    width: 40%;
    margin-left: 20px;
  }

  .but_options {
    color: #000 !important;
    width: 80px;
    height: 30px;
    background-color: #fff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .but_options:hover {
    background-color: #aaa;
  }
</style>