<?php
  
  $peso = readline("Digite seu Peso: ");
  $altura = readline("Digite sua Altura: ");

  $imc = ($peso/($altura*$altura));

  if($imc < 18.5)
  {
    echo "Seu IMC eh: " . number_format($imc,2) . "\n";
    echo "Cuidado, você esta muito abaixo do peso\n";
  }
  else if($imc <= 24.9)
  {
    echo "Seu IMC eh: " . number_format($imc,2) . "\n";
    echo "Seu peso esta normal\n";
  } 
  else if($imc <= 29.9)
  {
    echo "Seu IMC eh: " . number_format($imc,2) . "\n";
    echo "Voce esta sobrepeso\n";
  }
  else if($imc <= 39.9)
  {
    echo "Seu IMC eh: " . number_format($imc,2) . "\n";
    echo "Cuidado, voce esta com um grau de obesidade\n";
  }
  else 
  {
    echo "Seu IMC eh: " . number_format($imc,2) . "\n";
    echo "Procure um medico especialista, voce esta com um grau de obesidade grave!!";
  }

?>
