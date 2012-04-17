//TODO CHANGE THIS METHOD IS NOT SECURE!!!

var password;

var pass1="fortinero456";

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1)
  alert('Password Correct! Click OK to enter!');
else
   {
  alert('Password Incorrect No vas a poder ver mis cosas  ')
    window.location="/index.php";
    }
