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

function validateRegisterForm() {
    let username = document.getElementById('username').value;
    document.getElementById('usernameError').innerText = '';
    let email = document.getElementById('email').value;
    document.getElementById('emailError').innerText = '';
    let password = document.getElementById('password').value;
    document.getElementById('passwordError').innerText = '';
    let confirmpassword = document.getElementById('confirmpassword').value;
    document.getElementById('confirmpassword').innerText = '';

    if (!usernameRegex.test(username)) {
        // document.getElementById("usernameError").innerText = 'Invalid Username';
        return;
    }
    if (!emailRegex.test(email)) {
        // document.getElementById("emailError").innerText = 'Invalid Email';
        return;
    }
    if (!passwordRegex.test(password)) {
        // document.getElementById("passwordError").innerText = 'Invalid Password';
        return;
    }
    if(confirmpassword === '' || confirmpassword !== password){
        // alert("Passwords do not match");
        // confirmpassword.focus();
        return false;
    }
}
///////////////////////////////////////////////////////////////
//Kodi per validimin e faqes Log in

function validateLogInForm(){
    let username = document.getElementById('username').value;
    document.getElementById("usernameError").innerText = '';
    let password = document.getElementById('password').value;
    document.getElementById("passwordError").innerText = '';

    if(!usernameRegex.test(username)) {
        return;
    }
    if(!passwordRegex.test(password)) {
        return;
    }
}
//////////////////////////////////////////////////////////////
// Kodi per validimin e product

let productnameRegex = /^[a-zA-Z]{3,}$/;
let productshortcutRegex = /^[a-zA-Z]{1,3}$/;
let productlastpriceRegex = /^\d+(\.\d+)?$/;
let productpercRegex = /^-?([1-9][0-9]?|100)$/;
let productmarketcapRegex = /^\d+(\.\d+)?$/;
function validateProduct(){
    let productname = document.getElementById("prodname").value;
    document.getElementById("productnameError").innerText = '';
    let productshortcut = document.getElementById("prodshortcut").value;
    document.getElementById("productshortcutError").innerText = '';
    let productlastprice = document.getElementById("prodlastprice").value;
    document.getElementById("productlastpriceError").innerText = '';
    let productperc = document.getElementById("prodperc").value;
    document.getElementById("productpercError").innerText = '';
    let productmarketcap = document.getElementById("prodmarketcap").value;
    document.getElementById("productmarketcapError").innerText = '';

    if(!productnameRegex.test(productname)){
        //document.getElementById("productnameError").innerText = 'Invalid name!';
        return;
    }
    if(!productshortcutRegex.test(productshortcut)){
        //document.getElementById("productshortcutError").innerText = 'Invalid shortcut!';
        return;
    }
    if(!productlastpriceRegex.test(productlastprice)){
        //document.getElementById("productlastpriceError").innerText = 'Invalid price!';
        return;
    }
    if(!productpercRegex.test(productperc)){
        //document.getElementById("productpercError").innerText = 'Invalid percentage!';
        return;
    }
    if(!productmarketcapRegex.test(productmarketcap)){
        //document.getElementById("productmarketcapError").innerText = 'Invalid market cap!';
        return;
    }
}

////////////////////////////////////////////////////////////////
//Kodi per dropdown.
function toggleDropdown() {
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('show');
}

document.addEventListener("click", function(event) {
    if (!event.target.matches('dropdown-button')) {
        var dropdownContent = document.querySelector('dropdown-content');
        if (dropdownContent.classList.contains('show')) {
            dropdownContent.classList.remove('show');
        }
    }
});

