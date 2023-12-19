// ==========================================================================
// JavaScript Sidebar
// ==========================================================================

const btnHamburger = document.querySelector(".btn-hamburger");
const sideBar = document.querySelector(".sidebar");
const main = document.querySelector(".main");
const sideBarActive = document.querySelector(".sidebar-active");

let isToggled = false;

btnHamburger.addEventListener("click", () => {
    //cookieSection.show();
    
    
    console.log(isToggled);

    if (!isToggled)
    {
        //sideBar.style.display = "block";
        isToggled = true;
        main.classList.add("sidebar-active");
        btnHamburger.classList.add("hamburger-spin");
        btnHamburger.classList.remove("hamburger-spin-backwards");
    }
    else
    {
        //sideBar.style.display = "none";
        isToggled = false;
        main.classList.remove("sidebar-active");
        btnHamburger.classList.add("hamburger-spin-backwards");
        btnHamburger.classList.remove("hamburger-spin");
        
    }
    
})