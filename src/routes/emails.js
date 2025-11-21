export const emails = [{
    username: "Efrain Perez",
    message: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!",
    date: "13 nov"
},{
    username: "Manuel Ortiz",
    message: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!Minima provident quia corporis maxime itaque nihil consectetur! Cumque inventore eligendi accusantium ducimus perferendis quibusdam quod? Eos atque porro est fugit veniam!",
    date: "11 dec"
}]

export const user = {
  username : "Abraham",
  email: "holasoylaca@gmail.com",
  password: "hola123"
}


export function emailsFetch(/*fav o enviados*/){
    //Colocar el fetching de los datos, emails destacados y emails enviados
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
  return emailsSended
}