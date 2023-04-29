var podeCalcularMedia = true;
var numeros = [];

const btnAdd = document.getElementById("btn-add");
btnAdd.addEventListener("click", function (ev) {
  const inputs = document.getElementById("inputs");
  const newInput = document.createElement("input");

  newInput.id = "number-input";
  newInput.className = "number-input";
  newInput.value = "0";
  newInput.placeholder = "digite um numero";
  newInput.type = "number";
  inputs.appendChild(newInput);

  console.log(newInput.value);
  numeros.push(Number(newInput.value));

  if (podeCalcularMedia) exibirButtonCalcularMedia();
});

const btnSubmit = document.getElementById("form");
btnSubmit.addEventListener("submit", function (ev) {
  ev.preventDefault();
  const ni = document.querySelectorAll("#number-input");

  for (let i = 0; i < ni.length; i++) {
    let htmlElemento = ni[i];
    let valor = htmlElemento.value;
    console.log(valor);
    numeros.push(valor);
  }
});

function exibirButtonCalcularMedia() {
  podeCalcularMedia = false;

  const inputs = document.getElementById("btns");
  const newBtn = document.createElement("input");
  newBtn.type = "submit";
  newBtn.id = "btn-submit";
  newBtn.className = "btn";
  newBtn.style = "background-color: aliceblue";
  newBtn.value = "Calcular média";
  inputs.appendChild(newBtn);
}
