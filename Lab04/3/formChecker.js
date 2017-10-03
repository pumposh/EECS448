function validate()
{
  var user = "";
  var pass = "";
  var validemail = 0;

  user = document.forms["form"]["username"].value;
  pass = document.forms["form"]["password"].value;

  if (user != "")
  {
  //Check for @ symbol
  var atlocation = 0;
    for (var i=0; i < user.length; i++)
    {
      if (user.charAt(i) == '@')
      {
        validemail++;
        atlocation = i;
      }
    }

  //Check for period
    for (var i=atlocation+1; i < user.length; i++)
    {
      if (user.charAt(i) == '.')
      {
        validemail++;
      }
    }
  }

  if (user == "" || validemail != 2)
  {
    alert("Enter a valid email!");
    return false;
  }
  else if (pass == "")
  {
    alert("Password is a required field!")
    return false;
  }
  else
  {
    return true;
  }
}
