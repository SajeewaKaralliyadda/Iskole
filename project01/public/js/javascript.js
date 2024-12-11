var menuBtn = document.getElementById("menubtn");
var sideNav = document.getElementById("sideNav");
var menu = document.getElementById("menu");

sideNav.style.right = "-250px";

menuBtn.onclick = function () {
  if (sideNav.style.right == "-250px") {
    sideNav.style.right = "0";
    menu.src = "images/close.png";
  } else {
    sideNav.style.right = "-250px";
    menu.src = "images/menu.png";
  } 
};

function Subscribe() {
  var subinput = document.getElementById("email").value;
  if (subinput == "") {
    alert("Enter Valid Email Address");
    return false;
  } else alert("Subscribe Successfully!");
}

function required() {
  var empty = document.forms["contactus"]["name"].value;
  var gendemp = document.forms["contactus"]["email"].value;
  var emtel = document.forms["contactus"]["tel"].value;

  if (empty == "") {
    alert("Username must be filled out");
    return false;
  } else if (gendemp == "") {
    alert("Please enter your email");
    return false;
  } else if (emtel == "") {
    alert("Please enter your valid Telephone number");
    return false;
  }
}
