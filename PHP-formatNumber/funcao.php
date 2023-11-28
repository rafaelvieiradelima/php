<?php

function formatValor($valor)
{
    return number_format($valor,2,',','.');

}

function data()
{
    return $data=strtotime(date('d/m/y H: i:s'));
}

function dataEnvioMensagem(string $data)
{
   $agora=strtotime(date('Y-m-d H:i:s'));
   echo '<br>';
   $passado=strtotime($data);
   $diferenca=$agora-$passado;
   $diferenca;
  
   $minuto=round($diferenca/60);
   $hora=round($diferenca/3600);
   $dias=round($diferenca/86400);
   $semanas=round($diferenca/604800);
   $meses=round($diferenca/2419200);
   $anos=round($diferenca/29030400);
  
   if($minuto<=60)
   {
     return $minuto== 1 ? 'há 1 minuto':'há'.$minuto.'minutos';
   }
   elseif($hora<=24)
   {
     return $hora==1 ? 'há 1 hora': 'há'.$hora.'horas';
   }
   elseif($semanas<=7)
   {
     return $semanas==1 ? 'há 1 semanas': 'há'.$semanas.'semanas';
   }
   elseif($meses<=12)
   {
     return $meses==1 ? 'há 1 mês': 'há'.$meses.'mês';
   }

}


function tamanho(string $tamanhoo)
{
  
  return mb_strlen (trim($tamanhoo));

}

function validarEmail(string $email):bool
{
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}


function validarUrl(string $url):bool
{
   return  filter_var($url,FILTER_VALIDATE_URL);
}