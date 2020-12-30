function inquire(){
    document.getElementById("buyForm").classList.toggle("buyForm");
    document.getElementById("buyForm").style.visibility = "visible";
    document.getElementById("gradientForm").classList.toggle("gradientForm");
    document.body.style.overflow = "hidden"
}

if(document.getElementById("inquiring")){
    document.getElementById("inquiring").addEventListener("click",inquire)
} else if(document.getElementById("inquiringHold")){
    document.getElementById("inquiringHold").addEventListener("click",inquire)
} else if(document.getElementById("inquiringSold")){
    document.getElementById("inquiringSold").addEventListener("click",inquire)
}

function escInquire(){
    document.getElementById("buyForm").classList.remove("buyForm");
    document.getElementById("buyForm").style.visibility="hidden";
    document.getElementById("gradientForm").classList.remove("gradientForm");
    document.body.style.overflow="auto";
}

document.getElementById("gradientForm").addEventListener("click",escInquire);
document.addEventListener("keyup",function(e){if(e.keyCode===27){escInquire(e)}})