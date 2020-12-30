let response = document.getElementsByClassName('mc4wp-response');
let alert = document.getElementsByClassName('mc4wp-alert');

let contact = document.getElementsByClassName('wpcf7-response-output');

let buyForm = document.getElementById('buyForm');

let buyResponse = document.getElementsByClassName('wpcf7-mail-sent-ng');

function responseAlert() {
    if(alert.length > 0) {
        response[0].classList.remove("responseAlert");
        response[0].style.display = "none";    
    } else if(contact.length > 0) {
        contact[0].classList.remove("responseAlert");
        contact[0].style.display = "none";
    }
}

window.addEventListener("load", (e) => {
    if(alert.length > 0) { // alerte mailchimp
        response[0].classList.add("responseAlert");
    } else if(contact.length > 0 && document.getElementById("formBuy") == null) { // alerte contact/sell
        contact[0].classList.add("responseAlert");
    } else if(contact.length > 0 && formBuy !== null) { // alerte buy
        buyForm.style.display = "block";
        buyForm.style.visibility = "hidden";
        contact[0].classList.add("responseAlert");
        contact[0].style.visibility = "visible";
    }

    document.getElementById("blockPage").addEventListener("click", function() {
        responseAlert();
    })
})