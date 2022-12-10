const checkDate = (str) => {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    let monthTurnover = document.querySelector(".monthTurnover");
    monthTurnover.innerHTML = `Tháng ${str}`;
    let parentNode = document
      .querySelector(".dataTurnover")
      .getElementsByTagName("tbody")[0];
    parentNode.remove();
    let table = document.querySelector(".dataTurnover");
    const tbody = document.createElement("tbody");
    tbody.innerHTML = this.responseText;
    table.appendChild(tbody);
  };
  xhttp.open("GET", "./ajax/turnover.php?q=" + str);
  xhttp.send();
};
const seachLive = document.querySelector("#seach-Live");
seachLive.addEventListener("keyup", (e) => {
  q = e.target.value;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    const spaceShow = document.querySelector(".header__search-history-list");
    spaceShow.innerHTML = this.response;
  };
  xhttp.open("GET", "./ajax/seachProduct.php?q=" + q);
  xhttp.send();
});
