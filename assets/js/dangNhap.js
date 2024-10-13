const btnDangNhap = document.querySelector(".btnLogin");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
const errMessageEmail = document.querySelector(".errMessageEmail");
const errMessagePassword = document.querySelector(".errMessagePassword");

const validationFormLogin = () => {
    let isNotEmptyEmail = false;
    let isNotEmptyPassword = false;
  
    if (loginEmail.value.trim() == "") {
      errMessageEmail.innerText = "Vui lòng điền email";
      isNotEmptyEmail = false;
    } else {
      errMessageEmail.innerText = "";
      isNotEmptyEmail = true;
    }
  
    if (loginPassword.value.trim() == "") {
      errMessagePassword.innerText = "Vui lòng điền mật khẩu";
      isNotEmptyPassword = false;
    } else {
      errMessagePassword.innerText = "";
      isNotEmptyPassword = true;
    }
  
    return isNotEmptyEmail && isNotEmptyPassword;
};

$(document).ready(function () {
    $(".btnLogin").click(function (e) {
      e.preventDefault();
      if (validationFormLogin()) {
        var $email = $("loginEmail").val();
        var $password = $("loginPassword").val();
        $.ajax({
          url: "controller/login.controller.php",
          type: "post",
          dataType: "html",
          data: {
            emailLogin: $email,
            passwordLogin: $password,
          },
        }).done(function (result) {
          const data = JSON.parse(result);
          if (data.success) {
            window.location.href = "index.php";
            alert(data.message);
          } else {
            alert(data.message);
            // $(".result").html(data.message);
          }
        });
      }
    });
});