const form =document.querySelector(".signup form "),
submitbtn=document.querySelector(".signup .button input");
errorText=document.querySelector(".error-text");
form.onsubmit=(e)=>{
   e.preventDefault(); //prevent form from submit
}
submitbtn.onclick=()=>{
 let xrm=new XMLHttpRequest(); //creat the xml object
 xrm.open("POST", "backend/signup.php",true);
xrm.onload=()=>{
if (xrm.readyState===XMLHttpRequest.DONE){
  if( xrm.status===200){
     let data= xrm.response;
      if (data=="success") {
     errorText.textContent=data;
     errorText.style.display='block';
    
      } 
      else {
         errorText.textContent=data;
         errorText.style.display='block';
      }
   }
}
}
//send data to php
let formData = new FormData(form); //create new php object
 xrm.send(formData);//send data to sign-up.php

}