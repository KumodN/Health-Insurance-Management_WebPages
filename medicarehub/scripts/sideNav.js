var menuBtn = document.getElementById("menuBtn");
var sideNav = document.getElementById("sideNav");

sideNav.style.right = "-250px";
menuBtn.onclick = function(){
if(sideNav.style.right == "-250px"){
sideNav.style.right = "0";
      }
      else{
        sideNav.style.right = "-250px";
      }
    }
