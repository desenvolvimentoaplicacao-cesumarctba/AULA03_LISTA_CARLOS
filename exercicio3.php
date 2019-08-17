<?php

  $far = readline("Digite a Temp em Farenheit: ");

  $cels =  ((($far - 32) * 5) / 9);

  echo "Valor em Celsius: " . $cels;

?>