import { handleFormEmail } from "../formEmail/formEmail.js";
import { emailsFetch } from "./email.js";

const main = document.querySelector(".cont_main");

export function emailSend() {
  const newMain = `
  <form method="post" class='cont_bdentry form_new_em'>
    <h2 class="title_main">Nuevo correo</h2>
    <div class="cont_newema">
      <input name="inp_destino" type="text" class="in_emsend in_tosend" placeholder="Destinatario">
      <input name="inp_asunto" type="text" class="in_emsend in_asunto" placeholder="Asunto">
      <textarea name="inp_trabajo" type="text" class="in_emsend in_work" placeholder="Trabajo"></textarea>
      <button name="post_em" class="bt_send_em">Enviar</button>
    </div>  
  </form>
                `;
  main.innerHTML = newMain;
  handleFormEmail();
}

export function emailSended() {
  const newMain = `
  <section class="cont_bdentry">
    <h2 class="title_main">Correos Enviados</h2> 
    <ul class="cont_email">
    </ul>
  </section>
              `;
  main.innerHTML = newMain;
  emailsFetch();
}

export function emailTrash() {
  const newMain = `
    <section class="cont_bdentry">
      <h2 class="title_main">Papelera</h2> 
      <ul class="cont_email">
      </ul>
    </section>
              `;
  main.innerHTML = newMain;
  emailsFetch();
}

export function emailAll() {
  const newMain = `
    <section class="cont_bdentry">
      <h2 class="title_main">Todos los mensajes</h2> 
      <ul class="cont_email">
      </ul>
    </section>
              `;
  main.innerHTML = newMain;
  emailsFetch();
}
