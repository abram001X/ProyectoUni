export function handleFormEmail() {
  const formEmail = document.querySelector(".form_new_em");
  const inpUsers = document.querySelector(".in_tosend");
  let listEmails = [];
  inpUsers.addEventListener("input", (e) => {
    console.log(e.target.value);
  });

  formEmail.addEventListener("submit", (e) => {
    e.preventDefault();
    // console.log([email1, email2, ...])
  });
}
