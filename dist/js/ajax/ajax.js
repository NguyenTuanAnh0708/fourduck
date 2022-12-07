const checkDate = (str) => {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    // const tr = document.querySelector(".dataTurnover");
    // const newItem = document.createElement("<tr>");
    // newItem.innerHTML = this.responseText;
    // tr.parentNode.replaceChild(newItem, tr);
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
// document.addEventListener("onload", () => {
// let parentNode = document
//   .querySelector(".dataTurnover")
//   .getElementsByTagName("tbody")[0];
// let child = parentNode.childNodes.length;
// console.log(parentNode.childNodes[2]);
// // });
