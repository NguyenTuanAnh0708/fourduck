// element form login
const gmailLogin = document.querySelector("#gmailLogin");
const passwordLogin = document.querySelector("#passwordLogin");
const formLogin = document.querySelector("#formLogin");
// element form register
const nameRegister = document.querySelector("#nameRegister");
const gmailRegister = document.querySelector("#gmailRegister");
const passwordRegister = document.querySelector("#passwordRegister");
const enterPasswordRegister = document.querySelector("#enterPasswordRegister");
const phoneRegister = document.querySelector("#phoneRegister");
const locationRegister = document.querySelector("#locationRegister");
// hàm kiểm tra
function showError(input, text) {
  const inputBox = input.parentElement;
  const parent = inputBox.parentElement;
  const error = parent.querySelector("label");
  error.innerText = text;
}
function success(input) {
  const inputBox = input.parentElement;
  const parent = inputBox.parentElement;
  const error = parent.querySelector("label");
  error.innerText = "";
}
function checkEmtyInput(listInput) {
  let isEmptyError = false;
  listInput.forEach((input) => {
    input.value = input.value.trim();
    if (!input.value) {
      isEmptyError = true;
      showError(input, "Không được để trống ! ");
    } else {
      success(input);
    }
    return isEmptyError;
  });
}
function checkEmailError(input) {
  const regexEmail =
    /^("(?:[!#-\[\]-\u{10FFFF}]|\\[\t -\u{10FFFF}])*"|[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*)@([!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*|\[[!-Z\^-\u{10FFFF}]*\])$/u;
  input.value = input.value.trim();
  const isEmailError = !regexEmail.test(input.value);
  if (regexEmail.test(input.value)) {
    success(input);
  } else {
    showError(input, "Email chưa hợp lệ");
  }
  return isEmailError;
}
function checkLengthError(input, min, max) {
  input.value = input.value.trim();
  if (input.value.length < min) {
    showError(input, `Độ dài tối thiểu ${min} kí tự`);
    return true;
  }
  if (input.value.length > max) {
    showError(input, `Độ dài tối đa ${max} kí tự`);
    return true;
  }
  success(input);
  return false;
}
function checkMatchPasswordError(inputPassw, inputPassw) { }
// validate form login
if (!(formLogin == null)) {
  formLogin.addEventListener("submit", (e) => {
    let isEmptyError = checkEmtyInput([gmailLogin, passwordLogin]);
    let isEmailError = checkEmailError(gmailLogin);
    let isPassWordLengthError = checkLengthError(passwordLogin, 8, 20);
    if (isEmailError || isEmptyError || isPassWordLengthError) {
      e.preventDefault();
    }
  });
}

// REGEX register
function validation(e) {
  // let gmailRegister = document.getElementById("email").value;
  // let phoneNumber = document.getElementById("phone").value;
  // let password = document.getElementById("password").value;

  let gmailRegister = document.forms["registerForm"]["gmail"].value;

  console.log(gmailRegister);
  


  let phoneRegex = / (?:(?:\+?1\s*(?:[.-]\s*)?)?(?:(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]‌​)\s*)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)([2-9]1[02-9]‌​|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})\s*(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+)\s*)?$/

  let emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;


  if (emailcheck.test(gmailRegister)) {
   let errr =  document.getElementById("error-mail").innerHTML = " ";
   errr.innerHTML = " "
   console.log(errr)
  } else {
    document.getElementById('error-mail').innerHTML = "Email này đã được sử dụng";
    return false;
  }


  if (gmailRegister == null || phoneNumber == null) {
    e.preventDefault();
    return false;
  }
  // phone
  if (phoneRegex.test(phoneNumber)) {
    document.getElementById("error-phone").innerHTML = " ";
  } else {
    document.getElementById("error-phone").innerHTML = "Phải là các con số";
    return false;
  }

  if (password < 6) {
    document.getElementById("e-pass").innerHTML = "Không được nhỏ quá 6 kí tự";
    return false;
  }
  
}
// validate form đăng ký
console.log(validation());
// console.log(
//   nameRegister,
//   gmailRegister,
//   passwordRegister,
//   enterPasswordRegister,
//   locationRegister,
//   phoneRegister
// );
