import { apiSend } from "./apiSend.js";

export const formEmail = async (e, data) => {
  e.preventDefault();
  const { subject, message, password, email, messageDom, options } = data;
  let url = "all";
  console.log("body: ", data);
  switch (options) {
    case "all":
      url = "/send-emails/all";
      break;
    case "age":
      url = "/send-emails/by-age";
      break;
    default:
      url = "/send-emails/by-status";
      break;
  }
  console.log(url)
  const res = await apiSend({ subject, message, password, email }, url);
  messageDom.textContent = res;
};
