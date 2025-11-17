import { emails } from "./emails.js";

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
  const emailsSended = emails.map(
    (data) =>
      `
  <li class="email">
    <b class="u_em">${data.username}</b>
    <p>${data.message}</p>
    <b>${data.date}</b>
  </li>
    `
  );
  const newMain = `
  <section class="cont_bdentry">
    <h2 class="title_main">Correos Enviados</h2> 
    <ul class="cont_email">
      ${emailsSended}
    </ul>
  </section>
              `;
  main.innerHTML = newMain;
}

export function emailFav() {
  const newMain = `
    <section class="cont_bdentry">
      <h2 class="title_main">Correos Destacados</h2> 
    </section>
              `;
  main.innerHTML = newMain;
}
