//Kodi per Menu-n responsive
let menu = document.querySelector('header #menu-icon');
let navlist = document.querySelector('header nav ul');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}
////////////////////////////////////////////////////////////////
//Kodi per Slider-in
let productContainers = [...document.querySelectorAll('.product-container')];
let nxtBtn = [...document.querySelectorAll('.nxt-btn')];
let preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
});
////////////////////////////////////////////////////////////////
//Kodi per validimin e faqes Register

let usernameRegex = /^[a-zA-Z\-]+$/;
let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

function validateForm() {
    let username = document.getElementById('username').value;
    document.getElementById('usernameError').innerText = '';
    let email = document.getElementById('email').value;
    document.getElementById('emailError').innerText = '';
    let password = document.getElementById('password').value;
    document.getElementById('passwordError').innerText = '';
    let confirmpassword = document.getElementById('confirmpassword').value;
    document.getElementById('confirmpassword').innerText = '';

    if (!usernameRegex.test(username)) {
        document.getElementById("usernameError").innerText = 'Invalid Username';
        return;
    }
    if (!emailRegex.test(email)) {
        document.getElementById("emailError").innerText = 'Invalid Email';
        return;
    }
    if (!passwordRegex.test(password)) {
        document.getElementById("passwordError").innerText = 'Invalid Password';
        return;
    }
    if(confirmpassword === '' || confirmpassword !== password){
        alert("Passwords do not match");
        confirmpassword.focus();
        return false;
    }
    alert("Registration submitted successfully");
}
///////////////////////////////////////////////////////////////