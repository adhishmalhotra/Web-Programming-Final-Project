const loginForm = document.getElementById("LoginForm");
const loginButton = document.getElementById("LoginButton");
const loginErrorMsg = document.getElementById("ErrorMsg");

function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("Please enter a username");
        return false;
    }
    if(empty($_POST['password']))
    {
        $this->HandleError("Please enter a password");
        return false;
    }
    $username=trim($_POST['username']);
    $username=trim($_POST['password']);
if(!$this->CheckLoginInDB($username,$password))
{
    return false;
}
    session_start();
    $_SESSION[$this->GetLoginSessionVar()]=$username;
    return true;
}

function CheckLoginInDB($username,$password)
{
   if(!$this->DBLogin())
   {
       $this->HandleError("Sorry...login failed");
       return false;
   }
    $username=$this->SanitizeForSQL($username);
    $pwdmd5-md5($password);
      $qry = "Select name, email from $this->tablename ".
        " where username='$username' and password='$pwdmd5' ".
        " and confirmcode='y'";
    
    $result = mysql_query($qry,$this->connection);
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in... ".
            "The username or password does not match");
        return false;
    }
    return true;
}
function HandleError($err)
    {
        $this->error_message .= $err."\r\n";
    }

var SUF = document.getElementById('SignUp');

window.onclick = function(event) {
  if (event.target == SUF) {
    SUF.style.display = "grid";
  }
}

/// Original Code
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
