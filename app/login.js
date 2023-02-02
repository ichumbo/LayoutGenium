const login_btn = document.querySelector('.login_btn');
const recover = document.querySelector('.recover');
const login = document.querySelector('.login');
const welcome = document.querySelector('.welcome');
const recover_btn = document.querySelector('.recover_btn');

login_btn.addEventListener('click', () => {
    login.classList.add('active');
    welcome.classList.add('active');
    login_btn.classList.add('active');
    recover_btn.classList.add('active');
    recover.classList.add('active');
})

recover_btn.addEventListener('click', () => {
    login.classList.remove('active');
    welcome.classList.remove('active');
    login_btn.classList.remove('active');
    recover_btn.classList.remove('active');
    recover.classList.remove('active');
})