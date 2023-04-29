//const numberInput = document.getElementById('number-input');

//acessando todos os inputs
//const numbersInput = document.querySelectorAll('#number-input')


//console.log(numbersInput);

const form = document.getElementById('form');
form.addEventListener('submit',function(ev){
    ev.preventDefault()
    
    //definindo o no pai
const inputs = document.getElementById('inputs');

//crio o filho
const newInput = document.createElement('input');
//seeto os atributos
newInput.id = "number-input"
newInput.className = "number-input"
newInput.value= "0"
//coloco o filho dentro do no pai
inputs.appendChild(newInput)
})