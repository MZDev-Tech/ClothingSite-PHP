/* Encapsulating code inside an immediately invoked function expression (IIFE) to avoid error of identifier 
has already been declared when we excute/use script file in multiple files
*/

(function()
{
const profileData = document.querySelector('.profile-dropdown');
document.querySelector('#profile-btn').onclick = (event) => {
event.preventDefault(); // prevent the default action of window reloading
profileData.classList.toggle('active');
};

window.onscroll = () => {
profileData.classList.remove('active');

};


let dropdownMenu = document.querySelector('.sub-menu');
document.querySelector('.arrow-right').onclick = (e) => {
    e.preventDefault();
dropdownMenu.classList.toggle('active');
};


//Toggle btn for responsiveness
let toggleBtn = document.querySelector('.toggle-btn');
let SideBar = document.querySelector('#sidebar');
let MainPage = document.querySelector('#main-page');
let Header = document.querySelector("#header-part");
let crossBtn=document.querySelector(".sidebar-crossbtn");

toggleBtn.onclick = () => {
SideBar.classList.toggle('active');
MainPage.classList.toggle('active');
Header.classList.toggle('active');

};

crossBtn.onclick=()=>{
    SideBar.classList.remove('active'); 
}



//script to handle sidebar when width is decreased
// const sidebar_data = document.querySelector('#sidebar');
// // const menuItems = document.querySelectorAll('#sidebar .side-menu > li > a');

// const IconVisibility = () => {
//   const sidebarWidth = sidebar_data.offsetWidth;
//   console.log('Sidebar Width:', sidebarWidth);


//   menuItems.forEach(item => {
//     const icon = item.querySelector('i.icon');
//     const linkText = item.querySelector('span.link-text');

//     if (icon && linkText) {
//       if (sidebarWidth <= 70) {
//         icon.style.display = 'block';
//         linkText.style.display = 'none';
//         console.log('Icon or link text found for menu item:', item);

//       } else {
//         icon.style.display = 'block';
//         linkText.style.display = 'inline';

//       }
//     } else {
//       console.log('Icon or link text not found for menu item:', item);
//     }
//   });
// };

// // Call IconVisibility function initially and on window resize
// IconVisibility();
// window.addEventListener('resize', IconVisibility);


})();