const form = document.querySelector(".form")
const inputEmail = document.querySelector(".in-em")
const inputPassword = document.querySelector(".in-passw")

function verifyUser(email, password){
    if(email === "holasoylaca@gmail.com" && password == "hola123"){
        window.location.href = "../../index.php"
    }
    
}
form.addEventListener("submit", (e)=>{
    e.preventDefault()
    let email = inputEmail.value
    let password = inputPassword.value
    verifyUser(email,password)
})

