export function handleFormEmail() {
  const formEmail = document.querySelector(".form_new_em");
  const inpUsers = document.querySelector(".in_tosend");
  const inpAsunto = document.querySelector(".in_asunto");
  const inpWork = document.querySelector(".in_work");
  let textAs = "";
  let textWork = "";
  let listEmails = [];
  //eventos de inputs
  inpUsers.addEventListener("input", (e) => {
    listEmails = getEmails(e.target.value);
  });

  inpAsunto.addEventListener("input", (e) => {
    textAs = e.target.value;
  });

  inpWork.addEventListener("input", (e) => {
    textWork = e.target.value;
  });

  formEmail.addEventListener("submit", (e) => { //enviar formulario al server
    e.preventDefault();
    //textAs
    //textWork
    //listEmails
  });
}

function getEmails(email = "") {
  const emailTrim = email.replaceAll(" ", "");
  return emailTrim.split(",");
}
