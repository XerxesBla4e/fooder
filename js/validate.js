function validateinput(){

 if(document.clientForm.fullname.value==""){
     alert("Input Your Name");
     document.clientForm.Name.focus();
     return false;
 }

 var pswd = document.clientForm.contact.value;
 if(pswd.length<10||pswd.length>15){
     alert("Telephone number is incorrect")
     document.clientForm.contact.focus();
     return false;
 }

 var nme = document.clientForm.fullname.value;
  if(!isNaN(nme)){
   document.getElementById("name1").innerHTML="Only characters allowed";
   document.clientForm.contact.focus();
   return false;
 }

 /*
 if(document.clientForm.location.value=="-1"){
     alert("Please Select A location");
     document.clientForm.location.focus();
     return false;
 }*/

 var p_match = /^(?=.*\d)(?=.*[a-z])(?=.[A-Z])(?=.*[a-z A-Z 0-9]).{8,25}$/;
 if(document.clientForm.password.value.match(!p_match)){

 }
 
 if(document.clientForm.email.value==""){
    document.getElementById("email1").innerHTML="Please Fill in the email address";
    document.clientForm.Email.focus();
    return false;
}

 var useremail = document.clientForm.Email.value;
 atpos = useremail.indexOf("@");
 dotpos = useremail.lastIndexOf(".");
 if(atpos<1 || dotpos-atpos <2){
     alert("Input email in the right order")
     return false;
 }

 return true;
}