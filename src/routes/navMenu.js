import { emailAll, emailSend, emailSended, emailTrash } from "./main.js";
const buttonRedactar = document.querySelector(".redactar");
const buttonSended = document.querySelector(".tag_sended");
const buttonTrash = document.querySelector(".tag_trash");
const buttonAll = document.querySelector(".tag_all");

buttonRedactar.addEventListener("click", () => {
  routes("redactar");
  buttonTrash.style = "backgrund-color:transparent;";
  buttonSended.style = "backgrund-color:transparent;";
  buttonAll.style = "backgrund-color:transparent;";
});

buttonSended.addEventListener("click", () => {
  routes("tag_sended");
  buttonSended.style = "background-color:#444;";
  buttonAll.style = "backgrund-color:transparent;";
  buttonTrash.style = "backgrund-color:transparent;";
});

buttonTrash.addEventListener("click", () => {
  routes("tag_trash");
  buttonTrash.style = "background-color:#444;";
  buttonSended.style = "backgrund-color:transparent;";
  buttonAll.style = "backgrund-color:transparent;";
});

buttonAll.addEventListener("click", () => {
  routes("tag_all");
  buttonAll.style = "background-color:#444;";
  buttonSended.style = "backgrund-color:transparent;";
  buttonTrash.style = "backgrund-color:transparent;";
});

function routes(route) {
  switch (route) {
    case "redactar":
      emailSend();
      break;
    case "tag_sended":
      emailSended();
      break;
    case "tag_trash":
      emailTrash();
      break;
    case "tag_all":
      emailAll();
      break;
    default:
      break;
  }
}
