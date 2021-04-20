function validate(){
    var user=document.getElementById("username");
    var pass=document.getElementById("password");
    var cap=document.getElementById("captcha");
    var box1=document.getElementById('box1');
    var box2=document.getElementById('box2');
    var box3=document.getElementById('captcha');
    

    if(user.value!="18mis7073@vitap.ac.in"){
        box1.style.borderColor="red";
        document.getElementById("er1").innerHTML="Incorrect username";
        document.getElementById("main").style.height="400px";
    }
    if(pass.value!="18mis7073"){
        box2.style.borderColor="red";
        document.getElementById("er2").innerHTML="Incorrect password";
        document.getElementById("main").style.height="400px";
    }
    if(cap.value!="18MIS7073"){
        box3.style.borderColor="red";
        document.getElementById("er3").innerHTML="Invalid captcha";
        document.getElementById("main").style.height="400px";
    }
 
     else{
         document.getElementById("success").innerHTML="Login Successful";
     }  
    
}