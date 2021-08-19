const pwd=document.querySelector(".form input[type='password']"), 
pswdbtn=document.querySelector(".form .field i");
pswdbtn.onclick = () => {
  if (pwd.type == "password" ) 
  {
    pwd.type = "text";
    pswdbtn.classList.add("active"); 
  } 
  else {
     pwd.type = "password";
     pswdbtn.classList.remove("active"); 
  }
}