
var inputPeso = document.getElementById('peso');
var inputAltura = document.getElementById('altura');
var btnCalcular = document.getElementById('btnCalcular');
var inputTextArea = document.getElementById('retorno');

btnCalcular.addEventListener('click', calcular);

function calcular(){

// A variável Validacao começa como false, assumindo que não há problemas. Se algum campo estiver vazio, Validacao é alterada para true, indicando que há um erro que precisa ser corrigido antes de calcular o IMC.

    let Validacao = false;

// Verifica se os campos peso e altura estão preenchidos. Se não, chama a função adicionaAlerta e define Validacao como true.

        if(inputPeso.value == ""){
            adicionaAlerta(inputPeso, 'Adicione um valor ao peso!')
            Validacao = true;
        }else{
            removeAlerta(inputPeso);
        } 
        
        if(inputAltura.value == ""){
            adicionaAlerta(inputAltura, 'Adicione um valor a altura!')
            Validacao = true;    
        } else{
            removeAlerta(inputAltura);
        }

// Se ambos os campos estiverem preenchidos, calcula o IMC

    let peso = parseFloat(inputPeso.value);
    let altura = parseFloat(inputAltura.value);
    let imc = 0;

    imc = peso / (altura ** 2);

// A variável Validacao é usada como um sinalizador que indica se houve algum problema nos campos peso ou altura

        if(Validacao){
            inputTextArea.value = 'Preencha os campos corretamente';
      
        } else if (imc < 18.5) {
            inputTextArea.value = `Abaixo do peso - índice: ${imc}`;
            document.getElementById('pagina').style.backgroundColor = 'green';
            
        } else if (imc <= 24.99) {
            inputTextArea.value = `Peso normal - índice:  ${imc}`;
            document.getElementById('pagina').style.backgroundColor = 'lightgreen';

        } else if (imc <= 29.99) {
            inputTextArea.value = `Sobrepeso - índice:  ${imc}`;
            document.getElementById('pagina').style.backgroundColor = 'orange';

        } else if (imc => 30) {
            inputTextArea.value = `Obesidade - índice:  ${imc}`;
            document.getElementById('pagina').style.backgroundColor = 'red';
        }
}

// Adiciona um alerta se o valor estiver vazio, muda a cor da borda do campo e da página.
function adicionaAlerta(input, mensagem) {
    input.style.borderColor = 'red';
    document.getElementById('pagina').style.backgroundColor = 'white';
    var p = document.getElementsByClassName('alerta-' + input.id)[0];
    p.textContent = mensagem;
    p.classList.add('alerta-danger'); // Adiciona a classe para cor de erro
  }

// Remove o alerta caso ele seja preenchido corretamente.
function removeAlerta(input) {
    input.style.borderColor = '';
    var p = document.getElementsByClassName('alerta-' + input.id)[0];
    p.textContent = '';
    p.classList.remove('alerta-danger'); // Remove a classe de cor de erro
  }
