
$('.count').counterUp({
    delay:10,
    time:3000
})

let email = document.getElementById('email').value;
let name = document.getElementById('name').value;
let phone = document.getElementById('phone').value;
let message = document.getElementById('message').value;

function checkvalidation(){
    debugger;
    if(name == "" ){
        alert("Please Fill the username Id");
        return false;
    }
    
    if(email == ""){
        alert("Please Fill the Email Id");
        return false;
    }
    if(phone == ""){
        alert("Please Fill the Phone Number");
        return false;
    }
    return false
}
function checknewsletter(){
    let newsletter = document.getElementById('newsletter').value;

    if(newsletter == ""){
        alert("Please Fill the Email Id");
        return false;
    }
    return true;
}
mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
