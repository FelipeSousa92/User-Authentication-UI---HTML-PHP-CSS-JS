const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnClose = document.querySelector('.icon-close');
const mainSection = document.querySelector('.main-section');
const mobileLinks = document.querySelector('.mobile-menu-options');
const webLoginBtn = document.getElementById('webLoginBtn');
const mobileLoginBtn = document.getElementById('mobileLoginBtn');

// select the "register" link element and add a click event listener to it
registerLink.addEventListener('click', ()=>{
    // add the 'active' class to the 'wrapper' element
    wrapper.classList.add('active');
});

// select the "login" link element and add a click event listener to it
loginLink.addEventListener('click', ()=>{
    // remove the 'active' class from the 'wrapper' element
    wrapper.classList.remove('active');
});

webLoginBtn.addEventListener('click', ()=>{
    // When the web login button is clicked
    wrapper.classList.add('active-popup');  // Add the 'active-popup' class to the wrapper
    mainSection.style.display = 'none';  // Hide the main section
})

mobileLoginBtn.addEventListener('click', () => {
    // When the mobile login button is clicked
    if(wrapper.classList.contains('active-popup')){
        // If the wrapper already has the 'active-popup' class
        wrapper.classList.remove('active-popup');  // Remove the 'active-popup' class from the wrapper
        mainSection.style.display = 'flex';  // Show the main section
    } else{
        // If the wrapper does not have the 'active-popup' class
        wrapper.classList.add('active-popup');  // Add the 'active-popup' class to the wrapper
        mainSection.style.display = 'none';  // Hide the main section
        mobileLinks.classList.remove('activeMobile');  // Remove the 'activeMobile' class from the mobile links
    }
});

// Add event listener to the btnClose element, which is a button, that closes the popup
btnClose.addEventListener('click', ()=>{
    // Remove 'active-popup' class from the wrapper element to hide the popup
    wrapper.classList.remove('active-popup');
    // Show the main section by setting its display to flex
    mainSection.style.display = 'flex';
});

// This function opens/closes the mobile menu by toggling the 'activeMobile' class on the 'mobileLinks' element
function menuMobileOpen(){
    // If the 'activeMobile' class is already on the element, remove it to close the menu
    if(mobileLinks.classList.contains('activeMobile')){
        mobileLinks.classList.remove('activeMobile');
    } 
    // If the 'activeMobile' class is not on the element, add it to open the menu
    else{
        mobileLinks.classList.add('activeMobile');
    }
};