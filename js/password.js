const pwShowHide = document.querySelectorAll(".ShowHidePw"),
      pwFields = document.querySelectorAll(".Contraseña");

pwShowHide.forEach(eyeIcon => {
      eyeIcon.addEventListener("click", () => {
            pwFields.forEach(pwFields => {
                  if (pwFields.type === "password") {
                        pwFields.type = "text";

                        pwShowHide.forEach(icon => {
                              icon.classList.replace("uil-eye-slash", "uil-eye");
                        })
                  }else {
                        pwFields.type = "password";
                        pwShowHide.forEach(icon => {
                              icon.classList.replace("uil-eye", "uil-eye-slash");
                        }) 
                  }
            })
      })
})