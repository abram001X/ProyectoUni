const ulEmail = document.querySelector(".cont_email");
const url = "http://localhost:3000/get_emails/";
const getEmails = async () => {
  const res = await fetch(url);
  const api = await res.json();
  return api;
};

const emails = getEmails();
emails.map((email) => {
  const { username, message, date, is_deleted } = email;

  if (is_deleted == "false")
    ulEmail.innerHTML = `
    <a  class='a_li_em'>
    <li class='email'>
    <b class='u_em'>${username}</b>
    <p>${message}</p>
    <b>${date}</b>
    </li>
    <button class='b_emails_trash'>
    <svg class='w-6 h-6 text-gray-800 dark:text-white svg_trash' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>
    <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z' />
    </svg> 
    </button>
    </a>
    `;
  const buttTrash = document.querySelector(".b_emails_trash");

  buttTrash.addEventListener("click", (e) => {
    console.log(username);
  });
  
});

