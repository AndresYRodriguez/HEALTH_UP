const input = document.querySelector(".Email-input"),
    emailIcon = document.querySelector(".email-icon")

input.addEventListener("keyup", () => {
    let pattern = '@gmail.com';

    if (input.value === "") {
        emailIcon.classList.replace("uil-check-circle", "uil-envelope");
        return emailIcon.style.color = "#b4b4b4";
    }
    if (input.value.match(pattern)) {
        emailIcon.classList.replace("uil-envelope", "uil-check-circle");
        return emailIcon.style.color = "#4bb543"
    }
    emailIcon.classList.replace("uil-check-circle", "uil-envelope");
    emailIcon.style.color = "#de0611";
})