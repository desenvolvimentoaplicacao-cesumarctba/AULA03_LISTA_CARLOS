<?php

  $far = readline("Digite a Temp em Farenheit: ");

  $cels = ((($far - 32) * 5)/9);

  $kelvin = ($cels + 273.15);
  echo "Valor em Kelvin: " . $kelvin;

?>