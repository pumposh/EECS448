function changeTab(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++)
    {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++)
    {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function passwordValidate() {
    var pass1, pass2;

    pass1 = document.getElementById("password1").value;
    pass2 = document.getElementById("password2").value;

    if (pass1 == "" || pass2 == "")
    {
      alert("Blank value(s)");
    }
    else if (pass1 != pass2)
    {
        alert("Passwords do not match :(");
    }
    else
    {
        alert("Passwords match!");
    }
    document.getElementById("output").innerHTML = text;
}

var state = 1;
var state1 = "https://media.giphy.com/media/3o7TKUMk1IysRprsis/giphy.gif";
var state2 = "https://media.giphy.com/media/Z8JSIEhG36CyI/giphy.gif";
var state3 = "https://media.giphy.com/media/14xW6lySaWcC7S/giphy.gif";
var state4 = "http://smashinghub.com/wp-content/uploads/2014/08/cool-loading-animated-gif-7.gif";
var state5 = "https://media.tenor.com/images/671b3187a206a7583b6fce2887f73c40/tenor.gif";

function nextImage()
{
  if (state == 1)
  {
    state++;
    document.getElementById("slide").src = state2;
  }
  else if (state == 2)
  {
    state++;
    document.getElementById("slide").src = state3;
  }
  else if (state == 3)
  {
    state++;
    document.getElementById("slide").src = state4;
  }
  else if (state == 4)
  {
    state++;
    document.getElementById("slide").src = state5;
  }
  else if (state == 5)
  {
    state = 1;
    document.getElementById("slide").src = state1;
  }
  else if (state == null)
  {
    state++;
    document.getElementById("slide").src = state2;
  }
}

function prevImage()
{
  if (state == 1)
  {
    state = 5;
    document.getElementById("slide").src = state5;
  }
  else if (state == 2)
  {
    state--;
    document.getElementById("slide").src = state1;
  }
  else if (state == 3)
  {
    state--;
    document.getElementById("slide").src = state2;
  }
  else if (state == 4)
  {
    state--;
    document.getElementById("slide").src = state3;
  }
  else if (state == 5)
  {
    state--;
    document.getElementById("slide").src = state4;
  }
}

function setColors()
{
  var box = document.getElementById("test");
  var borderRed = 0 + parseInt(document.getElementById("borderRed").value);
  var borderGreen = 0 + parseInt(document.getElementById("borderGreen").value);
  var borderBlue = 0 + parseInt(document.getElementById("borderBlue").value);
  var thickness = 0 + parseInt(document.getElementById("thickness").value);
  var backRed = 0 + parseInt(document.getElementById("backRed").value);
  var backGreen = 0 + parseInt(document.getElementById("backGreen").value);
  var backBlue = 0 + parseInt(document.getElementById("backBlue").value);
  box.style.borderWidth = thickness;
  box.style.borderColor = "rgb(" + borderRed + ", " + borderGreen + ", " + borderBlue + ")";
  box.style.backgroundColor = "rgb(" + backRed + ", " + backGreen + ", " + backBlue + ")";
}
