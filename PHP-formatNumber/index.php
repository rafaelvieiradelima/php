<?php

include 'funcao.php';
include 'configuracao.php';

echo '1';
dataEnvioMensagem('2023-07-28 23:20:15');

echo var_dump(validarEmail('evere@hotmail.com'));
echo '<br>';
echo var_dump(validarUrl('https://www.google.com.br/'));