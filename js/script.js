const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });

//Password confirmation
     var pass_check = function() {
                if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('password_warning').style.color = 'green';
                document.getElementById('password_warning').innerHTML = 'matching';
                } else {
                document.getElementById('password_warning').style.color = 'red';
                document.getElementById('password_warning').innerHTML = 'not matching';
              }
            }



//Password confirmation
     var pass_check = function() {
                if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('password_warning').style.color = 'green';
                document.getElementById('password_warning').innerHTML = 'matching';
                } else {
                document.getElementById('password_warning').style.color = 'red';
                document.getElementById('password_warning').innerHTML = 'not matching';
              }
            }