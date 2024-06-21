const showPopupButton = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupButton = document.querySelector(".form-popup .close-btn");
const loginSignuplink = document.querySelectorAll(".form-box .bottom-link a");
//On click show log-in form popup
showPopupButton.addEventListener("click", () => {
  document.body.classList.toggle("show-popup");
});

//On click hide popup
hidePopupButton.addEventListener("click", () => showPopupButton.click());

//On link click
loginSignuplink.forEach(link => {
  link.addEventListener("click", (e) => {
      e.preventDefault();
      formPopup.classList[link.id === "signup-link" ? 'add' : 'remove']("show-sign-up");
  });
});

const navbarMenu = document.querySelector(".navbar .links");
const menuButton = document.querySelector(".menu-btn");
const hideMenuButton = document.querySelector(".links .close-btn")
//On click mobile menu button
menuButton.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

//Close mobile menu button
hideMenuButton.addEventListener("click", () => menuButton.click());


//show password
function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

//User type
document.getElementById("UserType").addEventListener("change", function() {
    // Retrieve the selected value from the dropdown
    var userType = this.value;
    
    // Update the value in the input field
    document.getElementById("user_type").value = userType;
});