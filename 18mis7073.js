function fun(){
    var val=document.getElementById("add");
    if(val.value===""){
        document.getElementById("error").innerHTML="ENTER THE TEXT";
        
    }
    if((val.value%1)==0&&val.value!=""){
        document.getElementById("error").innerHTML="Numbers are not allowed";
    }
    else if(isNaN(val.value)){
        var div=document.createElement("DIV");
        var para = document.createElement("P");
        var t = document.createTextNode(val.value);
        var span=document.createElement("SPAN");
        var button=document.createElement("BUTTON");
        var t1 = document.createTextNode("X");

        
        div.className="addition";
        button.className="delete";
        span.className="rr";
        
        
        button.appendChild(t1);
        span.appendChild(button);               
        para.appendChild(t);             

        div.appendChild(span);
        div.appendChild(para);

        

        document.getElementById("box1").appendChild(div);    


        var toremove=document.createElement("DIV");
        var warn=document.createTextNode("Are you sure you want to delete");
        var buttons=document.createElement("DIV");
        var button1=document.createElement("BUTTON");
        var no=document.createTextNode("YES");
        var button2=document.createElement("BUTTON");
        var yes=document.createTextNode("NO");

        button2.appendChild(no);
        button1.appendChild(yes);

        buttons.appendChild(button1);
        buttons.appendChild(button2);

        toremove.appendChild(warn);
        toremove.appendChild(buttons);

        toremove.id="toremove";
        toremove.className="toremove";
        buttons.className="buttons";
        button1.id="button1";

        button2.id="button2"

        
        var close = document.getElementsByClassName("delete");
        var i;
        for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var divs = this.parentElement;
            document.getElementById("box1").appendChild(toremove); 
            document.getElementById("button1").onclick=function(){
                document.getElementById("toremove").remove();
            }
            document.getElementById("button2").onclick=function(){
                divs.parentElement.remove();
                document.getElementById("toremove").remove();

            }
            
            
        }
        }                                

    }
}

function fun2(){
    var a=0;
    a++;
    var x=document.getElementById("box1");
    x.className="reverse";
   
}

