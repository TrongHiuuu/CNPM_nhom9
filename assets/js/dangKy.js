const btnDangKy = document.querySelector(".btnDangKy");
const tenTK = document.querySelector("#dangKy_tenTK");
const email = document.querySelector("#dangKy_email");
const dienthoai = document.querySelector("#dangKy_dienthoai");
const matkhau = document.querySelector("#dangKy_matkhau");
const xac_nhan_matkhau = document.querySelector("#dangKy_xac_nhan_matkhau");

const error_message_tenTK = document.querySelector(".error_message_dangKy_tenTK");
const error_message_email = document.querySelector(".error_message_dangKy_email");
const error_message_dienthoai = document.querySelector(".error_message_dangKy_dienthoai");
const error_message_matkhau = document.querySelector(".error_message_dangKy_matkhau");
const error_message_xac_nhan_matkhau = document.querySelector(".error_message_dangKy_xac_nhan_matkhau");

const validateTenTK = () => {
  let tenTK_is_valid = false;
  const regexFullName = /[a-zA-ZÀ-ỹ]+(\s[a-zA-ZÀ-ỹ]+){1,}$/;

  if(tenTK.value.trim() === "") {
    error_message_tenTK.innerText = "Vui lòng nhập họ tên của bạn";
    tenTK_is_valid = false;
  } else if (!regexFullName.test(tenTK.value.trim())) {
    error_message_tenTK.innerText = "Họ và tên chỉ được bao gồm chữ cái (Ví dụ: Trần Đức Bo)"
    tenTK_is_valid = false;
  } else {
    error_message_tenTK.innerText = "";
    tenTK_is_valid = true;
  }

  return tenTK_is_valid;
}

const validateEmail = () => {
  let email_is_valid = false;
  //Định dạng email
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

const validateDienthoai = () => {
  let dienthoai_is_valid = false;
  //Định dạng số điện thoại
  const regexPhoneNumber = /^0[0-9]{9}$/;

  if(dienthoai.value.trim() === "") {
    error_message_dienthoai.innerText = "Vui lòng nhập số điện thoại của bạn";
    dienthoai_is_valid = false;
  } else if (!regexPhoneNumber.test(dienthoai.value.trim())) {
    error_message_dienthoai.innerText = "Vui lòng nhập đúng số điện thoại";
    dienthoai_is_valid = false;
  } else {
    error_message_dienthoai.innerText = "";
    dienthoai_is_valid = true;
  }

  return dienthoai_is_valid;
}

const validateMatkhau = () => {
  let matkhau_is_valid = false;
  //Định dạng mật khẩu
  const regexPassword = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

  if(matkhau.value.trim() === "") {
    error_message_matkhau.innerText = "Mật khẩu không thể để trống";
    matkhau_is_valid = false;
  } else if (!regexPassword.test(matkhau.value.trim())) {
    error_message_matkhau.innerText = "Mật khẩu phải có tối thiểu 8 ký tự, bao gồm ít nhất một chữ số và một kí tự in hoa (Ví dụ: examPle2)";
    matkhau_is_valid = false;
  } else if(matkhau.value.trim() !== xac_nhan_matkhau.value.trim()) {
    error_message_matkhau.innerText = "Mật khẩu phải trùng khớp với xác nhận mật khẩu"
    matkhau_is_valid = false;
  }
  else {
    error_message_matkhau.innerText = "";
    matkhau_is_valid = true;
  }

  return matkhau_is_valid;
}

const validateXacNhanMatkhau = () => {
  let xac_nhan_matkhau_is_valid = false;
  //Định dạng mật khẩu

  if(xac_nhan_matkhau.value.trim() === "") {
    error_message_xac_nhan_matkhau.innerText = "Xác nhận mật khẩu không thể để trống";
    xac_nhan_matkhau_is_valid = false;
  } else if(matkhau.value.trim() !== xac_nhan_matkhau.value.trim()) {
    error_message_xac_nhan_matkhau.innerText = "Xác nhận mật khẩu phải trùng khớp với mật khẩu";
    xac_nhan_matkhau_is_valid = false;
   } else {
    error_message_xac_nhan_matkhau.innerText = "";
    xac_nhan_matkhau_is_valid = true;
  }

  return xac_nhan_matkhau_is_valid;
}

const validateFormDangKy = () => {
  let tenTK_is_valid = validateTenTK()
  let email_is_valid = validateEmail();
  let dienthoai_is_valid = validateDienthoai();
  let matkhau_is_valid = validateMatkhau()
  let xac_nhan_matkhau_is_valid = validateXacNhanMatkhau()
  let form_is_valid = tenTK_is_valid &&
                                 email_is_valid &&
                                 dienthoai_is_valid &&
                                 matkhau_is_valid &&
                                 xac_nhan_matkhau_is_valid;
  return form_is_valid;
}

$(document).ready(function () {
  $(".btnDangKy").click(function (e) {
    e.preventDefault();
    if (validateFormDangKy()) {
      var $tenTK = $("#dangKy_tenTK").val();
      var $email = $("#dangKy_email").val();
      var $dienthoai = $("#dangKy_dienthoai").val();
      var $matkhau = $("#dangKy_matkhau").val();
      var $xac_nhan_matkhau = $("#dangKy_xac_nhan_matkhau").val();

      $.ajax({
        url: "controller/dangKy.controller.php",
        type: "post",
        dataType: "html",
        data: {
          dangKy_tenTK: $tenTK,
          dangKy_email: $email,
          dangKy_dienthoai: $dienthoai,
          dangKy_matkhau: $matkhau,
          dangKy_xac_nhan_matkhau: $xac_nhan_matkhau,
        },
      }).done(function (result) {
        try {
          const data = JSON.parse(result);
          if (data.success) {
            window.location.href = "index.php";
            alert(data.message);
          } else {
            alert(data.message);
            // $(".result").html(data.message);
          }
        } catch (e) {
          console.error("Error parsing JSON:", e);
          alert("Đã có lỗi xảy ra trong quá trình đăng ký...");
        }
      });
    }
  });
});
