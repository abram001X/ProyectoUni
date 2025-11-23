import { emailsFetch } from "./email.js";

const main = document.querySelector(".cont_main");
export function emailSend() {
  const newMain = `
  <section class='cont_bdentry' >
    <h2 class="title_main">Nuevo correo</h2>
    <div class="cont_newema">
      <input type="email" class="in_emsend in_tosend" placeholder="Destinatario">
      <input type="text" class="in_emsend in_asunto" placeholder="Asunto">
      <textarea type="text" class="in_emsend in_work" placeholder="Trabajo"></textarea>
      <button class="bt_send_em">Enviar</button>
    </div>
  </section>
                `;
  main.innerHTML = newMain;
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