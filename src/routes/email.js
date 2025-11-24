import { emails } from "./emails.js";
const main = document.querySelector(".cont_main");

export function emailsFetch(/*fav o enviados*/) {
  //Colocar el fetching de los datos, emails destacados y emails enviados
  emails.map((data) => {
    const ulElement = document.querySelector(".cont_email");
    const elementLi = document.createElement("li");
    elementLi.classList.add("email");
    elementLi.setAttribute("data-id", data.id);
    ulElement.appendChild(elementLi);
    const childElemtLi = `
    <b class="u_em">${data.toEmail}</b>
    <p>${data.message}</p>
    <b>${data.date}</b>
    `;
    elementLi.innerHTML = childElemtLi;
    elementedClicked(elementLi);
  });
}

function elementedClicked(emailElement) {
  emailElement.addEventListener("click", (e) => {
    const elementClicked = e.currentTarget;
    const id = elementClicked.dataset.id;
    emailContent(parseInt(id));
  });
}

function emailContent(id) {
  const data = emails.find((value) => value.id === id);
  const { username, message, date, toEmail } = data;
  console.log(data);
  const emailCont = `
    <section class="cont_bdentry con_em_tose">
        <article class="c_em">
        <div class="cont_users_em">
            <div class=" us_ems">
              <div class="us_ic_tw">
                ${toEmail[0].toUpperCase()}
              </div>
                <b class="us_p">${toEmail}</b>
            </div>
            <b class="us_b_me">enviado por 
            ${username}
            </b>
            </div>
            <b class="dte_em">${date}</b> 
            <p class="mess_em">${message}</p>
        </article>
    </section>`;

  main.innerHTML = emailCont;
}
