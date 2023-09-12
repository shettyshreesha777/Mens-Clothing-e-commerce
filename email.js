function ValidateEmail(logemail,passwd) {

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  s1="";s2="";
    if (logemail.value.match(validRegex) && (passwd!=null)) {
  
     // return true;
  
    } 
    else {
        if(!logemail.value.match(validRegex)){
  
            s1="Invalid email address!";
  
        }
        if (passwd.value.match("")) {
  
            s2="Please enter the password!";
    
        } 
      if(s1!="" || s2!="")
        alert(s1+"\n"+s2);
    }
  }
