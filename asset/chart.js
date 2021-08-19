const form = document.querySelector(".typing-area"),
      fieldInput = form.querySelector(".input-field"),
      
      sendbtn = form.querySelector("button"),
      chartBox = document.querySelector(".chart-box");
    

    form.onsubmit= (e)=>{
   e.preventDefault();
      }
 
   sendbtn.onclick= ()=>{
   let xhr=new XMLHttpRequest();
   xhr.open("POST","backend/chart.php", true);
    xhr.onload = ()=>{
       if (xhr.readyState ===  XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
          fieldInput .value="";
           scrowToBottom();
          }
       }
    }
   let formData = new FormData(form);
   xhr.send(formData);

   }
     chartBox.onmouseenter=()=>{
         chartBox.classList.add("active");
      }
      chartBox.onmouseleave=()=>{
         chartBox.classList.remove("active");
      }
setInterval(()=>{
   let xhr= new XMLHttpRequest();
   xhr.open("POST", "backend/get-chat.php", true);
   xhr.onload = ()=>{
   if (xhr.readyState === XMLHttpRequest.DONE){
      if (xhr.status===200) {
         let data=xhr.response;
           chartBox.innerHTML=data;
          
           if (!chartBox.classList.contains("active")) {
               scrowToBottom();
           }
      }
   }
   }
    let formData = new FormData(form);
   xhr.send(formData);
},500);
   
   
function scrowToBottom(){
   chartBox.scrollTop=chartBox.scrollHeight;
}