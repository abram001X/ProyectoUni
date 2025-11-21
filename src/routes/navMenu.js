import { emailFav, emailSend, emailSended } from "./main.js";
const buttonRedactar = document.querySelector(".redactar");
const buttonSended = document.querySelector(".tag_sended");
const buttonFav = document.querySelector(".tag_fav");

buttonRedactar.addEventListener("click", () => {
  routes("redactar", buttonRedactar);
});

buttonSended.addEventListener("click", () => {
  routes("tag_sended");
  buttonSended.style = "background-color:#444;";
  buttonFav.style = "backgrund-color:transparent;";
});

buttonFav.addEventListener("click", () => {
  routes("tag_fav");
  buttonFav.style = "background-color:#444;";
  buttonSended.style = "backgrund-color:transparent;";
});

function routes(route) {
  switch (route) {
    case "redactar":
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
