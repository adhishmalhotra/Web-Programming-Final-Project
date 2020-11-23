const loginForm = document.getElementById("LoginForm");
const loginButton = document.getElementById("LoginButton");
const loginErrorMsg = document.getElementById("ErrorMsg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === " *link usernames here* " && password === " *link password here* ") {
        // I need a statment to try and link this to an external form with all the login 
        //usernames and respective passwords. Then we can hyperlink it back to home page. 
    } else {
        loginErrorMsg.style.opacity = 3;
    }
})


var SUF = document.getElementById('SignUp');

window.onclick = function(event) {
  if (event.target == SUF) {
    SUF.style.display = "grid";
  }
}
