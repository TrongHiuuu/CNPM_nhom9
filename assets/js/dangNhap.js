const btnDangNhap = document.querySelector(".btnDangNhap");
const email = document.querySelector("#dangNhap_email");
const matkhau = document.querySelector("#dangNhap_matkhau");

const error_message_email = document.querySelector(".error_message_dangNhap_email");
const error_message_matkhau = document.querySelector(".error_message_dangNhap_matkhau");

const validateEmail = () => {
  let email_is_valid = false;
  const regexEmail =
    /^(([A-Za-z0-9]+((\.|\-|\_|\+)?[A-Za-z0-9]?)*[A-Za-z0-9]+)|[A-Za-z0-9]+)@(([A-Za-z0-9]+)+((\.|\-|\_)?([A-Za-z0-9]+)+)*)+\.([A-Za-z]{2,})+$/;

  if(email.value.trim() === "") {
    error_message_email.innerText = "Vui lòng nhập email của bạn";
    email_is_valid = false;
  } else if(!regexEmail.test(email.value.trim())) {
    error_message_email.innerText = "Vui lòng nhập đúng định dạng của email (Ví dụ: abc@example.com)";
    email_is_valid = false;
  } else {
    error_message_email.innerText = "";
    email_is_valid = true;
  }

  return email_is_valid;
}

const validateMatkhau = () => {
  let matkhau_is_valid = false;

  if(matkhau.value.trim() === "") {
    error_message_matkhau.innerText = "Mật khẩu không thể để trống";
    matkhau_is_valid = false;
  } else {
    error_message_matkhau.innerText = "";
    matkhau_is_valid = true;
  }

  return matkhau_is_valid;
}

const validateFormDangNhap = () => {
  let email_is_valid = validateEmail();
  let matkhau_is_valid = validateMatkhau();
  
  let form_is_valid = email_is_valid && matkhau_is_valid;
  return form_is_valid;
};

$(document).ready(function () {
    $(".btnDangNhap").click(function (e) {
      e.preventDefault();
      if (validateFormDangNhap()) {
        var $email = $("#dangNhap_email").val();
        var $password = $("#dangNhap_matkhau").val();
        
        $.ajax({
          url: "controller/dangNhap.controller.php",
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