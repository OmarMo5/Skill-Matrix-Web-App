 document.getElementById('button').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display='flex';
 });
 document.querySelector('.close').addEventListener('click',function(){
    document.querySelector('.bg-modal').style.display ='none';
 })
 

 var pos = document.getElementById("position_pop");

 var posbtn = document.getElementById("popup");
 
 var closepos = document.getElementsByClassName("close")[0];
 
 posbtn.onclick = function() {
   pos.style.display = "block";
 }
 
 closepos.onclick = function() {
   pos.style.display = "none";
 }
 
 window.onclick = function(event) {
   if (event.target == pos) {
     pos.style.display = "none";
   }
 }


 var eg = document.getElementById("egroup_pop");

 var egbtn = document.getElementById("eg_popup");
 
 var span = document.getElementsByClassName("eg_close")[0];
 
 egbtn.onclick = function() {
   eg.style.display = "block";
 }
 span.onclick = function() {
   eg.style.display = "none";
 }
 
 window.onclick = function(event) {
   if (event.target == eg) {
     eg.style.display = "none";
   }
 }



 var ss = document.getElementById("s_skillspop");

 var ssbtn = document.getElementById("s_spopup");
 
 var ssclose = document.getElementsByClassName("ss_close")[0];
 
 ssbtn.onclick = function() {
   ss.style.display = "block";
 }
 ssclose.onclick = function() {
   ss.style.display = "none";
 }
 
 window.onclick = function(event) {
   if (event.target == ss) {
     ss.style.display = "none";
   }
 }



 var eo = document.getElementById("e_opop");

 var eobtn = document.getElementById("eo_popup");
 
 var eoclose = document.getElementsByClassName("eo_close")[0];
 
 eobtn.onclick = function() {
   eo.style.display = "block";
 }
 eoclose.onclick = function() {
   eo.style.display = "none";
 }
 
 window.onclick = function(event) {
   if (event.target == eo) {
     eo.style.display = "none";
   }
 }

document.addEventListener('DOMContentLoaded',()=>{
   const selectdrop =document.getElementById('countries');
   fetch('https://restcountries.com/v2/all').then(res=>{
      return res.json();
   }).then(data=>{
      let output="";
      data.forEach(country=>{
         output+=`<option value="${country.name}">${country.name}</option>`;
      })
      selectdrop.innerHTML=output;
   }).catch(err=>{
      console.log(err);
   })

});


function idval(){
   if(document.getElementById("employeeid").value===''&&document.getElementById("employeename").value===''&&
   document.getElementById("employeePosition").value===''&&document.getElementById("employeeGroup").value==='')
      return false;
   else
      alert("you have successfully added an employee");
}

function validateForm() {
   let x = document.forms["myForm"]["username"].value;
   for (var i=0, len = x.length; i<len; ++i) {
      if (string.charAt(i) === ' ') {
          alert('Name cannot have spaces!');
          break;
      }
  }
 }
