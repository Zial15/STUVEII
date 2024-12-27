const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btnloginpopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.onclick = () => {
  wrapper.classList.add('active');
};

loginLink.onclick = () => {
  wrapper.classList.remove('active');
};

btnloginpopup.onclick = () => {
  wrapper.classList.add('active-popup');
};

iconClose.onclick = () => {
  wrapper.classList.remove('active-popup');
  wrapper.classList.remove('active');
};

// toggle class active untuk hamburger menu
const navbarNav = document.querySelector ('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};
