 function validateForm()
  {
     let name= document.forms["myForm"] ["Email"].value;
     if(name=="")
     {
   return false;
     
     }
     
    let password= document.forms["myForm"] ["Pass"].value;
     if(password=="")
     {
       alert("Password is required");
     return false;
     
     }
     
  
     
  }