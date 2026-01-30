const url = "https://stands-maria-poem-walter.trycloudflare.com";
export async function apiSend(body = {}, query = "") {
  const response = await fetching(body, query);
  console.log(response)
  return response.message
}

const fetching = async (body, query) => {
  const data = await fetch(url + query, {
    method: "POST",
    headers: { "content-type": "application/json" },
    body: JSON.stringify(body),
  });
  return await data.json();
};
