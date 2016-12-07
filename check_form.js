function validate(userForm){

  //Check Username is there.
  div = document.getElementById("usernamemsg");
  div.style.color = "red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.username.value.length == 0){
    div.appendChild(document.createTextNode("Username cannot be blank"));
    userForm.username.focus();
    return false;
  }

  //Check if Email is valid.
  div = document.getElementById("emailmsg");
  div.style.color="red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  regex=/(^\w+\@\w+\.\w+)/;
  match=regex.exec(userForm.email_address.value);
  if(!match){
    div.appendChild(document.createTextNode("Invalid Email"));
    userForm.email_address.focus();
    return false;
  }

  // Check if Password Is valid
  div = document.getElementById("passwdmsg");
  div.style.color="red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.password.value.length <= 5){
    div.appendChild(document.createTextNode("The password should be of at least size 6"));
    userForm.password.focus();
    return false;
  }

  //Check if Retyped password is the same.
  div = document.getElementById("repasswdmsg");
  div.style.color="red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.password.value != userForm.repassword.value){
    div.appendChild(document.createTextNode("The passwords don't match."));
    userForm.password.focus();
    return false;
  }

  //Check First name is there.
  div = document.getElementById("fusrmsg");
  div.style.color = "red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.first_name.value.length == 0){
    div.appendChild(document.createTextNode("First name cannot be blank"));
    userForm.first_name.focus();
    return false;
  }

  //Check Middle Initial is there.
  div = document.getElementById("musrmsg");
  div.style.color = "red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.middle_initial.value.length == 0){
    div.appendChild(document.createTextNode("Middle Initial cannot be blank"));
    userForm.middle_initial.focus();
    return false;
  }

  //Check Last Name is there.
  div = document.getElementById("lusrmsg");
  div.style.color = "red";
  if(div.hasChildNodes()){
    div.removeChild(div.firstChild);
  }
  if(userForm.last_name.value.length == 0){
    div.appendChild(document.createTextNode("Last Name cannot be blank"));
    userForm.last_name.focus();
    return false;
  }

  return true;
}
