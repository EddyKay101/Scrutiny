function checkUsernames (event)
{
	var usernames = document.querySelector("input[name='username']");
	//var password = document.querySelector("input[name='password']");
	var warning = document.querySelector("form #login-warning");
	if(usernames.value === "")
	{
		event.preventDefault();
		warning.innerHTML = "*No username/password was entered!";
	}
}

function checkPasswords (event)
{
	//var username = document.querySelector("input[name='username']");
	var passwords = document.querySelector("input[name='password']");
	var warning = document.querySelector("form #login-warning");
	if(passwords.value === "")
	{
		event.preventDefault();
		warning.innerHTML = "*No username/password was entered!";
	}
	/*else if(password.value.length === 0)
	{
		event.preventDefault();
		warning.innerHTML = "*Invalid Username/Password!";
	}*/
}

function init()
{
	var loginForm = document.querySelector("form#log-form");
	var usernames = document.querySelector("input[name='username']");
	var passwords = document.querySelector("input[name='password']");
	
	usernames.required = false;
	passwords.required = false;
	
	loginForm.addEventListener("submit", checkUsernames, false);
	loginForm.addEventListener("submit", checkPasswords, false);
}
document.addEventListener("DOMContentLoaded", init, false);