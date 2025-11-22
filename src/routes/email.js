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
    <b class="u_em">${data.username}</b>
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
  const { username, message, date } = data;
  console.log(data);
  const emailCont = `
    <section class="cont_bdentry">
        <article class="c_em">
            <div class="us_men">
                <div class="us_ic_tw">
                    ${username[0].toUpperCase()}
                </div>
                <b class="us_p">${username}</b>
            </div>
            <p class="mess_em">${message}</p>
            <b class="dte_em">${date}</b>
        </article>
    </section>`;

  main.innerHTML = emailCont;
}
