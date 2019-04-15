alert("welcome to the page!!");

function verifyStuff(inputBox) {
  //let idValue = inputBox.attributes["id"].nodeValue;
  let pValue = document.getElementById("password").value;
  let vpValue = document.getElementById("v-password").value;
  if (pValue == vpValue) {
    document.getElementById("confirm-password").innerText =
      "Password Confirmed";
  } else {
    document.getElementById("confirm-password").innerText =
      "Password Does Not Match";
  }
}
/*
function isValid(str){
    let phoneX = /^[(]{0,1}[0=9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1[0-9]{4}$/};
    return phoneX.test(str);
}*/
