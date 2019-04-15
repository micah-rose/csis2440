let phone, email;

function validateStuff(inputBox) {
  let idValue = inputBox.attributes["id"].nodeValue;
  if (idValue == "pInput") {
    document.getElementById("phone").innerText = inputBox.value;
  } else {
    document.getElementById("email").innerText = inputBox.value;
  }
}
/*
function isValid(str){
    let phoneX = /^[(]{0,1}[0=9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1[0-9]{4}$/};
    return phoneX.test(str);
}*/
