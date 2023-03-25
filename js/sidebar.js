const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    closeBtn = body.querySelector("#btn"),
    ModeSwitch = body.querySelector(".toggle-switch"),
    ModeText = body.querySelector(".mode-text"),
    ModeIcon = body.querySelector(".moon");
    
let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

ModeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        ModeText.innerText = "Modo claro";
        ModeIcon.classList.replace("bx-moon", "bx-sun");
        localStorage.setItem("mode", "dark");
    } else {
        ModeText.innerText = "Modo oscuro";
        ModeIcon.classList.replace("bx-sun", "bx-moon");
        localStorage.setItem("mode", "light");
    }
});

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    menuBtnChange();
});

function menuBtnChange() {
    if (sidebar.classList.contains("close")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        localStorage.setItem("status", "close");
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        localStorage.setItem("status", "open");
    }
}