import { user } from "../../src/routes/emails.js";

const form = document.querySelector(".form");
const inputEmail = document.querySelector(".in-em");
const inputPassword = document.querySelector(".in-passw");

function verifyUser(email, password) {
  if (user.email === email && user.password == password) {
    window.location.href = "../../index.php";
  }
}

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let email = inputEmail.value;
  let password = inputPassword.value;
  verifyUser(email, password);
});
