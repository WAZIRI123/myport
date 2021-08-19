const searchbar=document.querySelector(".users  .search  input"),
 btn=document.querySelector(".users .search  button"),
userList=document.querySelector(".users .users-list ");

btn.onclick=()=>{
      searchbar.classList.toggle("active");
     searchbar.focus();
      btn.classList.toggle("active");
   
}
searchbar.onkeyup=()=>{
let searchTerm=searchbar.value;
if (searchTerm!="") {
      searchbar.classList.add("active");

}else
{
     searchbar.classList.remove("active");
}

let xhr=new XMLHttpRequest();
xhr.open("POST","backend/searchBar.php", true);
xhr.onload=()=>{
 if (xhr.readyState===XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
         let data =xhr.response;
         userList.innerHTML= data; 
      }

 }

 }
 xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded" );
 xhr.send("searchTerm=" +searchTerm);

}


setInterval( ()=> {
 let xhr= new XMLHttpRequest;
     xhr.open("GET","backend/user.php", true);
     xhr.onload=()=>{
     if (xhr.readyState=== XMLHttpRequest.DONE){
          if (xhr.status===200) {
             let data=xhr.response; 
                if (!searchbar.classList.contains("active")) {
                    userList.innerHTML= data; 
  } 
      
          } 
     }
  }
 xhr.send();

}, 500);