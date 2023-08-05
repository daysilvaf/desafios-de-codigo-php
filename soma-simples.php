DESAFIO
Leia dois valores inteiros identificados como variáveis A e B. Calcule a soma entre elas e chame essa variável de SOMA.
A seguir escreva o valor desta variável.

ENTRADA
O arquivo de entrada contém 2 valores inteiros.

SAÍDA
Imprima a variável SOMA com todas as letras maiúsculas, inserindo um espaço em branco antes e depois do símbolo de igualdade, seguido pelo valor correspondente à 
soma de A e B.

-------------------------------------------
| EXEMPLOS DE ENTRADA | EXEMPLOS DE SAÍDA |
|          30         |                   |
|          10         |                   |
-------------------------------------------
|          -30        |                   |
|          10         |                   |
-------------------------------------------
|           0         |                   |
|           0         |                   |
-------------------------------------------

CÓDIGO

<?php
  $a = fgets(STDIN);
  $b = fgets(STDIN);

  // Realize a soma das duas variáveis e armazene o resultado em uma nova variável $soma.
  $soma = $a + $b;

  // Imprima o resultado da soma no formato "SOMA = $soma".
  echo "SOMA = " . $soma;
?>
