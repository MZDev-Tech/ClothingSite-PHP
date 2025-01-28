
// Header Search Bar

let search = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    search.classList.toggle('active');
    ShoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    NavbarList.classList.remove('active');
    resetPassword.classList.remove('active');
    CreateAccount.classList.remove('active');


}

// Header Shopping Cart

let ShoppingCart = document.querySelector('.shopping_cart')

document.querySelector('#cart-btn').onclick = () => {
    ShoppingCart.classList.toggle('active');
    search.classList.remove('active');
    loginForm.classList.remove('active');
    NavbarList.classList.remove('active');
    resetPassword.classList.remove('active');
    CreateAccount.classList.remove('active');


}
// Header Shopping Cart close btn

document.querySelector('#cross-btn').addEventListener('click', () => {
    ShoppingCart.classList.remove('active');
});
// Header Login Form open through user icon on header

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    search.classList.remove('active');
    ShoppingCart.classList.remove('active');
    NavbarList.classList.remove('active');
    CreateAccount.classList.remove('active');
    resetPassword.classList.remove('active');
}



// Header Login Form open through button in registration form

let loginForm2 = document.querySelector('.login-form');

document.querySelector('#login-btn2').onclick = () => {
    loginForm2.classList.toggle('active');
    search.classList.remove('active');
    ShoppingCart.classList.remove('active');
    NavbarList.classList.remove('active');
    CreateAccount.classList.remove('active');
    resetPassword.classList.remove('active');
}



// Responsive Navbar List
let NavbarList = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    NavbarList.classList.toggle('active');
    search.classList.remove('active');
    ShoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    CreateAccount.classList.remove('active');
    resetPassword.classList.remove('active');
}

window.onscroll = () => {
    search.classList.remove('active');
    ShoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    NavbarList.classList.remove('active');
    CreateAccount.classList.remove('active');
    resetPassword.classList.remove('active');

}
//Registration Close btn
document.querySelector('#close-btn').onclick = () => {
    CreateAccount.classList.remove('active');

}

let CreateAccount = document.querySelector('.register-form');
document.querySelector('#create-account').onclick = () => {
    CreateAccount.classList.toggle('active');
    ShoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    NavbarList.classList.remove('active');
    resetPassword.classList.remove('active');
}

let resetPassword = document.querySelector('.forget-form');
document.querySelector('#reset-btn').onclick = () => {
    resetPassword.classList.toggle('active');
    ShoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    NavbarList.classList.remove('active');
    CreateAccount.classList.remove('active');

}

//Swiper For Products
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".product-slider", {
        loop: true,
        spaceBetween: 16,
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1020: {
                slidesPerView: 4,
            },
        },
    });
});



