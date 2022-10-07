const body = document.querySelector("body"),
      sidebar = body.querySelector("nav"),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch");
      modeText = body.querySelector(".mode-text");

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");
}      

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if (sidebar.classList.contains("close")) {
        localStorage.setItem("status", "close");
    } else {
        localStorage.setItem("status", "open");
    }
});

modeSwitch.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "modo claro";
        localStorage.setItem("mode", "dark");
    } else {
        modeText.innerText = "modo oscuro";
        localStorage.setItem("mode", "light");
    }
});