DESAFIO
Você precisa criar um programa que calcule a soma de todos os números entre 1 e um número fornecido pelo usuário, exceto aqueles que são divisíveis por 3.

ENTRADA
O programa deve receber a entrada do usuário, que deve ser um número inteiro positivo. Em seguida, o programa deve calcular a soma de todos os números entre 1 e o 
número fornecido pelo usuário, exceto aqueles que são divisíveis por 3.

SAÍDA
A saída do programa deve imprimir um texto com a soma dos números de 1 até o número fornecido pelo usuário (exceto aqueles divisíveis por 3).

EXEMPLOS
A tabela abaixo apresenta exemplos com alguns dados de entrada e suas respectivas saídas esperadas. Certifique-se de testar seu programa com esses exemplos e com outros 
casos possíveis.

--------------------------------------------
| ENTRADA |              SAÍDA             |
|    10   |   Soma dos números de 1 a 10,  |
|         | exceto os divisíveis por 3: 38 |
--------------------------------------------
|    5    |   Soma dos números de 1 a 5,   |
|         | exceto os divisíveis por 3: 12 |
--------------------------------------------
|    3    |   Soma dos números de 1 a 3,   |
|         |  exceto os divisíveis por 3: 4 |
--------------------------------------------

CÓDIGO

<?php
  // Leia o número fornecido pelo usuário.
  $numero = intval(fgets(STDIN));

  // Inicializa a variável que irá guardar a soma dos números (exceto os divisíveis por 3).
  $soma = 0;

  // Loop para somar os números de 1 até o número fornecido pelo usuário.
  for ($i = 1; $i <= $numero; $i++) {
    // Verifica se o número é divisível por 3.
    if ($i % 3 != 0) {
      // Se não for divisível por 3, adiciona o número à variável soma.
      $soma += $i;
    }
  }

  // Imprime a saída formatada com a soma dos números (exceto os divisíveis por 3).
  echo "Soma dos números de 1 a $numero, exceto os divisíveis por 3: $soma";
?>
