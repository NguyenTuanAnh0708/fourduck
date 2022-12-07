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
function checkMatchPasswordError(inputPassw, inputPassw) {}
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
// validate form đăng ký
console.log(
  nameRegister,
  gmailRegister,
  passwordRegister,
  enterPasswordRegister,
  locationRegister,
  phoneRegister
);
