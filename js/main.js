/* ============================================================================================================================ */
/* Register and Login modal */
/* ============================================================================================================================ */

// Register Modal

// Get DOM Elements
const registerModal = document.querySelector('#my-register-modal');
const registerModalBtn = document.querySelector('#register-modal-btn');
const registerCloseBtn = document.querySelector('.register-close-modal');

// Events
if(!!registerModalBtn){
    registerModalBtn.addEventListener('click', registerOpenModal);
}
if(!!registerCloseBtn){
    registerCloseBtn.addEventListener('click', registerCloseModal);

}
window.addEventListener('click', registerOutsideClick);

// Open
function registerOpenModal() {
    registerModal.style.display = 'block';
}

// Close
function registerCloseModal() {
    registerModal.style.display = 'none';
}

// Close If Outside Click
function registerOutsideClick(e) {
    if (e.target == registerModal) {
        registerModal.style.display = 'none';
    }
}

// Login Modal

// Get DOM Elements
const loginModal = document.querySelector('#my-login-modal');
const loginModalBtn = document.querySelector('#login-modal-btn');
const loginCloseBtn = document.querySelector('.login-close-modal');

// Events
if(!!loginModalBtn){
    loginModalBtn.addEventListener('click', loginOpenModal);

}
if(!!loginCloseBtn){
    loginCloseBtn.addEventListener('click', loginCloseModal);
}
window.addEventListener('click', loginOutsideClick);

// Open
function loginOpenModal() {
    loginModal.style.display = 'block';
}

// Close
function loginCloseModal() {
    loginModal.style.display = 'none';
}

// Close If Outside Click
function loginOutsideClick(e) {
    if (e.target == loginModal) {
        loginModal.style.display = 'none';
    }
}

/* ============================================================================================================================ */
/* Navigation Bar */
/* ============================================================================================================================ */
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li a');

burger.addEventListener('click', toggleNavbar);
function toggleNavbar() {
    // Toggle Navbar
    nav.classList.toggle('nav-active');
    // Animate Links
    navLinks.forEach((link, index)=>{
        if(link.style.animation){
            link.style.animation = '';
        }else{
            link.style.animation = `navLinkFade 0.2s ease forwards ${index/100 + 0.1}s`;
        }
    });
    // Burger Animation
    burger.classList.toggle('toggle');
    
}
