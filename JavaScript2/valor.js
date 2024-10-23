var inputalcool = document.getElementById("alcool");
var inputgasolina = document.getElementById("gasolina");
var btnChecar = document.getElementById("calcular");
var inputresultado = document.getElementById("exibir");

btnChecar.addEventListener("click", calculo);

function calculo() {

  // A variável Validar começa como false, assumindo que não há problemas. Se algum campo estiver vazio, Validar é alterada para true, indicando que há um erro que precisa ser corrigido antes de calcular se vale a pena usar gasolina ou álcool.
  let validar = false

  // Verifica se os campos peso e altura estão preenchidos. Se não, chama a função adicionaAlerta e define Validacao como true.
  if(inputalcool.value == '') {
    adicionaAlerta(inputalcool, 'Adicione um valor a gasolina')
    validar = true
  } else {
    removeAlerta(inputalcool)
  } 

  if(inputgasolina.value == '') {
    adicionaAlerta(inputgasolina, 'Adicione um valor a gasolina')
    validar = true
  } else {
    removeAlerta(inputgasolina)
  }

  // alculo para calcular e definir se vale a pena gasolina ou álcool

  let valoralcool = parseFloat(inputalcool.value);
  let valorgasolina = parseFloat(inputgasolina.value);
  let valor = 0;

  valor = (valorgasolina * 0.7)

  // usando a variável validar para alertar caso não haja um preenchimento correto dos campos
  if(validar) {
    inputresultado.value = "Preencha os campos corretamente"
  } else if (valor > valoralcool) {
    inputresultado.value = 'Vale a pena usar Alcool'
    document.getElementById('pagina').style.backgroundColor = "red";

  } else if(valor < valoralcool) {
    inputresultado.value = 'Vale a pena usar gasolina'
    document.getElementById('pagina').style.backgroundColor = "green";
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
