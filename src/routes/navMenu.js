import { emailFav, emailSend, emailSended } from "./main.js";
const buttonRedactar = document.querySelector(".redactar");
const buttonSended = document.querySelector(".tag_sended");
const buttonFav = document.querySelector(".tag_fav");

buttonRedactar.addEventListener("click", () => {
  routes("email_send");
});

buttonSended.addEventListener("click", () => {
  routes("tag_sended");
});

buttonFav.addEventListener("click", () => {
  routes("tag_fav");
});

function routes(route) {
  switch (route) {
    case "email_send":
      emailSend();
      break;
    case "tag_sended":
      emailSended();
      break;
    case "tag_fav":
      emailFav();
      break;
    default:
      break;
  }
}
